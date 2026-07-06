const tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
const firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

let player;

function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    height: '450',
    width: '800',
    videoId: 'ftNWQ_dzaSk',
    playerVars: {
      autoplay: 1,
      mute: 1,
      loop: 1,
      playlist: 'ftNWQ_dzaSk',
      rel: 0,
      controls: 1
    },
    events: {
      'onReady': function (event) {
        event.target.playVideo();

        const button = document.querySelector('#movie-sound');
        const modalCloses = document.querySelectorAll('.modal-overlay,.modalCloseTop');

        function toggleSound(el) {
          if (player.isMuted()) {
            player.unMute();
            if (el) el.textContent = "音声をOFFにする";
          } else {
            player.mute();
            if (el) el.textContent = "音声をONにする";
          }
        }

        if (button) {
          button.addEventListener('click', () => {
            toggleSound(button);
          });
        }

        modalCloses.forEach(closeEl => {
          closeEl.addEventListener('click', () => {
            player.mute();
            if (closeEl) button.textContent = "音声をONにする";
          });
        });
      }
    }
  });
}

