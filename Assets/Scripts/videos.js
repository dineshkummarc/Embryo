define(['Utils/swfobject', 'async!http://gdata.youtube.com/feeds/api/videos?author=OfficialBasRutten&alt=json'], function(swf, videos){

	var params, 
		atts, 
		id = videos.feed.entry[0].id.$t.split('videos/')[1],
		flash = document.createElement('div');

	flash.id = 'insertflash';
	document.getElementById('container').appendChild(flash);
	
	atts = { id: "currentvideo" };
	
	swf.embedSWF('http://www.youtube.com/v/' + id + '?enablejsapi=1&playerapiid=ytplayer&version=3', 'insertflash', '270', '150', '8', null, null, null, atts);

});