let menu;
let closed;
let navul;

window.onload = init;

function init() {
    var inputs = document.getElementsByTagName("input");
    for(var i=0; i<inputs.length; i++) {
        inputs[i].addEventListener("focus", removeError);
    }
    var selects = document.getElementsByTagName("select");
    for (let i=0; i<selects.length; i++) {
        selects[i].addEventListener("focus", removeError);
    }
    menu = document.getElementsByClassName('menu')[0];
    navul = document.getElementsByClassName('navul')[0];
    menu.addEventListener('click', menuFunction);
    closed = true;

    addGoBlackFunctionToSelects();

    document.getElementById('button2').addEventListener("click", newUser);
}

function removeError() {
    this.classList.remove("error");
}

function addGoBlackFunctionToSelects() {
    var selects = document.getElementsByTagName("select");
    for (let i=0; i<selects.length; i++) {
        selects[i].addEventListener("change", goBlack);
        if(selects[i].value !== "0") {
            selects[i].classList.add("gone-black");
        }
    }
    var dates = document.getElementsByClassName("date");
    for (let i=0; i<dates.length; i++) {
        dates[i].addEventListener("change", goBlack);
        
    }
}

function goBlack() {
    this.classList.add("gone-black")
}

function newUser() {
    this.style.display = "none";
    document.getElementById('old-users').style.display = "none";
    document.getElementById('new-user').style.display = "block";
    var form = document.getElementsByTagName('form')[0];
    form.action = form.action + "2";
}

function menuFunction() {
    if(closed) {
        menu.classList.add("menu-rotate");
        navul.classList.add("menu-open");
        closed = false;
    } else {
        menu.classList.remove("menu-rotate");
        navul.classList.remove("menu-open");
        closed = true;
    }
    
}
