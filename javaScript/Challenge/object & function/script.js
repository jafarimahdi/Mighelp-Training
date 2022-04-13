(function () { // function IIFE

    function Qustion(qustion, answers, corect) {
        this.qustion = qustion;
        this.answers = answers;
        this.corect = corect;
    }

    Qustion.prototype.displayQustion = function () {
        console.log(this.qustion);
        for (var i = 0; i < this.answers.length; i++) {
            console.log(i + ': ' + this.answers[i]);
        }
    }

    Qustion.prototype.checkAnswer = function (ans, callBack) {
        var sc;

        if (ans === this.corect) {
            console.log('Correct')

            sc = callBack(true);

        } else {
            console.log('Wrong !')

            sc = callBack(false);
        };
        this.displayScore(sc);
    };


    Qustion.prototype.displayScore = function (score) {
        console.log('your current score is ' + score);
        console.log('----------------------')
    }


    //   ------------------------

    var q1 = new Qustion('is the javaScript is the coolest programing languge', ['Yes', 'No'], 0);
    var q2 = new Qustion('what is the naems of this curses teachers', ['John', 'Micheal', 'Jonas'], 2);
    var q3 = new Qustion('what does best describe coding?', ['Boring', 'Hrad', 'Fun', 'Tediuos'], 2);

    var qustions = [q1, q2, q3];


    function score() {
        var sc = 0;
        return function (corect) {
            if (corect) {
                sc++;
            }
            return sc;
        }
    }
    var keepScore = score();




    function nextQuestion() {

        var n = Math.floor(Math.random() * qustions.length);

        qustions[n].displayQustion();

        var answer = prompt('please Enter the answer');

        if (answer !== 'exit') {
            qustions[n].checkAnswer(parseInt(answer), keepScore);

            nextQuestion();
        }
    }
    nextQuestion();

})();
