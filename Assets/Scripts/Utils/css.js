/*
 * Although there are no dependancies we're still able to pass through 'require' as an argument.
 * Explanation: https://gist.github.com/1663422#gistcomment-78062
 * Reference: https://github.com/jrburke/requirejs/wiki/Differences-between-the-simplified-CommonJS-wrapper-and-standard-AMD-define
 */
define(function(require){

	return {
		style: require('./CSS/getAppliedStyle'),
		classes: require('./CSS/getArrayOfClassNames'),
		add: require('./CSS/addClass'),
		remove: require('./CSS/removeClass'),
		has: require('./CSS/hasClass')
	};

});