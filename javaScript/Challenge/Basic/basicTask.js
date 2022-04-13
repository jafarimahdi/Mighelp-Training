/*
var input = prompt('please enter your name');
        console.log('thanks for checking '+ input);
        alert('Thanks for checking us '+ input);
*/

// ------------------- Chalenge 1

var massMark = 78;
var heightMark = 1.69; // kg & meters
var massJohn = 92;
var heightJohn = 1.95; // kg & meters

var BMIMark = massMark / (heightMark * heightMark);
var BMIJohn = massJohn / (heightJohn * heightJohn);

console.log(BMIMark, BMIJohn);

if (BMIMark > BMIJohn) {
    console.log("Mark's BMI is Higher");
} else {
    console.log("Jhon's BMI is Higher");
}

//  -------------------- Chalenge 2

var scoreJohn = (189 + 120 + 103) / 3;
var scoreMike = (129 + 94 + 123) / 3;
var scoreMary = (97 + 134 + 105) / 3;
console.log(scoreJohn, scoreMike, scoreMary);
if (scoreJohn > scoreMike && scoreJohn > scoreMary) {
    console.log("John's team wins with " + scoreJohn + " points");
} else if (scoreMike > scoreJohn && scoreMike > scoreMary) {
    console.log("Mike's team wins with " + scoreMike + " points");
} else if (scoreMary > scoreJohn && scoreMary > scoreMike) {
    console.log("Mary's team wins with " + scoreMary + " points");
} else {
    console.log("There is a draw");
}

// __________________ Chalenge 3

// use the simple way

function tipCalculater(bill) {
    var percentage;
    if (bill < 50) {
        percentage = 0.2;
    } else if (bill >= 50 && bill < 200) {
        percentage = 0.15;
    } else {
        percentage = 0.1;
    }
    return bill * percentage;
}

var bills = [124, 48, 268];
var tips = [
    tipCalculater(bills[0]),
    tipCalculater(bills[1]),
    tipCalculater(bills[2]),
];

var finalValues = [tips[0] + bills[0], tips[1] + bills[1], tips[2] + bills[2]];

console.log(tips, finalValues);

// ------------------------- Chalenge 4

var john = {
    fullName: "John Smith",
    mass: 110,
    height: 1.95,
    calcBMI: function () {
        this.bmi = this.mass / (this.height * this.height);
        return this.bmi;
    },
};
var mark = {
    fullName: "Mark Miller",
    mass: 78,
    height: 1.69,
    calcBMI: function () {
        this.bmi = this.mass / (this.height * this.height);
        return this.bmi;
    },
};
if (john.calcBMI() > mark.calcBMI()) {
    console.log(john.fullName + " has a higher BMI of " + john.bmi);
} else if (mark.bmi > john.bmi) {
    console.log(mark.fullName + " has a higher BMI of " + mark.bmi);
} else {
    console.log("They have the same BMI");
}

//  ------------------------------ chalenge 5

var john2 = {
    fullName: "John Smith",
    bills: [124, 48, 268, 180, 42],
    calcTips: function () {
        this.tips = [];
        this.finalValues = [];

        for (var i = 0; i < this.bills.length; i++) {
            // Determine percentage based on tipping rules
            var percentage;
            var bill = this.bills[i];

            if (bill < 50) {
                percentage = 0.2;
            } else if (bill >= 50 && bill < 200) {
                percentage = 0.15;
            } else {
                percentage = 0.1;
            }

            // Add results to the corresponing arrays
            this.tips[i] = bill * percentage;
            this.finalValues[i] = bill + bill * percentage;
        }
    },
};

var mark2 = {
    fullName: "Mark Miller",
    bills: [77, 475, 110, 45],
    calcTips: function () {
        this.tips = [];
        this.finalValues = [];

        for (var i = 0; i < this.bills.length; i++) {
            // Determine percentage based on tipping rules
            var percentage;
            var bill = this.bills[i];

            if (bill < 100) {
                percentage = 0.2;
            } else if (bill >= 100 && bill < 300) {
                percentage = 0.1;
            } else {
                percentage = 0.25;
            }

            // Add results to the corresponing arrays
            this.tips[i] = bill * percentage;
            this.finalValues[i] = bill + bill * percentage;
        }
    },
};

function calcAverage(tips) {
    var sum = 0;
    for (var i = 0; i < tips.length; i++) {
        sum = sum + tips[i];
    }
    return sum / tips.length;
}
// Do the calculations
john2.calcTips();
mark2.calcTips();
john2.average = calcAverage(john2.tips);
mark2.average = calcAverage(mark2.tips);
console.log(john2, mark2);
if (john2.average > mark2.average) {
    console.log(
        john2.fullName +
            "'s family pays higher tips, with an average of $" +
            john2.average
    );
} else if (mark2.average > john2.average) {
    console.log(
        mark2.fullName +
            "'s family pays higher tips, with an average of $" +
            mark2.average
    );
} else {
    console.log("There is a draw");
}
