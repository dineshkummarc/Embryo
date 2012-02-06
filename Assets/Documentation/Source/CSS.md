CSS
===

Here are the list of CSS methods available:

* getArrayOfClassNames
* addClass
* hasClass
* removeClass

Bootstrap code
===

```js
define(['Utils/css'], function(css){

    // code here

});
```

getArrayOfClassNames
---

```js
var h2 = document.getElementsByTagName('h2')[0];
classes(h2);
```

addClass
---

```js
var h2 = document.getElementsByTagName('h2')[0];
add(h2, 'newclass');
```

hasClass
---

```js
var h2 = document.getElementsByTagName('h2')[0];
has(h2, 'myclassa');
```

removeClass
---

```js
var h2 = document.getElementsByTagName('h2')[0];
remove(h2, 'myclassb');
```