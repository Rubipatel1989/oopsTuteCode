

// In JavaScript, the async and await keywords are used with promises to write asynchronous code that looks 
// synchronous and is easier to read and maintain. These keywords were introduced in ECMAScript 2017 (ES8).

async function fetchData() {
    let response = await fetch('https://api.example.com/data');
    let data = await response.json();
    return data;
}