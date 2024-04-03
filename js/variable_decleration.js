// It's generally recommended to use const by default, and only use let when you know the value of the variable will 
// change. Avoid using var as it has some quirks related to hoisting and scope that can lead to unexpected behavior.

// Use const by default whenever the variable's value won't change.
// Use let when you need to reassign the variable within its scope.
// Avoid using var in modern JavaScript due to its potential pitfalls.

var dealer_id = 123;
let dealer_id = 123;
const dealer_id = 123;

