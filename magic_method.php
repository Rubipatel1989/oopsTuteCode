

magic methods are special methods that begin with a double underscore __. 
These methods are automatically called by PHP in response to certain actions on an object. 
They provide a way to implement various functionality in an object-oriented manner without 
explicitly calling the methods.

__construct: The constructor method, called when a new object is created.
__destruct: The destructor method, called when an object is destroyed.
__get: Called when an inaccessible property is accessed.
__set: Called when an inaccessible property is set.
__call: Called when an inaccessible method is called.
__toString: Called when an object is treated as a string, for example, when using echo on an object.