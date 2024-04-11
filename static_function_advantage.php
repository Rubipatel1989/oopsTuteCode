1. No Need for Object Instantiation: You can call a static method without creating an 
    instance of the class. This can be useful for utility functions or methods that don't 
    require access to instance-specific data.

2. Global Access: Static methods can be accessed globally from anywhere in your code,
     without needing an instance of the class. This makes them convenient for common 
     functionality that is not tied to a specific object state.

3. Class Scope: Static methods belong to the class rather than to a specific 
    instance of the class. This means they can access other static properties and 
    methods of the class but cannot access non-static (instance) properties or methods without instantiation.

4. Performance: Since static methods do not require object instantiation, 
    they can be faster to execute than regular methods, especially in cases 
    where you need to call the method multiple times or in a loop.

5. Utility Functions: Static methods are often used for utility functions that 
    are related to the class but do not depend on instance-specific data. This allows 
    you to group related functions together within the class.

6. Singleton Pattern: Static methods are commonly used to implement the singleton pattern, 
    where a class has only one instance and provides a way to access that instance globally.
