/*
 * Although there are no dependancies we're still able to pass through 'require' as an argument.
 * Explanation: https://gist.github.com/1663422#gistcomment-78062
 * Reference: https://github.com/jrburke/requirejs/wiki/Differences-between-the-simplified-CommonJS-wrapper-and-standard-AMD-define
 */
define(function(require){

	require('./DOM/insertAdjacentHTML');
	require('./DOM/outerHTML');
	
	return {
		elementSiblings: require('./DOM/elementSiblings'),
		insertAfter: require('./DOM/insertAfter')
	};

});