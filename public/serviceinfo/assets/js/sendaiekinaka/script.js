'use strict';

$(function () {
    function initPanzoom(map) {
        if (!map || map._panzoom) return;
        map._panzoom = Panzoom(map, {
            maxScale: 3,
            minScale: 1,
            step: 0.3,
        });
    }

    document.querySelectorAll('.map-wrap').forEach((wrap) => {
        function getActiveMap() {
            return wrap.querySelector('.map:not(.hidden) .zoom-map');
        }

        const firstMap = getActiveMap();
        if (firstMap) initPanzoom(firstMap);

        const zoomIn = wrap.querySelector('.zoom-in');
        const zoomOut = wrap.querySelector('.zoom-out');

        if (zoomIn) {
            zoomIn.addEventListener('click', () => {
                const map = getActiveMap();
                if (!map) return;
                initPanzoom(map);
                map._panzoom.zoomIn();
            });
        }

        if (zoomOut) {
            zoomOut.addEventListener('click', () => {
                const map = getActiveMap();
                if (!map) return;
                initPanzoom(map);
                map._panzoom.zoomOut();
            });
        }

        const tab = wrap.closest('.tab');
        if (!tab) return;

        $(tab).find('.tab-list').on('click', 'li > a', function (e) {
            e.preventDefault();
            const $this = $(this);
            const tabId = $this.data('tabid');
            const $panel = $(tab).find('.tab-panel');

            $panel.children('.map').each(function () {
                const $content = $(this);

                if ($content.data('contentid') == tabId) {
                    $content.removeClass('hidden');
                    const map = $content.find('.zoom-map').get(0);
                    if (!map) return;
                    if (map._panzoom) {
                        map._panzoom.destroy();
                        map._panzoom = null;
                    }
                    initPanzoom(map);
                } else {
                    $content.addClass('hidden');
                }
            });

            $(tab).find('li').removeClass('selected');
            $this.parent().addClass('selected');
        });
    });
});

const tag = document.createElement("script");
tag.src = "https://www.youtube.com/player_api";
const firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
let players = [];

function onYouTubeIframeAPIReady() {
	players.push(createPlayer("player1", "EGRKOYZ__x4"));
	players.push(createPlayer("player2", "Hx3iJNlbUtk"));
}

function createPlayer(playerId, videoId) {
  return new YT.Player(playerId, {
	width: 496,
	height: 280,
	videoId: videoId,
	playerVars: {
	  loop: 1,
	  rel: 0,
	  playsinline: 1,
	},
	events: {
	  onReady: function(event) {
		onPlayerReady(event, playerId);
	  },
	},
  });
}
function onPlayerReady(event, playerId) {
	const player = event.target;
	const playButton = document.querySelector(`.${playerId} .thumb`);
	playButton.addEventListener("click", function () {
	  player.playVideo();
	  playButton.style.display = "none";
	});
}
