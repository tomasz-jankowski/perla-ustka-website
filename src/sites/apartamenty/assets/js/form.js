var choice = document.getElementById("apartment");
var options = document.getElementById("number").getElementsByTagName("option");
var x = 0;

function setLimit(i) {
    for (var p = 0; p < i; p++)
        options[p].disabled = false;
    for (var p = i; p < options.length; p++)
        options[p].disabled = true;
}

function changeNumber() {

    if (choice.value === "2 osobowy")
        x = 2;
    if (choice.value === "4-5 osobowy")
        x = 4;
    if (choice.value === "4-5 osobowy (niski parter)")
        x = 5;
    
    setLimit(x);
    options[x-1].selected = true;
}

choice.onchange = changeNumber;
options.onchange = changeNumber;
// window.onload = changeNumber;