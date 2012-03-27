Project Template
================================

Description
-----------

These are a standard set of files, scripts, stylesheets, folder structures that I use whenever I start a new web project. Below I discuss the different aspects of it.

Google Pagespeed Module
-----------------------

On our Apache server we have the [Google Pagespeed Module](http://code.google.com/p/modpagespeed/) installed so there are certain things that we don't do which we used to. Things like *combining multiple stylesheets into one* we don't do any more because the module handles that, and caches the combined files.

CSS
--------------------

The CSS is 'object-orientated' (OOCSS) as I feel that is the most scalable way to handle projects of any size.

I disagree with the seemingly common tradition of using a CSS reset (mainly because nearly all of them take a 'scored earth policy' approach). So instead I chose to use something similar but not quite a 'reset': [normalise.css](https://github.com/necolas/normalize.css) which normalises style settings across all browsers (and also fixes some rendering bugs). But what makes `normalise.css` so good is that it leaves a lot of the default browser settings in place because they realise that you end up writing more CSS to work-around the reset than you would have written to work-around the browser defaults! I only had a couple of my own customisations (personal preferences such as the amount of line-height spacing) otherwise the rest of it was fine for me to incorporate into my projects.

I also liked the stylings for some of the elements (such as buttons, alert spans etc) from the [Twitter Bootstrap](https://github.com/twitter/bootstrap) framework, but I didn't want the entire framework - just those small items. So I took the framework and stripped out 95% of it.

Sass
--------------------

I've started utilising [Sass](http://sass-lang.com/) - being someone who hated the idea of pre-processors (and complained about their failings and how writing OOCSS could resolve a lot of those issues) I appreciate there are some things they do very well that can't be replicated. Plus, knowing all their failings you are better equipped to avoid them when using a pre-processor (if you don't understand the issues with using a pre-processor then I advise you to read my post about [using Sass](https://github.com/Integralist/Blog-Posts/blob/master/Guide-to-using-SASS.md) OR to not use a pre-processor).

Browser inconsistencies
--------------------

We all know that browsers render both CSS and JavaScript differently depending on their engine. In CSS the way I manage this is by writing my CSS as follows:

* Write CSS so it works with Firefox
* Use `IE Conditional Comments` to target IE issues**
* Use `@media` hack to target WebKit browsers

***I appreciate that IE10 no longer supports conditional comments but fingers crossed IE10's CSS engine just works the way we want it to*

JavaScript
--------------------

I write all my JavaScript to be compatible with the `AMD` module format.

There are a couple of scripts I rarely use nowadays, these being: jQuery (+ two plugins) & SWFObject, but I've included them for those odd occasions where they are needed (normally by the team I manage at work who also use my set-up).

Here is a round-up of some of the scripts and 'modules' used in this project template:

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

* [Jasmine BDD](http://pivotal.github.com/jasmine/) - 
"Jasmine is a behavior-driven development framework for testing your JavaScript code. It does not depend on any other JavaScript frameworks. It does not require a DOM. And it has a clean, obvious syntax so that you can easily write tests."

* [SinonJs](http://sinonjs.org/) - "Standalone test spies, stubs and mocks for JavaScript. No dependencies, works with any unit testing framework"

* [Google Analytics](http://www.google.com/analytics/) - 
"Google Analytics is the enterprise-class web analytics solution that gives you rich insights into your website traffic and marketing effectiveness"

* The following are a list of AMD based modules that I use a lot:
	* Array utility methods (taken from [millermedeiros](https://github.com/millermedeiros/amd-utils))
	* CSS utility methods
	* DOM utility methods
	* Host utility methods
	* String utility methods


RequireJs Plugins
--------------------

There are a couple of RequireJs plugins we use:

* [async](https://github.com/millermedeiros/requirejs-plugins) - 
"Useful for JSONP and asynchronous dependencies (e.g. Google Maps)"

* [tpl](https://github.com/ZeeAgency/requirejs-tpl) - template engine adapted from the `_underscore` utility library

RequireJs Build Script
--------------------

I use a custom build script along with the RequireJs' `r.js` optimiser which minifies and concatenates all my scripts into a single file ready for production use.

Documentation
--------------------

I use [Markdown](http://en.wikipedia.org/wiki/Markdown) language for writing my documentation (and also my blog posts) and use Node to convert them into HTML files. 

Miller Medeiros has created [GH Markdown CLI](https://github.com/millermedeiros/gh-markdown-cli) which combines specific Node packages into a program which automates this process using a simple command via the terminal. I've also taken the design from GitHub's CSS to give my documentation a 'cleaner' look and feel.

Have a read through the [Command.txt](https://github.com/Integralist/Project-Template-Files/blob/master/Assets/Documentation/Command.txt) file to see an example of how you could use it yourself.

JS Hint
--------------------

I run my JavaScript through a lint program called [JS Hint](http://www.jshint.org/), but rather than manually process my scripts by hand (e.g. copy/paste each script into the website interface, see errors, fix them, copy/paste updated code to check errors are definitely fixed, rinse & repeat for each script file…) I use a Node package which helps automate this and makes testing my scripts for syntax errors a lot easier.

CSS Lint
--------------------

I run my CSS through a lint program called [CSS Lint](http://csslint.net/), but rather than manually process my stylesheets by hand (e.g. copy/paste each stylesheet into the website interface, see errors, fix them, copy/paste updated code to check errors are definitely fixed, rinse & repeat for each stylesheet…) I use a Node package which helps automate this and makes testing my stylesheet for syntax errors a lot easier.