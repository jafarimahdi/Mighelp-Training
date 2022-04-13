// Write a JavaScript function to validate whether a given value is number or not. -->


function isItNumber(input) {
    if (typeof input === "number") {
        console.log(input + " is a Number");
    } else {
        console.log("parameter is not Number");
    }
}
isItNumber("23");
