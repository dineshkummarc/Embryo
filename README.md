Project Template
================================

Description
-----------

These are a standard set of files, scripts, stylesheets, folder structures that I use whenever I start a new web project.

There are a couple of scripts I rarely use nowadays, these being: jQuery (+ two plugins), SWFObject - but I've included them for those odd occasions.

You'll notice the MVC scripts have no corresponding HTML(View) - that's because I took the example from another repo. The principles for my MVC work is nearly always the same and the code only changes slightly to reflect the different Models/Views involved so I'm happy to just edit the existing MVC code to suit my needs (if you need to better understand the code then view the 'MVC Start-up Kit' repo linked below)

Google Pagespeed Module
-----------------------

On our Apache server we have the [Google Pagespeed Module](http://code.google.com/p/modpagespeed/) installed so there are certain things that we don't do which we used to. Things like combining multiple stylesheets into one we don't do any more because the module handles that, and caches the combined files.

JavaScript Libraries
--------------------

There are a few different JavaScript libraries we use:

* [HTML5Shim](http://www.iecss.com/print-protector/) - 
"IE Print Protector helps IE render HTML5 elements correctly, both on screen and in print."

* [RequireJs](http://www.requirejs.org/) - 
"RequireJS loads plain JavaScript files as well as more defined modules"

* [When](https://github.com/briancavalier/when.js#readme) - 
"A lightweight CommonJS Promises/A and when() implementation. It also provides several other useful Promise-related concepts, such as joining and chaining, and has a robust unit test suite."

* [Morpheus](https://github.com/ded/morpheus#readme) - 
"A Brilliant Animator. Morpheus lets you "tween anything" in parallel on multiple elements"

* [PubSubz](https://github.com/addyosmani/pubsubz#readme) - 
"Just another compact library-agnostic Pub/Sub implementation."

* [MVC Starter](https://github.com/Integralist/MVC-Start-up-Kit/tree/library_agnostic#readme) - 
"Basic JavaScript implementation of the classic MVC design pattern"

* [Jasmine BDD](http://pivotal.github.com/jasmine/) - 
"Jasmine is a behavior-driven development framework for testing your JavaScript code. It does not depend on any other JavaScript frameworks. It does not require a DOM. And it has a clean, obvious syntax so that you can easily write tests."

* [Google Analytics](http://www.google.com/analytics/) - 
"Google Analytics is the enterprise-class web analytics solution that gives you rich insights into your website traffic and marketing effectiveness"