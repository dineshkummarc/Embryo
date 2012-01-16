define(function(require){

	return {
		method: require('Utils/Host/isHostMethod'),
		collection: require('Utils/Host/isHostCollection'),
		object: require('Utils/Host/isHostObject')
	};

});