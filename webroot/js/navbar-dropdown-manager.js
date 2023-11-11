const FACTIONS_PAGES = [
    ["factions/adepta-sororitas.php", "Adepta Sororitas"],
    ["factions/adeptus-custodes.php", "Adeptus Custodes"],
    ["factions/adeptus-mechanicus.php", "Adeptus Mechanicus"],
    ["factions/adeptus-titanicus.php", "Adeptus Titanicus"],
    ["factions/aeldari.php", "Aeldari"],
    ["factions/agents-of-imperium.php", "Agents of the Imperium"],
    ["factions/astra-militarum.php", "Astra Militarum"],
    ["factions/black-templars.php", "Black Templars"],
    ["factions/blood-angels.php", "Blood Angels"],
    ["factions/chaos-daemons.php", "Chaos Daemons"],
    ["factions/chaos-knights.php", "Chaos Knights"],
    ["factions/chaos-marines.php", "Chaos Space Marines"],
    ["factions/dark-angels.php", "Dark Angels"],
    ["factions/necrons.php", "Necrons"],
    ["factions/space-marine.php", "Space Marines"],
];

const POINTS_PAGES = [
    ["points/votann-points.php", "Leagues of Votann"],
    ["points/sororitas-points.php", "Adepta Sororitas"],
    ["points/custodes-points.php", "Adeptus Custodes"],
    ["points/mechanicus-points.php", "Adeptus Mechanicus"],
    ["points/titanicus-points.php", "Adeptus Titanicus"],
    ["points/aeldari-points.php", "Aeldari"],
    ["points/agents-points.php", "Agents of the Imperium"],
    ["points/militarum-points.php", "Astra Militarum"],
    ["points/templars-points.php", "Black Templars"],
    ["points/blood-angels-points.php", "Blood Angels"],
    ["points/daemons-points.php", "Chaos Daemons"],
    ["points/chaos-knights-points.php", "Chaos Knights"],
    ["points/chaos-marines-points.php", "Chaos Space Marines"],
    ["points/dark-angels-points.php", "Dark Angels"],
];

const ID = {
    FACTIONS: "factions-dropdown",
    POINTS: "points-dropdown",
}


/* Adding an event listener for window resizing can be tricky. Because by itself, when resizing a window, the resize event fires every
pixel change in width or height. Meaning the event can fire hundreds of times by the time the user is done resizing. However, in this 
scenario, we only want to fire a resize event when the user is finished resizing their window. The easiest way to do this is to set
a timeout before the resize event is able to fire. If another resize event is fired before the previous timeout finished, we reset
the timeout. What this means is that, in our case, 200 milliseconds needs to pass with no resize event having been fired, for us to 
determine that the user is done resizing. Then we execute our code. This can drastically reduce the amount of calculations being 
done when resizing the window, especially when we only care when the user is done resizing their window.
https://stackoverflow.com/questions/5489946/how-to-wait-for-the-end-of-resize-event-and-only-then-perform-an-action */
var resizeTimeout;
function resizeDropdownMonitor(id, numDirsUp) {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(function() {
        calculateDropdownLayout(id, numDirsUp);
    }, 200)
}

function calculateDropdownLayout(id, numDirsUp) {
    var page;
    switch(id) {
        case ID.FACTIONS:
            page = FACTIONS_PAGES;
            break;
        case ID.POINTS:
            page = POINTS_PAGES;
            break;
        default:
            throw new Error("No valid page found");
    }
    if (window.innerHeight < 360) {
        calcResizeDropdown(5, id, numDirsUp, page);
    } else if (window.innerHeight < 480) {
        calcResizeDropdown(5, id, numDirsUp, page);
    } else if (window.innerHeight < 768) {
        calcResizeDropdown(4, id, numDirsUp, page);
    } else if (window.innerHeight < 864) {
        calcResizeDropdown(4, id, numDirsUp, page);
    } else if (window.innerHeight < 1080) {
        calcResizeDropdown(3, id, numDirsUp, page);
    } else if (window.innerHeight < 1440) {
        calcResizeDropdown(2, id, numDirsUp, page);
    } else if (window.innerHeight < 2160) { // 4k
        calcResizeDropdown(1, id, numDirsUp, page);
    } else { // if greater than 4k
        calcResizeDropdown(1, id, numDirsUp, page);
    }
}

// TODO. This currently has no ordering link in mind
function calcResizeDropdown(num_cols, id, numDirsUp, page) {

    if (page == null || id == null) {
        throw new Error("page wasn't set");
    }

    if (num_cols == 0) {
        throw new Error("Cannot have zero columns");
    }

    if (num_cols > Math.floor(page.length / 2)) {
        throw new Error("Cannot have number of columns greater than half the size of page");
    }

    // Remove all elements from the faction dropdown. i.e. Clear it so we can add new dropdown content back to it
    const dropdown = document.getElementById(id);
    dropdown.innerHTML = '';

    // Num per row for num_cols-1 cols
    let num_per_row = Math.ceil(page.length / num_cols);

    let final_col = 0;
    if (page.length % num_cols != 0) {
        // idk if this is accurate for all scenarios
        final_col = num_per_row - 1;
    }

    let extraCounter = 1;
    let counter = 0;
    const table = document.createElement("table");
    for (var i = 0; i < num_per_row; ++i) { 
        const row = document.createElement("tr");
        table.appendChild(row);

        if (page.length % num_cols == 0) {
            for (var j = 0; j < num_cols; ++j) {
                const col = document.createElement("td");
                row.appendChild(col);
    
                const a = document.createElement("a");
                a.href = getDirsUp(numDirsUp) + page[j * num_per_row + counter];
                col.appendChild(a);
    
                const text = document.createTextNode(page[j * num_per_row + counter][1]);
                a.appendChild(text)
            }
        } else {
            for (var j = 0; j < num_cols-1; ++j) {
                const col = document.createElement("td");
                row.appendChild(col);
    
                const a = document.createElement("a");
                a.href = getDirsUp(numDirsUp) + page[j * num_per_row + counter];
                col.appendChild(a);
    
                const text = document.createTextNode(page[j * num_per_row + counter][1]);
                a.appendChild(text);
            }
        }

        
        ++counter;

        if (final_col == 0) {
            continue;
        }

        if (extraCounter <= final_col) {
            // console.log(page.length - num_per_row + extraCounter);
            const col = document.createElement("td");
            row.appendChild(col);

            const a = document.createElement("a");
            // a.href = getDirsUp(numDirsUp) + page[page.length - extraCounter][0];
            a.href = getDirsUp(numDirsUp) + page[page.length - num_per_row + extraCounter][0];
            col.appendChild(a);

            // const text = document.createTextNode(page[page.length - extraCounter][1]);
            const text = document.createTextNode(page[page.length - num_per_row + extraCounter][1]);
            a.appendChild(text);

            ++extraCounter;
        }
        
    }
    
    dropdown.appendChild(table);
}

function getDirsUp(numDirsUp) {
    var dirs_up = "";
    for (var i = 0; i < numDirsUp; ++i) {
        dirs_up += "../";
    }
    return dirs_up;
}
