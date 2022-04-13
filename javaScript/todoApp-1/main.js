const container = document.querySelector(".container");
var inputValue = document.querySelector(".input");
const add = document.querySelector(".add");

if (window.localStorage.getItem("todos") == undefined) {
    var todos = [];
    window.localStorage.setItem("todos", JSON.stringify(todos));
}

var todosEX = window.localStorage.getItem("todos");
var todos = JSON.parse(todosEX);

class item {
    constructor(name) {
        //create the item div
        this.createItem(name);
    }
    createItem(name) {
        // 1- create a div for list
        var itemBox = document.createElement("div");
        itemBox.classList.add("item");

        // 2- creat the input text for inside the div
        var input = document.createElement("input");
        input.type = "text";
        input.disabled = true;
        input.value = name;
        input.classList.add("item_input");

        // 3- create the edit button for the each item in the list
        var done = document.createElement("button");
        done.classList.add("edit");
        done.innerHTML = "<i class='fas fa-check-circle'></i>";
        done.addEventListener("click", () => this.edit(input, name));

        // 4- create the Remove Button for the each item in the list
        var remove = document.createElement("button");
        remove.classList.add("remove");
        remove.innerHTML = "<i class='fas fa-trash-alt'></i>";
        remove.addEventListener("click", () => this.remove(itemBox, name));

        // 5- send the items in list inside the container class
        container.appendChild(itemBox);

        itemBox.appendChild(input);
        itemBox.appendChild(done);
        itemBox.appendChild(remove);
    }

    // 6- set the edit button for change the value of items

    edit(input) {
        input.classList.add("editText");
    }

    remove(itemBox, name) {
        itemBox.parentNode.removeChild(itemBox);
        let index = todos.indexOf(name);
        todos.splice(index, 1);
        window.localStorage.setItem("todos", JSON.stringify(todos));
    }
}

add.addEventListener("click", check);
window.addEventListener("keydown", (e) => {
    if (e.which == 13) {
        check();
    }
});

function check() {
    if (inputValue.value != "") {
        new item(inputValue.value);
        todos.push(inputValue.value);
        window.localStorage.setItem("todos", JSON.stringify(todos));
        inputValue.value = "";
    }
}

for (let v = 0; v < todos.length; v++) {
    new item(todos[v]);
}

new item("New Project");
