<?php

// Global Functions: These functions are defined outside of any class. They can be called from anywhere in your 
// PHP code, as long as the file where they are defined is included or required. 
// Global functions are not associated with any specific class, so they are useful for general-purpose functions that 
// don't belong to a particular class.
function myGlobalFunction() {
    return "Hello, world!";
}

echo myGlobalFunction();

// Static Functions: These functions are defined inside a class and are declared with the static keyword. 
// Static functions are associated with the class itself, rather than with any specific instance of the class. 
// They can be called using the class name, without needing to create an object instance of the class.

class MyClass {
    public static function myStaticFunction() {
        return "Hello, world!";
    }
}
// Call the static function
echo MyClass::myStaticFunction();