// Get the modal
var modall = document.getElementById('modall');
var modals = document.getElementById('modals');
var modalfp = document.getElementById('modalfp');

// Get the button that opens the modal
var btnl = document.getElementById("blogin");
var btns = document.getElementById("bsignup");
var btnfp = document.getElementById("bforgotp");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btnl.onclick = function() {
    modall.style.display = "block";
}
btns.onclick = function () {
    modals.style.display = "block";
}
btnfp.onclick = function () {
    modalfp.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modall.style.display = "none";
    /*modals.style.display = "none";
    modalfp.style.display = "none";*/
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modall) {
        modall.style.display = "none";
    }
    if (event.target == modals) {
        modals.style.display = "none";
    }
    if (event.target == modalfp) {
        modalfp.style.display = "none";
    }
}