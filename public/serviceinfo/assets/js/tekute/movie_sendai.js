(function() {
	"use strict";
	var tag = document.createElement("script"),
		firstScriptTag = document.getElementsByTagName("script")[0];
	tag.src = "https://www.youtube.com/iframe_api";
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	function onYouTubeIframeAPIReady() {
		new YT.Player("player", {
			width: '100%',
			height: '100%',
			videoId: "9m4rnwgDsoc",
			playerVars: {
				mute: 0,
				// controls: 0,
				// disablekb: 0,
				// fs: 0,
				// iv_load_policy: 3,
				// modestbranding: 1,
				// playsinline: 1,
				// rel: 0,
				// showinfo: 0
			},
			events: {
				"onReady": onPlayerReady,
				"onStateChange": onPlayerStateChange
			}
		});
	}
	function onPlayerReady(evt) {
		evt.target.mute();
		if($(window).innerWidth() > 769) {
		   evt.target.playVideo();
		}
	}
	function onPlayerStateChange(evt) {
		if (evt.data === YT.PlayerState.ENDED) {
			evt.target.playVideo();
		}
	}
	window.onYouTubeIframeAPIReady = onYouTubeIframeAPIReady;
})();
