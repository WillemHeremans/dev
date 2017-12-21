(function(){
	var socket = io.connect();

	var canvas    = document.getElementById('canvas'),
		context   = canvas.getContext('2d'),
		video     = document.getElementById('video'),
		vendorUrl = window.URL || window.webkitURL; 

		video.width		= 300;
		video.height	= 200;

		canvas.width 	= video.width,
		canvas.height 	= video.height;

		context.width	= canvas.width,
		context.height	= canvas.height;

		canvas.style.display = "none";

	function loadCam(stream){
		video.src = vendorUrl.createObjectURL(stream),
		video.play();
	}
	function loadFail(err){
		console.log(err);
	}

	function viewCam(image,context){
		context.drawImage(image,0,0,context.width,context.height);
		socket.emit('stream',canvas.toDataURL('image/webp'));
	}

	navigator.getMedia	=	navigator.getUserMedia ||
							navigator.webkitGetUserMedia ||
							navigator.mozGetUserMedia ||
							navigator.msGetUserMedia;

	navigator.getMedia({
		video: true,
		audio: false
	},loadCam,loadFail);

	setInterval(function(){
		viewCam(video,context);
	},500);

	socket.on('stream',function(image){
		var img 	= document.getElementById("play");
			img.src = image;

		console.log(image);
	});
})();