// Write a JavaScript program to compute the sum of the two given integers. If the two values are same, then returns triple their sum

function sumParameter(x, y) {
    if (x === y) {
        return 3 * (x + y);
    } else {
        return x + y;
    }
}
console.log(sumParameter(30, 20));
console.log(sumParameter(20, 20));
