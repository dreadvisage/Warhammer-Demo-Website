var container = document.getElementById("pfp-frame-id");

// Get the modal
var modal = document.getElementById("myModal");

var modal_content = document.getElementById("modal-content-id");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

container.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal || event.target == modal_content) {
        modal.style.display = "none";
    }
}