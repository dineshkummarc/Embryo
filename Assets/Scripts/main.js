require.config({ 
	catchError: {
		define: true
	},
	paths: {
		async: 'Plugins/async',
		jquery: 'Utils/Libraries/jquery',
		tpl: 'Plugins/tpl'
	}
});

require(['errorhandler'], function(handler) {
	console.log('error handler loaded');
	require.onError = handler;
});

require(['videos', 'twitter']);