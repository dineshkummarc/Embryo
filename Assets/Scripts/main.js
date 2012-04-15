require.config({ 
	catchError: {
		define: true
	},
	paths: {
		async: "Plugins/async",
		jquery: "Utils/Libraries/jquery",
		tpl: "Plugins/tpl"
	}
});

require(["ErrorHandler/errors"], function (handler) {
	console.log("error handler loaded");
	require.onError = handler;
});

require(["Utils/Animation/easings", "Utils/Animation/morpheus", "Utils/XHR/ajax", "videos", "twitter"], function (easings, morpheus, ajax) {

	// Animation example (using Morpheus)
	
	var header = document.getElementsByTagName("h1")[0];
	
	// Realistically you would style this element via CSS not inline styles via Js
	// I'm just hacking this together as a quick example!
	header.style.position = "absolute";
	header.parentNode.style.paddingTop = "83px";	
		
	morpheus(header, {
		backgroundColor: "#00f",
		duration: 3000,
		opacity: 0.5,
		color: "#ff0000",
		left: 400,
		easing: easings.bounce,
		complete: function () {
        	alert("animation finished");
        }
	});
	
	// XHR Example
	ajax({
	   url: "humans.txt",
	   onSuccess: function (response) {
	       console.log('XHR response: ', response);
	   }
	});

});