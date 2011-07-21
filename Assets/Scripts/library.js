//
//  Library
//
//  Created by Storm Creative on 2010-11-07.
//  Copyright (c) Storm Creative. All rights reserved.
//

var Storm = {
	/**
	 * Following properties provide access to the global properties (this improves scope lookup)
	 */
	win: window,
	doc: document,
	
	/**
	 * Following property tells us if the application is running on a local server or a production server.
	 * 
	 * @return check { Boolean } true or false
	 */
	isLocal: (function() {
		var pattern = /8888/i, 
			 check = pattern.test(document.location);
			 
		return check;
	}()),
		
	/**
	 * Following property provides the relevant prefix for URL's dependant on where the application is running (e.g. remotely or localhost).
	 * 
	 * @return cache { String } either a directory path or a individual forward-slash (representing the root of the server)
	 */
	root: (function() {
		var cache;
		return function() {
			if (cache) {
				return cache;
			} else {
				cache = (this.isLocal) ? '/Template-Linux/' : '/';
				return cache;
			}
		};
	}()),
	
	/**
	 * Following property indicates whether the current rendering engine is Trident (i.e. Internet Explorer)
	 * 
	 * @return v { Integer|undefined } if IE then returns the version, otherwise returns 'undefined' to indicate NOT a IE browser
	 */
	isIE: (function() {
		var undef,
			v = 3,
			div = document.createElement('div'),
			all = div.getElementsByTagName('i');
	
		while (
			div.innerHTML = '<!--[if gt IE ' + (++v) + ']><i></i><![endif]-->',
			all[0]
		);
	
		return v > 4 ? v : undef;	
	}()),
	
	/**
	 * Following property indicates whether the current browser supports the HTML5 (Form Input) 'placeholder' attribute.
	 * 
	 * @return { Boolean } true|false depending if the feature is supported
	 */
	supportPlaceholder: (function() {
		return 'placeholder' in document.createElement('input');
	}()),
	
	/**
	 * Following property indicates whether the current browser supports the HTML5 (Form Input) 'email' type attribute.
	 * 
	 * @return i.type { Boolean } true|false depending if the feature is supported
	 */
	supportEmailInput: (function() {
		var i = document.createElement('input');
		i.setAttribute('type', 'email');
		return i.type !== 'text';
	}()),
		
	/**
	 * Following method provides 'prototypal' inheritance to the object passed in.
	 * Example Usage: var Child = inherit(Parent);
	 * 
	 * @param parent { Object } the object we want to inherit from
	 * @return F { Function Instance } new instance of the proxy function 'F()'
	 */
	inherit: function(parent) {
		function F() {}
		F.prototype = parent;
		return new F();
	},
		
	/**
	 * Following method truncates a string by the length specified.
	 * The second argument is the suffix (e.g. rather than ... you could have !!!)
	 *
	 * @param str { String } the string to 
	 * @param length { Integer } the length the string should be (if none specified a default is used)
	 * @param suffix { String } default value is ... but can be overidden with any number of characters
	 * @return { String } the modified String value
	 */
	truncate: function(str, length, suffix) {
		length = length || 30;
		suffix = (typeof suffix == "undefined") ? '...' : suffix;
		
		// if the string isn't longer than the specified cut-off length then just return the original string
		return (str.length > length) ? /* next we borrow the String object's "slice()" method using the "call()" method */ String.prototype.slice.call(str, 0, length - suffix.length) + suffix : str;
	},
		
	/**
	 * Following method finds all <A> elements that link to an external URL and sets them to open in a popup window
	 *
	 * @return { Function } anonymous function that triggers new window
	 */
	popups: function() {
		var that = this; // Required to keep scope within the below Closure (the returned function creates the Closure)
		this.settings = 'location=yes,resizable=yes,width=' + screen.availWidth + ',height=' + screen.availHeight + ',scrollbars=1,left=0,top=0';
		this.popup = function(node) {
			var url = node.href;		
			return function() {
				that.win.open(url, 'external' , that.settings);
				return false;
			};
		};
	
		var a = this.doc.getElementsByTagName('a'), // Private variable to store HTMLCollection of all <A> elements
			len = a.length, // Store array length in variable
			/**
			 * ^ start at beginning of string
			 * (?:[.\/]+)? optional non-capturing group that sees if url starts with a directory path (e.g. "../../")
			 * (?:) a non-capturing group which looks first for "Assets" or "https" (s is optional)
			 * :\/\/ is looking for literal "://"
			 * Then still within NCG we have a negative lookahead assertion (?!)
			 * Negative lookahead checks that the URL doesn't contain the main website domain (if it doesn't then the match is considered a success).
			 */
			pattern = /^(?:[.\/]+)?(?:Assets|https?:\/\/(?!(?:www\.)?xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx))/i; // RegExp pattern to match any external URL's but not the current website
	
		// Loop through the array checking for any A elements that link to an external URL
		while (len--) {
			var element = a[len].getAttribute('href');
			if (pattern.test(element)) {
				a[len].onclick = this.popup(a[len]);
			}
		}
	},
		
	// Initialisation checks
	init: function(component) {
		if (component === undefined) {
			component = {};
		}
		
		if (component.dd) {
			alert('Im a test component');
		}
	}
};