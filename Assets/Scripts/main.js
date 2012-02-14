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

require(['ErrorHandler/errors'], function(handler) {
	console.log('error handler loaded');
	require.onError = handler;
});

require(['videos', 'twitter']);