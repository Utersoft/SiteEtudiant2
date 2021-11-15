function initTab() {
    let tabEntete = ['Matière', 'Elèves', 'Notes'];
    var n_i = 0;

    const newTab = document.createElement("table");
    newTab.setAttribute("id", "tableEleve");
    const existingDiv = document.getElementById("tableau");
    existingDiv.appendChild(newTab);
    const newTabHead = document.createElement("thead");
    newTab.appendChild(newTabHead);
    const newRow = document.createElement("tr");
    newTabHead.appendChild(newRow);
    var newTd = document.createElement("td");
    var newH2 = document.createElement("h2");
    for(n_i = 0; n_i < tabEntete.length; n_i++){
        newTd = document.createElement("td");
        newTd.setAttribute("id", tabEntete[n_i]);
        newH2 = document.createElement("h2");
        newH2.innerHTML = tabEntete[n_i];
        newTd.appendChild(newH2);
        newRow.appendChild(newTd);
    }
    const newTableBody = document.createElement("tbody");
    newTableBody.setAttribute("id", "tableBody");
    newTab.appendChild(newTableBody);
}

function addRow(n_i){
    var newTableBody = document.getElementById("tableBody");
    const newTr = document.createElement("tr");
    newTr.setAttribute("id", "row" + n_i);
    newTableBody.appendChild(newTr);
}


function addElement(element, n_i){
    var tRow = document.getElementById("row" + n_i);
    const newTd = document.createElement("td");
    newTd.innerHTML = element;
    tRow.appendChild(newTd);
}