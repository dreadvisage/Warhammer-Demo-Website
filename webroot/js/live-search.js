
var counter = 0;
function getLiveSearchResults(searchSuggestionsId, numDirsUp, str) {
    if (str.length == 0) {
        counter = 0;
        updateSuggestions(searchSuggestionsId, counter);
        return;
    }

    var httpRequest = new XMLHttpRequest();
    if (!httpRequest) {
        alert("Cannot create an XMLHTTP instance");
        return false;
    }

    httpRequest.onreadystatechange = function() {
        counter = 0;
        if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
            const searchResultsArray = JSON.parse(this.responseText);

            let searchSuggestions = document.getElementById(searchSuggestionsId);
            searchSuggestions.innerHTML = '';
            for (var i = 0; i < searchResultsArray.length; ++i) {
                let a = document.createElement("a");
                a.href = getDirsUp(numDirsUp) + searchResultsArray[i][2];

                let text;
                if (searchResultsArray[i][1] != null) {
                    text = document.createTextNode(searchResultsArray[i][0] + " | " + searchResultsArray[i][1]);
                } else {
                    text = document.createTextNode(searchResultsArray[i][0]);
                }
                a.append(text);

                searchSuggestions.append(a);
                ++counter;
            }
            updateSuggestions(searchSuggestionsId, counter);
        }

    }

    httpRequest.open("POST", getDirsUp(numDirsUp) + "live-search.php");
    httpRequest.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded",
    );
    httpRequest.send(`q=${encodeURIComponent(str)}`);



}

function getDirsUp(numDirsUp) {
    var dirs_up = "";
    for (var i = 0; i < numDirsUp; ++i) {
        dirs_up += "../";
    }
    return dirs_up;
}

function updateSuggestions(searchSuggestionsId, counter) {
    let searchSuggestions = document.getElementById(searchSuggestionsId);
    if (counter == 0) {
        searchSuggestions.style.display = "none";
    } else {
        searchSuggestions.style.display = "flex";
    }
}

function registerSearchBarListeners(searchDropdownId, searchBarId, searchSuggestionsId, numDirsUp) {
    let searchBar = document.getElementById(searchBarId);
    // Input because we want to do action anytime the value changes
    searchBar.addEventListener("input", event => {
        getLiveSearchResults(searchSuggestionsId, numDirsUp, searchBar.value);
    });
    searchBar.addEventListener("focus", event => {
        getLiveSearchResults(searchSuggestionsId, numDirsUp, searchBar.value);
    });
    window.addEventListener("click", event => {
        let dropdown = document.getElementById(searchDropdownId);
        if (event.target !== dropdown && !dropdown.contains(event.target)) {
            let searchSuggestions = document.getElementById(searchSuggestionsId);
            searchSuggestions.style.display = "none";
        }
    });
    
}