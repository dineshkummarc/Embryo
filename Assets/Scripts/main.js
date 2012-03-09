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

require(["Utils/Animation/easings", "Utils/Animation/morpheus", "videos", "twitter"], function (easings, morpheus) {

	// Animation example (using Morpheus)
	
	var header = document.getElementsByTagName("h1")[0];
	header.style.position = "relative";
		
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

});