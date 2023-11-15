function toggleThreeLineMenu() {
    var dropdown = document.getElementById("three-line-dropdown");
    if (dropdown.style.display == '' || dropdown.style.display == "none") {
        // if display is none
        dropdown.style.display = "flex";
    } else {
        // if display is set
        dropdown.style.display = "none";
    }
}

function closeThreeLineMenu() {
    document.getElementById("three-line-dropdown").style.display = "none";
}

/* This does two things. For every element in the document, add a listener that will close
the three line menu. Except for the three line menu image itself and the associated button, 
when clicking that, the menu will open/close.
*/
function registerThreeLineMenuListeners() {
    document.querySelectorAll("*").forEach(item => {
        if (item.className == "three-line-icon" || item.id == "three-line-menu-btn") {
            item.addEventListener("click", event => {
                /* Because in the else statement, we add the command to close the three
                line menu, we need to stop the events from propagating downward. 
                In short, when a click occurs, that click is applied to all parent elements
                which in turn, run their onclick events. By stopping propagation here, 
                we ensure that if and only if these exceptions are clicked, they won't 
                propagate downward and accidentally close the three line menu. */
                event.stopPropagation();
                toggleThreeLineMenu();
            });
        } else {
            item.addEventListener("click", event => {
                closeThreeLineMenu();
            });
        }
    });
    window.addEventListener("resize", closeThreeLineMenu);
}