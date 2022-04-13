// 2. Write a JavaScript function which will take an array of numbers stored and find the second lowest and second greatest numbers, respectively.
//    Sample array : [1,2,3,4,5]
//    Expected Output : 2,4 -->

var myList = [
    1, 2, 3, 4, 5, 7, 9, 11, 25, 89, 45, 15, 20, 87, 12, 15, 18, 32, 25, 61, 17,
];

var sortList = myList.sort(function (a, b) {
    return a - b;
}); //sort function

//   index for find the elements
console.log(
    "secund Lowest number:" +
        sortList[1] +
        " & secund greatest number:" +
        sortList[sortList.length - 2]
);
