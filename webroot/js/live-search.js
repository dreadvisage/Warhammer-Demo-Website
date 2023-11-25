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
            // Parse all the possible search results from the database
            let searchResultsArray = JSON.parse(this.responseText);

            
            searchResultsArray = processResultsByDamerauLevenshtein(searchResultsArray, str);
            // searchResultsArray = processResultsByContains(searchResultsArray, str);

            // Limits the output to 8 of the most relevant results
            searchResultsArray.splice(8);
        
            // Creates the HTML elements and adds them to the search dropdown
            let searchSuggestions = document.getElementById(searchSuggestionsId);
            searchSuggestions.innerHTML = '';
            for (var i = 0; i < searchResultsArray.length; ++i) {
                let a = document.createElement("a");
                a.href = getDirsUp(numDirsUp) + searchResultsArray[i][3];

                let text;
                if (searchResultsArray[i][2] != null) {
                    text = document.createTextNode(searchResultsArray[i][1] + " | " + searchResultsArray[i][2]);
                } else {
                    text = document.createTextNode(searchResultsArray[i][1]);
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
    window.addEventListener("resize", () => {
        document.getElementById(searchSuggestionsId).style.display = "none";
        if (window.innerWidth <= width1) {
            document.getElementById(searchBarId).style.display = "none";
        } else {
            document.getElementById(searchBarId).style.display = "flex";
        }
    });
}

var width1;
var width2;
var width3;
function applyStylesheet() {
    var liList = document.getElementById("link-list").getElementsByTagName("li");
    var largo = liList.length;
    width1 = largo == 5 ? 1060 : 960;
    width2 = largo == 5 ? 810 : 710;
    width3 = largo == 5 ? 809 : 709;
    if (window.innerWidth < width1) {
        document.getElementById("search-bar").style.display = "none";
    }
    var css = `
        @media (max-width: ${width1}px) {
            #search-bar {
                position: absolute;
                top: 4.6em;
                left: calc(50% - (245px/2));
            }
            .search-dropdown-content {
                top: 6.9em;
                left: calc(50% - (245px/2));
            }
            #alt-search-btn {
                cursor: pointer;
            }
        }
        
        @media (max-width: ${width3}px) {
            .alt-dropdown {
                display: flex;
            }
            #warhammer-logo-link{
                display: none;
            }
            #alt-warhammer-logo-link {
                display: flex;
            }
            .inner2 {
                justify-content: space-around;
                /* Equal to the size of the alt warhammer logo for true center */
                margin-left: 60px;
            }
            .inner2 ul {
                display: none;
            }
        }
        
        @media (min-width: ${width2}px) {
            .alt-dropdown {
                display: none;
            }
            #warhammer-logo-link{
                display: block;
            }
            #alt-warhammer-logo-link {
                display: none;
            }
            .inner2 ul {
                display: flex;
            }
        }
        `;
    
    
    document.getElementById("head-style").innerHTML = "";
    document.getElementById("head-style").append(document.createTextNode(css));
}

function registerSearchListeners(searchBtnId) {
    var head = document.head;
    var style = document.createElement('style');
    style.id = "head-style";
    head.append(style);
    applyStylesheet();

    window.addEventListener("resize", () => {
        if (window.innerWidth < width1) {
            document.getElementById(searchBtnId).onclick = toggleSearchBar;
        } else {
            document.getElementById(searchBtnId).onclick = null;
        }
    });
    // window.addEventListener("click", event => {
    //     let searchBar = document.getElementById("search-bar");
    //     if (event.target !== searchBar && !searchBar.contains(event.target)) {
    //         searchBar.style.display = "none";
            
    //     }
    // });
}

function toggleSearchBar() {
    let searchBar = document.getElementById("search-bar");
    if (searchBar.style.display == '' || searchBar.style.display == "none") {
        // if display is none
        searchBar.style.display = "flex";
    } else {
        // if display is set
        searchBar.style.display = "none";
    }
}

function processResultsByContains(searchResultsArray, str) {
    let containsArray = [];
    for (let i = 0; i < searchResultsArray.length; ++i) {
        let combineSearch;
        if (searchResultsArray[i][2] !== null) {
            combineSearch = searchResultsArray[i][0] + searchResultsArray[i][2];
        } else {
            combineSearch = searchResultsArray[i][0];
        }
        if (combineSearch.toLowerCase().includes(str.toLowerCase())) {
            containsArray.push(searchResultsArray[i]);
        }
    }
    
    return structuredClone(containsArray);
}

// TODO. Remove the `set` data structure stuff from live-search.php. Instead, just return all results
// from database. Then impl the set stuff in Javascript. e.g. typing `frequently asked questions` returns 
// nothing because `FAQ` already exists.
function processResultsByDamerauLevenshtein(searchResultsArray, str) {
    /* Calculate the length of the largest string in search results. This will be 
    used as the basis for normalizing the lengths of the inputs. */
    let maxLenStr = 0;
    for (let i = 0; i < searchResultsArray.length; ++i) {
        let len = searchResultsArray[i][0].length;
        if (len > maxLenStr)
            maxLenStr = len;
    }

    /* Normalize each search string as to not give preference to shorter strings. Concerning the 
    Damerau-Levenshtein algorithm, if the input string is super short or super long, it will, 
    by default, be closer to those target strings which are shorter or longer respectively.
    By ensuring each target string is the same size (by padding out with empty spaces), it 
    will no longer give preference to target strings proportional to the length of the input 
    string. */
    for (let i = 0; i < searchResultsArray.length; ++i) {
        let padding = maxLenStr - searchResultsArray[i][0].length;
        let compareString = searchResultsArray[i][0];
        for (let i = 0; i < padding; ++i) {
            compareString += " ";
        }
        // Insert the Damerau-Levenshtein calculation for each search result
        searchResultsArray[i][4] = damerauLevenshtein(str.toLowerCase(), compareString.toLowerCase());
    }

    // Clone the `searchResultsArray` array. Remove any items that start with the 
    // user's search string and place them into `startWithArray` array.
    let iter = structuredClone(searchResultsArray);
    const startWithArray = [];
    /* When removing an element from `searchResultsArray`, this `iter` array
    becomes off-by-one per element removed. Therefore, we keep track and use that
    to correctly remove elements in the original array while continuing to preserve
    this array so we can continue iterating correctly and remove elements 
    simultaneously. */
    let numRemoved = 0;
    for (let i = 0; i < iter.length; ++i) {
        // To lowercase each because case shouldn't matter when the user is searching
        if (iter[i][0].toLowerCase().startsWith(str.toLowerCase())) {
            startWithArray.push(iter[i]);
            searchResultsArray.splice(i - numRemoved++, 1);
        }
    }

    // Sort the array
    searchResultsArray.sort((a,b) => a[4] - b[4]);
    // We reverse the elements first because when iterating through, we will push each to the 
    // front of the `searchResultsArray`. Thereby, ensuring the results are in alphabetical order
    startWithArray.reverse();
    // Repopulate array with the removed values, of which, are now alphabetized and moved to the 
    // top of the search results if they explicitly start with the user's search string.
    for (let i = 0; i < startWithArray.length; ++i) {
        searchResultsArray.unshift(startWithArray[i]);
    }

    return searchResultsArray;
}

function damerauLevenshtein(s1, s2) {
    const a1 = s1.split("");
    const a2 = s2.split("");
    return arrayDamerauLevenshtein(a1, a2);
}

function arrayDamerauLevenshtein(a1, a2) {
    let len1 = a1.length;
    let len2 = a2.length;
    let maxdist = len1 + len2;

    let itemPosition = new Map();

    let score = Array(len1+2).fill().map(_ => Array(len2+2).fill(0));

    score[0][0] = maxdist;
    for (let i = 0; i <= len1; ++i) {
        score[i+1][0] = maxdist;
        score[i+1][1] = i;
    }
    for (let i = 0; i <= len2; ++i) {
        score[0][i+1] = maxdist;
        score[1][i+1] = i;
    }

    for(let i = 1; i < len1 + 1; ++i) {
        let db = 0;
        for(let j = 1; j < len2 + 1; ++j) {
            let i1;
            if (itemPosition.get(a2[j-1]) === undefined){
                i1 = 0;
            } else {
                i1 = itemPosition.get(a2[j-1])
            }
            let j1 = db;

            let cost = 1;
            if (a1[i-1] == a2[j-1]) {
                cost = 0;
                db = j;
            }

            score[i+1][j+1] = Math.min(
                score[i][j] + cost,
                score[i+1][j] + 1,
                score[i][j+1] + 1,
                score[i1][j1] + (i - i1 - 1) + 1 + (j - j1 - 1),
            );
        } 
        itemPosition.set(a1[i-1], i);
    }

    return score[len1+1][len2+1];
}
