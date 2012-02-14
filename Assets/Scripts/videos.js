define(['Utils/Patterns/when', 'Utils/Flash/swfobject', 'async!http://gdata.youtube.com/feeds/api/videos?author=OfficialBasRutten&alt=json'], function(when, swf, videos){

	// Reference:
	// http://perfectionkills.com/unnecessarily-comprehensive-look-into-a-rather-insignificant-issue-of-global-objects-creation/
	var global = (function(){return this;}()),
		doc = document,
		params, 
		atts, 
		id = videos.feed.entry[0].id.$t.split('videos/')[1],
		flash = doc.createElement('div'),
		container = doc.getElementsByTagName('div')[0];

	function async(template) {
		var dfd = when.defer(),
			tmp = template({ 
				title: 'Flash content inserted via JavaScript using a template to render content'
			}),
			timer;
		
		// Because template() function is asynchronous (and no callback built-in)
		// we use a timer to keep track of 'tmp' value
		timer = global.setInterval(function(){ 
			(!!tmp) 
				? (global.clearInterval(timer), dfd.resolve(tmp)) 
				: null; 
		}, 25);		
		
		return dfd.promise;
	}
		
	function handler() {
        require(['tpl!../Templates/Video.tpl'], function(template) {
			// wait for async to finish templating
            when(async(template), function(htmlFragment) {
				var frag = doc.createDocumentFragment(),
					div = doc.createElement('div');
				
				// Insert 'confirmation' header into page above the Flash file
				div.innerHTML = htmlFragment;
				frag.appendChild(div);
				container.insertBefore(frag, doc.getElementById('currentvideo'));
            });
        });
	}
	
	flash.id = 'insertflash';
	atts = { id: 'currentvideo' };
	
	container.appendChild(flash);
	
	swf.embedSWF('http://www.youtube.com/v/' + id + '?enablejsapi=1&playerapiid=ytplayer&version=3', 'insertflash', '270', '150', '8', null, null, null, atts, handler);

});