window.onload = init;

function init() {
    var inputs = document.getElementsByTagName("input");
    for(var i=0; i<inputs.length; i++) {
        inputs[i].addEventListener("focus", removeError);
    }
}

function removeError() {
    this.classList.remove("error");
}