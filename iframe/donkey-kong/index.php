<!DOCTYPE html>
<html lang="en-US">
<head>

<script src="https://retrobowl.me/iframe/donkey-kong/js/core-game-site.js"></script>
<script src="https://retrobowl.me/iframe/donkey-kong/js/screenfull.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://retrobowl.me/iframe/donkey-kong/css/core-game-site.css">

<script>window.RufflePlayer = window.RufflePlayer || {};
		window.RufflePlayer.config = {"autoplay": "on", "unmuteOverlay": "hidden",};
		window.addEventListener("load", (event) => {
			const ruffle = window.RufflePlayer.newest();
			const player = ruffle.createPlayer();
			const container = document.getElementById("game-container");
			container.appendChild(player);
			player.load("donkey-kong.swf");
			var loadingscreen = document.getElementById("loading-screen");
			loadingscreen.remove();
		});</script>
</head>
<body>
<div id="full-page-container">

<header>
<div id="header-message">
<p>Click on the game area and press ENTER to start. Game may not work on mobile.</p>
</div>
</header>


<main>
<div id="game-container" style="background-image: url('https://retrobowl.me/iframe/donkey-kong/images/joystick-150-coffee.gif'); background-repeat: no-repeat; background-position: center;">
<div id="loading-screen">
<p class="loading-screen-text"></p>
</div>
</div>
</main>

</div>
<script>// Detect change in full screen mode and do stuff
if (screenfull.isEnabled) {
	screenfull.on('change', () => {
		
		var fsb = document.getElementById("full-screen-button");
		var hm = document.getElementById("header-message");
		var leftad = document.getElementById("leftad");
		var rightad = document.getElementById("rightad");
		var footernav = document.getElementById("footer-navigation");
		
		if (screenfull.isFullscreen) {			  
			  fsb.style.display = "none";
			  hm.style.display = "none";
			  leftad.style.display = "none";
			  rightad.style.display = "none";
			  footernav.style.display = "none";
		  }
		  else {
			  fsb.style.display = "block";
			  hm.style.display = "block";
			  leftad.style.display = "block";
			  rightad.style.display = "block";
			  footernav.style.display = "block";
		  }
		console.log('Am I fullscreen?', screenfull.isFullscreen ? 'Yes' : 'No');
	});
}</script>
<script src="https://flash.w3technic.com/flash/ruffle.js"></script>
<script>// Set the options globally
      // to make LazyLoad self-initialize
      window.lazyLoadOptions = {
        // Your custom settings go here
      };</script>
<script async defer src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.1/dist/lazyload.min.js"></script>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6271f5abca80cec0"></script>
</body>
</html>