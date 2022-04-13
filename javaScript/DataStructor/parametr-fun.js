//   1. Write a JavaScript function that accepts a string as a parameter and find the longest word within the string.
//  Example string : 'Web Development Tutorial'
//  Expected Output : 'Development'

var example = "Web Development Tutorial fromMighelpBudapest";
var example2 = 234566;

function findLongestWord(input) {
    if (typeof input === "string") {
        // check the input is a string

        var words = input.split(" "); // make them separate and convert to a array

        // check which element is the longest in array

        var longest = words.reduce(function (a, b) {
            return a.length > b.length ? a : b;
        });
        console.log("The longest word is: " + longest);
    } else {
        console.log("The type of your input must be String");
    }
}
findLongestWord(example);
