require(['Tests/test-ajax', 
		 'Tests/test-array',  
		 'Tests/test-css', 
		 'Tests/test-dictionary',  
		 'Tests/test-dom', 
		 'Tests/test-get', 
		 'Tests/test-host',  
		 'Tests/test-json',  
		 'Tests/test-polyfills',  
		 'Tests/test-string'], function(){

	jasmine.getEnv().addReporter(new jasmine.TrivialReporter());
	jasmine.getEnv().execute();

});