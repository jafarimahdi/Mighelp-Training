// Create an array to hold at least five choices (president names and country) and display them

var addParagraph = document.getElementById("container");
var presidents = [
    ["USA", "Tramp"],
    ["Russian", "Putin"],
    ["Hungary", "Janos Ader"],
    ["China", "Xi Jinping"],
    ["Iran", "Hassan Rohani"],
];

for (var i = 0; i < presidents.length; i++) {
    // loop and display in page
    addParagraph.innerHTML += "<p>" + presidents[i] + "</p>";
    console.log(presidents[i]);
}

// ***************

var presidents_2 = {
    Usa: "Tramp",
    Russia: "Putin",
    Hungry: "Janos Ader",
    China: "Xi Jinping",
    Iran: "Hassan Rohani",
};
console.table(presidents_2);
