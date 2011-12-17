define(['Utils/swfobject', 'async!http://gdata.youtube.com/feeds/api/videos?author=stevesattlerfilms&alt=json'], function(swf, videos){

	var params, 
		atts, 
		id = videos.feed.entry[0].id.$t.split('videos/')[1];

	atts = { id: "currentvideo" };
	
	swf.embedSWF('http://www.youtube.com/v/' + id + '?enablejsapi=1&playerapiid=ytplayer&version=3', 'insertflash', '640', '360', '8', null, null, null, atts);

});