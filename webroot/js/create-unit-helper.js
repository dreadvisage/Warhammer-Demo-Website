

var targetAdd = "";
function setTarget(id) {
    targetAdd = id;
}


class UnitBuilder {
    constructor(name) {
        this.name = name;
        this.li = document.createElement("li");
        this.ul = document.createElement("ul");
        this.ul.className = "unit-type-list";
    }

    static new(name) {
        return new UnitBuilder(name);
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
        let liText = document.createTextNode(models + " models" + createPadding(padding) + points + " pts");
        liContent.appendChild(liText);

        let liButton = document.createElement("button");
        liButton.type = "submit";
        liButton.innerText = "➕";
        liButton.addEventListener("click", () => {
            makeRequest(this.name, this.models, this.points);
        });
        liContent.appendChild(liButton);



        return this;
    }

    modelCustom(models, padding, points) {
        return this;
    }

    add() {
        var target = document.getElementById(targetAdd);
        target.appendChild(this.li);
        target.appendChild(this.ul);
    }
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
    httpRequest.onreadystatechange = reloadPage;
    // Always send by POST. 
    httpRequest.open("POST", "db/insert-into-unit-table.php");
    // Needed to send url parameters
    httpRequest.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded",
    );
    // Backticks mean it will attempt to execute the contents as a shell command.
    // Use of the backtick operator is identical to shell_exec()
    httpRequest.send(`name=${encodeURIComponent(name)}models=${encodeURIComponent(models)}points=${encodeURIComponent(points)}`);
}

function reloadPage() {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
        if (httpRequest.status === 200) {
            // If everything is good, we reload the page
            // to update the pfp
            location.reload();
        } else {
            alert("There was a problem with the request.");
        }
    }
}
