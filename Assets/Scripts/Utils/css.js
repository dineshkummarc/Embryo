define(['Utils/CSS/getAppliedStyle', 
		'Utils/CSS/getArrayOfClassNames', 
		'Utils/CSS/addClass', 
		'Utils/CSS/removeClass', 
		'Utils/CSS/hasClass'], function(getAppliedStyle, getArrayOfClassNames, addClass, removeClass, hasClass){

	return {
		style: getAppliedStyle,
		classes: getArrayOfClassNames,
		add: addClass,
		remove: removeClass,
		has: hasClass
	}

});