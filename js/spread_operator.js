// The spread operator, denoted by three dots (...), is a versatile feature introduced in ECMAScript 2015 (ES6) that 
// allows you to expand an iterable (like an array, object, or string) into its individual elements in various 
// contexts within JavaScript. Here's a breakdown of its key applications:

const numbers = [1, 2, 3];
const copy = [...numbers]; // copy = [1, 2, 3] (separate array)

const colors = ['red', 'green'];
const fruits = ['apple', 'banana'];
const combined = [...colors, ...fruits]; // combined = ['red', 'green', 'apple', 'banana']