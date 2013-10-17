	function playAudio(audio){
		document.getElementById(audio).play();
	}
	
	/*

	---------Add the following to your HTML doc (somewhere above the JavaScript include) --------

	<audio id="audio" src="audio.wma" preload="auto" controls></audio>

	--------Add this as an event handler to your documents opening <body> tag----------

	onload="playAudio('audio')"

	---------In your HTML <head> element, add the following ------------
	<script src="scripts/audio.js" >

