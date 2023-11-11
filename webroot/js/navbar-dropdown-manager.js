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
    ["points/votann-points.php", "Leagues of Votann"],
];

// This contains all the html ids for the dropdowns in the navbar
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
var factionsResizeTimeout;
var pointsResizeTimeout;
function windowResizeMonitor(id, numDirsUp) {
    switch(id) {
        case ID.FACTIONS:
            clearTimeout(factionsResizeTimeout);
            factionsResizeTimeout = setTimeout(function() {
                calculateDropdownLayout(id, numDirsUp);
            }, 200);
            break;
        case ID.POINTS:
            clearTimeout(pointsResizeTimeout);
            pointsResizeTimeout = setTimeout(function() {
                calculateDropdownLayout(id, numDirsUp);
            }, 200);
            break;
        default:
            throw new Error("No valid dropdown id found.");
    }
    
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
            throw new Error("No valid dropdown page found.");
    }
    if (window.innerHeight < 360) {
        createDropdown(5, id, numDirsUp, page);
    } else if (window.innerHeight < 480) {
        createDropdown(5, id, numDirsUp, page);
    } else if (window.innerHeight < 768) {
        createDropdown(4, id, numDirsUp, page);
    } else if (window.innerHeight < 864) {
        createDropdown(4, id, numDirsUp, page);
    } else if (window.innerHeight < 1080) {
        createDropdown(3, id, numDirsUp, page);
    } else if (window.innerHeight < 1440) {
        createDropdown(2, id, numDirsUp, page);
    } else if (window.innerHeight < 2160) { // 4k
        createDropdown(1, id, numDirsUp, page);
    } else { // if greater than 4k
        createDropdown(1, id, numDirsUp, page);
    }
}

// Organizes the links in the order they appear in their respective arrays from top to bottom, left to right. 
function createDropdown(numCols, id, numDirsUp, page) {
    if (numCols == 0) {
        throw new Error("Cannot have zero columns");
    }

    // idk the exact value, but at some point, too many columns is disadvantageous, and this code starts giving incorrect results
    // for too high number of columns. idk if this arbitrary value will even hold up in the future
    if (numCols >= Math.floor(page.length / 2) - 1) {
        throw new Error("Cannot have number of columns greater than half the size of page minus one");
    }

    // Remove all elements from the faction dropdown. i.e. Clear it so we can add new dropdown content back to it
    const dropdown = document.getElementById(id);
    dropdown.innerHTML = '';

    // Number of links per row 
    let numPerRow = Math.ceil(page.length / numCols);

    let counter = 0;
    const table = document.createElement("table");
    for (var i = 0; i < numPerRow; ++i) { 
        const row = document.createElement("tr");
        table.appendChild(row);

        for (var j = 0; j < numCols; ++j) {
            // Tests if `page[j * numPerRow + counter]` exists. If it doesn't exist, then we skip it. 
            // This should only happen if the final column isn't completely fill out.
            if (typeof page[j * numPerRow + counter] === 'undefined') {
                continue;
            }

            const col = document.createElement("td");
            row.appendChild(col);

            const a = document.createElement("a");
            // For `page[j * numPerRow + counter]`, we skip a certain amount of links
            // because when building a table, we fill out the rows first.
            a.href = getDirsUp(numDirsUp) + page[j * numPerRow + counter];
            col.appendChild(a);

            // For `page[j * numPerRow + counter]`, we skip a certain amount of links
            // because when building a table, we fill out the rows first.
            const text = document.createTextNode(page[j * numPerRow + counter][1]);
            a.appendChild(text)
        }
        // `j * numPerRow` always results in the same values (for as many that appear). 
        // The counter will add one to each new pass of the inner-loop, resulting in new
        // array values
        ++counter;
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
