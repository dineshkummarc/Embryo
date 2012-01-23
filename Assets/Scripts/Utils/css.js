define(function(require){

	return {
		style: require('Utils/CSS/getAppliedStyle'),
		classes: require('Utils/CSS/getArrayOfClassNames'),
		add: require('Utils/CSS/addClass'),
		remove: require('Utils/CSS/removeClass'),
		has: require('Utils/CSS/hasClass')
	}

});