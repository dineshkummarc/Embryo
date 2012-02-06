Array
===

Here are the list of Array methods available:

* filter
* forEach
* indexOf
* lastIndexOf
* map
* reduce
* reduceRight
* unique

Bootstrap code
===

```js 
define(['Utils/array'], function(array){

    // code here

});
```

filter
---

```js 
var data = ['a', 'a', 1, 'b', 'b', 2, 'c', 'c', 3, 'd'],
    newArray;

// creates a new array with all numeric items that passed the test implemented by provided function
newArray = array.filter(data, function(item){
    return (typeof item == 'number') ? true : false;
});
```

forEach
---

```js
var data = ['a', 'a', 1, 'b', 'b', 2, 'c', 'c', 3, 'd'];

// executes provided function once per array element
array.forEach(data, function(item, index){
    if (typeof item == 'number') {
		data[index] = ++item;
	}
});
```

indexOf
---

```js
var data = ['a', 'a', 1, 'b', 'b', 2, 'c', 'c', 3, 'd'],
    // returns the first index at which the given item can be found in the array (or -1 if not found)
    search1 = array.indexOf(data, 'c'),
    search2 = array.indexOf(data, 'xyz');
```

lastIndexOf
---

```js
var data = ['a', 'a', 1, 'b', 'b', 2, 'c', 'c', 3, 'd'],
    // returns the last index at which the given item can be found in the array (or -1 if not found)
    search1 = array.lastIndexOf(data, 'c'),
    search2 = array.lastIndexOf(data, 'xyz');
```

map
---

```js
var data = ['a', 'a', 1, 'b', 'b', 2, 'c', 'c', 3, 'd'],
    newArray;

// creates a new array with the results of calling the provided function on every item in this array
newArray = array.map(data, function(item, index){
	if (typeof item == 'string') {
		return item + '!!!';
	} else if (typeof item == 'number') {
		return ++item;
	}  				
});
```

reduce
---

```js
var data = ['a', 'a', 1, 'b', 'b', 2, 'c', 'c', 3, 'd'],
    result;

// creates a single value from applying a function against an accumulator
// and each value of the array (from left-to-right) as to reduce it to a single value
result = array.reduce(data, function(previousValue, currentValue, index){
	return previousValue + currentValue;
});
```

reduceRight
---

```js
var data = ['a', 'a', 1, 'b', 'b', 2, 'c', 'c', 3, 'd'],
    result;

// creates a single value from applying a function simultaneously against 
// two values of the array (from right-to-left) as to reduce it to a single value
result = array.reduceRight(data, function(previousValue, currentValue, index){
	return previousValue + currentValue;
});
```

unique
---

```us
var data = ['a', 'a', 1, 'b', 'b', 2, 'c', 'c', 3, 'd'],
    // returns a normalised array with only unique items
    result = array.unique(data);
```