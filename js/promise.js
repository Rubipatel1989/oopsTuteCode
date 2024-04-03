// In JavaScript, a promise is an object that represents the eventual completion (or failure) of an asynchronous 
// operation and its resulting value. Promises provide a way to write cleaner asynchronous code that avoids 
// "callback hell" (nested callbacks).

let promise = new Promise((resolve, reject) => {
    // Simulating an asynchronous operation
    setTimeout(() => {
        let success = true;
        if (success) {
            resolve("Operation completed successfully");
        } else {
            reject("Operation failed");
        }
    }, 2000);
});

promise.then((message) => {
    console.log("Success:", message);
}).catch((error) => {
    console.error("Error:", error);
}).finally(() => {
    console.log("Finally block");
});
