
class UnitBuilder {
    static id = "";
    static counter = 0;

    constructor(name) {
        this.name = name;
        this.li = document.createElement("li");
        this.li.append(document.createTextNode(this.name));
        this.ul = document.createElement("ul");
        this.ul.className = "unit-type-list";
    }

    static setParentId(id) {
        UnitBuilder.id = id;
    }

    static new(name) {
        return new UnitBuilder(name);
    }

    static addUnit(name, models, padding, points) {
        let li = document.createElement("li");
        li.append(document.createTextNode(name));
        let ul = document.createElement("ul");
        ul.className = "unit-type-list";

        let liContent = document.createElement("li");
        ul.append(liContent);

        const createPadding = function(padding) {
            let paddingStr = "";
            for (var i = 0; i < padding; ++i) {
                paddingStr += '.';
            }
            return paddingStr;
        };
        let liText = document.createTextNode(models + " models" + createPadding(padding) + points + " pts ");
        liContent.append(liText);

        let liButton = document.createElement("button");
        liButton.type = "submit";
        liButton.innerText = "➕";
        let num = UnitBuilder.counter;
        liButton.addEventListener("click", () => {
            makeRequest(name, models, points);
            notifyTextMonitor("notifytext" + num);
        });
        liContent.append(liButton);

        let liNotifyText = document.createElement("p");
        liNotifyText.className = "notify-text";
        liNotifyText.id = "notifytext" + UnitBuilder.counter;
        ++UnitBuilder.counter;
        liContent.append(liNotifyText);

        var target = document.getElementById(UnitBuilder.id);
        target.append(li);
        target.append(ul);
    }

    model(models, padding, points) {
        let liContent = document.createElement("li");
        this.ul.append(liContent);

        const createPadding = function(padding) {
            let paddingStr = "";
            for (var i = 0; i < padding; ++i) {
                paddingStr += '.';
            }
            return paddingStr;
        };
        let liText = document.createTextNode(models + " models" + createPadding(padding) + points + " pts ");
        liContent.append(liText);

        let liButton = document.createElement("button");
        liButton.type = "submit";
        liButton.innerText = "➕";
        let num = UnitBuilder.counter;
        liButton.addEventListener("click", () => {
            makeRequest(this.name, models, points);
            notifyTextMonitor("notifytext" + num);
        });
        liContent.append(liButton);

        let liNotifyText = document.createElement("p");
        liNotifyText.className = "notify-text";
        liNotifyText.id = "notifytext" + UnitBuilder.counter;
        ++UnitBuilder.counter;
        liContent.append(liNotifyText);

        return this;
    }

    modelCustom(models, padding, points) {
        let liContent = document.createElement("li");
        this.ul.append(liContent);

        const createPadding = function(padding) {
            let paddingStr = "";
            for (var i = 0; i < padding; ++i) {
                paddingStr += '.';
            }
            return paddingStr;
        };
        let liText = document.createTextNode(models + createPadding(padding) + points + " pts ");
        liContent.append(liText);

        let liButton = document.createElement("button");
        liButton.type = "submit";
        liButton.innerText = "➕";
        liButton.addEventListener("click", () => {
            makeRequest(this.name, models, points);
        });
        liContent.append(liButton);


        return this;
    }

    add() {
        var target = document.getElementById(UnitBuilder.id);
        target.append(this.li);
        target.append(this.ul);
    }
}

var notifyTextTimeout;
var prevNotifyText;
var currentNotifyText;
var notifyCounter = 1;
function notifyTextMonitor(id) {
    if (currentNotifyText == null) {
        currentNotifyText = document.getElementById(id);
    } else {
        prevNotifyText = currentNotifyText;
        prevNotifyText.innerHTML = '';
        currentNotifyText = document.getElementById(id);
        ++notifyCounter;
        if (prevNotifyText != currentNotifyText)
            notifyCounter = 1;
    }
    currentNotifyText.innerText = "Added Unit x" + notifyCounter;

    clearTimeout(notifyTextTimeout);
    notifyTextTimeout = setTimeout(function() {
        updateNotifyText(id)
    }, 2000);
}

function updateNotifyText(id) {
    if (prevNotifyText != null)
        prevNotifyText.innerHTML = '';
    prevNotifyText = null;
    if (currentNotifyText != null)
        currentNotifyText.innerHTML = '';
    currentNotifyText = null;
    notifyCounter = 1;
}

function insertRawHtml(id, html) {
    /* We need to create a template here because certain HTML tags get stripped
    when appending to innerHTML with certain elements. By creating a template,
    we can force the tags to be a part of something, even if they may or may
    not belong there. Basically, in my testing, this without templates, it 
    failed to add any event listeners before this was added. Then everything worked
    fine after. Weird. See the following link:
    https://codingshower.com/add-html-string-to-dom-nodes/
    */
    const template = document.createElement("template");
    template.innerHTML += html;
    document.getElementById(id).append(template.content);
}


/*************************************
 *         ALL BELOW IS AJAX         *
 *************************************/

let httpRequest;
function makeRequest(name, models, points) {
    httpRequest = new XMLHttpRequest();

    if (!httpRequest) {
        alert("Cannot create an XMLHTTP instance");
        return false;
    }

    // What to do when the ready state changes.
    // We use it specifically when the XMLHttpRequest is DONE
    httpRequest.onreadystatechange = promptAlert;
    // Always send by POST. 
    httpRequest.open("POST", "db/insert-into-unit-table.php");
    // Needed to send url parameters
    httpRequest.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded",
    );
    // Backticks mean it will attempt to execute the contents as a shell command.
    // Use of the backtick operator is identical to shell_exec().
    // You can separate multiple data values by inserting an ampersand (&) in between each value
    httpRequest.send(`name=${encodeURIComponent(name)}&models=${encodeURIComponent(models)}&points=${encodeURIComponent(points)}`);
}

function promptAlert() {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
        if (httpRequest.status === 200) {
            // alert("Successfully added to unit table");
        } else {
            alert("There was a problem with the request.");
        }
    }
}
