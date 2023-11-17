
class UnitBuilder {
    static id = "";

    constructor(name) {
        this.name = name;
        this.li = document.createElement("li");
        this.li.appendChild(document.createTextNode(this.name));
        this.ul = document.createElement("ul");
        this.ul.className = "unit-type-list";
    }

    static setParentId(id) {
        UnitBuilder.id = id;
    }

    static addBreak() {
        var target = document.getElementById(UnitBuilder.id);
        target.appendChild(document.createElement("br"));
    }

    static addH2Header(text) {
        var target = document.getElementById(UnitBuilder.id);
        var h2 = document.createElement("h2");
        var text = document.createTextNode(text);
        h2.appendChild(text);
        target.appendChild(h2);
    }

    static new(name) {
        return new UnitBuilder(name);
    }

    static addUnit(name, models, padding, points) {
        let li = document.createElement("li");
        li.appendChild(document.createTextNode(name));
        let ul = document.createElement("ul");
        ul.className = "unit-type-list";

        let liContent = document.createElement("li");
        ul.appendChild(liContent);

        const createPadding = function(padding) {
            let paddingStr = "";
            for (var i = 0; i < padding; ++i) {
                paddingStr += '.';
            }
            return paddingStr;
        };
        let liText = document.createTextNode(models + " models" + createPadding(padding) + points + " pts ");
        liContent.appendChild(liText);

        let liButton = document.createElement("button");
        liButton.type = "submit";
        liButton.innerText = "➕";
        liButton.addEventListener("click", () => {
            makeRequest(name, models, points);
        });
        liContent.appendChild(liButton);

        var target = document.getElementById(UnitBuilder.id);
        target.appendChild(li);
        target.appendChild(ul);
    }

    model(models, padding, points) {
        let liContent = document.createElement("li");
        this.ul.appendChild(liContent);

        const createPadding = function(padding) {
            let paddingStr = "";
            for (var i = 0; i < padding; ++i) {
                paddingStr += '.';
            }
            return paddingStr;
        };
        let liText = document.createTextNode(models + " models" + createPadding(padding) + points + " pts ");
        liContent.appendChild(liText);

        let liButton = document.createElement("button");
        liButton.type = "submit";
        liButton.innerText = "➕";
        liButton.addEventListener("click", () => {
            makeRequest(this.name, models, points);
        });
        liContent.appendChild(liButton);

        return this;
    }

    modelCustom(models, padding, points) {
        let liContent = document.createElement("li");
        this.ul.appendChild(liContent);

        const createPadding = function(padding) {
            let paddingStr = "";
            for (var i = 0; i < padding; ++i) {
                paddingStr += '.';
            }
            return paddingStr;
        };
        let liText = document.createTextNode(models + createPadding(padding) + points + " pts ");
        liContent.appendChild(liText);

        let liButton = document.createElement("button");
        liButton.type = "submit";
        liButton.innerText = "➕";
        liButton.addEventListener("click", () => {
            makeRequest(this.name, models, points);
        });
        liContent.appendChild(liButton);


        return this;
    }

    add() {
        var target = document.getElementById(UnitBuilder.id);
        target.appendChild(this.li);
        target.appendChild(this.ul);
    }
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
