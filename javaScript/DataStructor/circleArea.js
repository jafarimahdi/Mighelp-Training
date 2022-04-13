// 2. Write a JavaScript program to find the area of a circle whose radius is 13.

function circle(radius) {
    this.radius = radius;
    // area method
    this.area = function () {
        return Math.PI * this.radius * this.radius;
    };
    // perimeter method
    this.perimeter = function () {
        return 2 * Math.PI * this.radius;
    };
}
var c = new circle(13);
console.log("Area =", c.area().toFixed(2));
console.log("perimeter =", c.perimeter().toFixed(2));
