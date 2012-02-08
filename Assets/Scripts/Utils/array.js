/*
 * Although there are no dependancies we're still able to pass through 'require' as an argument.
 * Explanation: https://gist.github.com/1663422#gistcomment-78062
 */
define(function(require){

	return {
		filter: require('./Array/filter'),
		forEach: require('./Array/forEach'),
		indexOf: require('./Array/indexOf'),
		lastIndexOf: require('./Array/lastIndexOf'),
		map: require('./Array/map'),
		reduce: require('./Array/reduce'),
		reduceRight: require('./Array/reduceRight'),
		toArray: require('./Array/toArray'),
		unique: require('./Array/unique')
	};

});