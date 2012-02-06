DOM
===

Here are the list of DOM methods available:

* elementSiblings
* insertAdjacentHTML
* insertAfter
* outerHTML

Some of which I split into a separate module called 'get' as it made more sense from an api design perspective:

* getDocHeight
* getEl
* getOffset
* getTag
* getType

Bootstrap code (for DOM module)
===

```js
define(['Utils/dom'], function(dom){

    // code here

});
```

elementSiblings
---

```js
var header = document.getElementsByTagName('h2'),
    next = dom.elementSiblings.nextElementSibling(header[0]), // &lt;h2 class="myclassa myclassb">
    prev = dom.elementSiblings.prevElementSibling(header[0]); // &lt;h1 id="mytest">

```

insertAdjacentHTML
---

```js 
var header = document.getElementById('mytest');
			
header.insertAdjacentHTML('beforebegin', '&lt;p>my beforebegin&lt;/p>');
header.insertAdjacentHTML('afterbegin', '&lt;p>my afterbegin&lt;/p>');
header.insertAdjacentHTML('beforeend', '&lt;p>my beforeend&lt;/p>');
header.insertAdjacentHTML('afterend', '&lt;p>my afterend&lt;/p>');
```

insertAfter
---

```js
var header = document.getElementById('mytest'),
	newnode = document.createElement('h3'),
	newtext = document.createTextNode('A header3 created for insertAfter test');

newnode.appendChild(newtext);
dom.insertAfter(newnode, header);
```

outerHTML
---

```js
var header = document.getElementById('mytest'); // &lt;h1 id="mytest">Unit &lt;code>Tests&lt;/code>&lt;/h1>
header.outerHTML = "&lt;h2 id='mytest'>Unit &lt;code>Tests&lt;/code>&lt;/h2>";
```

Bootstrap code (for Get module)
===

```js
define(['Utils/get'], function(get){

    // code here

});
```

getDocHeight
---

```js
get.docheight();
```

getEl
---

```js
get.el('mytest');
```

getOffset
---

```js
var h2 = document.getElementsByTagName('h2')[0];

get.offset(h2).left;
get.offset(h2).top;
```

getTag
---

```js
get.tag({ tag:'h2', first:true });
```

getType
---

```js
var arr = ['a', 'b', 'c'];

get.type(h2);
```