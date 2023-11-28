function loadUnitTableData() {
    var httpRequest = new XMLHttpRequest();
    if (!httpRequest) {
        alert("Cannot create an XMLHTTP instance");
        return false;
    }

    httpRequest.onreadystatechange = function() {
        if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
            let unitTableData = JSON.parse(this.responseText);

            document.getElementById("total-points").innerHTML = "Total Points: " + unitTableData[1];

            if (Array.isArray(unitTableData[0]) && unitTableData[0].length != 0) {
                let table = document.getElementById("unit-table");
                for (let i = 0; i < unitTableData.length; ++i) {
                    let tr = document.createElement("tr");
    
                    let tdFaction = document.createElement("td");
                    tdFaction.append(document.createTextNode(unitTableData[0][i][0]));
                    tr.append(tdFaction);
        
        
                    let tdUnitName = document.createElement("td");
                    tdUnitName.append(document.createTextNode(unitTableData[0][i][1]));
                    tr.append(tdUnitName);
        
        
                    let tdNumModels = document.createElement("td");
                    tdNumModels.append(document.createTextNode(unitTableData[0][i][2]));
                    tr.append(tdNumModels);
        
        
                    let tdUnitPoints = document.createElement("td");
                    tdUnitPoints.append(document.createTextNode(unitTableData[0][i][3]));
                    tr.append(tdUnitPoints);
    
                    table.append(tr);
                }
            }
        }
    }

    httpRequest.open("POST", "db/load-unit-table-data.php");
    httpRequest.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded",
    );
    httpRequest.send();
}