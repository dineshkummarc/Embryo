define(function(require){

	return {
		docheight: require('Utils/DOM/getDocHeight'),
		el: require('Utils/DOM/getEl'),
		offset: require('Utils/DOM/getOffset'),
		tag: require('Utils/DOM/getTag'),
		type: require('Utils/DOM/getType')
	};

});