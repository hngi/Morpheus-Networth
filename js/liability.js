let liabilitySelectedRow = null

function onLiabilityFormSubmit() {
    if (liabilityValidate()) {
        let liabilityFormData = liabilityReadFormData();
        if (liabilitySelectedRow == null)
            liabilityInsertNewRecord(liabilityFormData);
        else
            liabilityUpdateRecord(liabilityFormData);
        liabilityResetForm();
    }
}

function liabilityReadFormData() {
    let liabilityFormData = {};
    liabilityFormData["liabilityDescription"] = document.getElementById("liabilityDescription").value;
    liabilityFormData["liabilityQuantity"] = document.getElementById("liabilityQuantity").value;
    liabilityFormData["value"] = document.getElementById("liabilityPrice").value;
    
    return liabilityFormData;
}

function liabilityInsertNewRecord(data) {
    document.getElementById("sample2").classList.add("hide");
    let table = document.getElementsByClassName("liabilityList")[0].getElementsByTagName('tbody')[0];
    let newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.liabilityDescription;
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.liabilityQuantity;
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.value;
    cell4 = newRow.insertCell(3);
    cell4.innerHTML = `<a onClick="onLiabilityEdit(this)">Edit</a>
                       <a onClick="onLiabilityDelete(this)">Delete</a>`;
}

function liabilityResetForm() {
    document.getElementById("liabilityDescription").value = "";
    document.getElementById("liabilityQuantity").value = "";
    document.getElementById("liabilityPrice").value = "";
    liabilitySelectedRow = null;
}

function onLiabilityEdit(td) {
    liabilitySelectedRow = td.parentElement.parentElement;
    document.getElementById("liabilityDescription").value = liabilitySelectedRow.cells[0].innerHTML;
    document.getElementById("liabilityQuantity").value = liabilitySelectedRow.cells[1].innerHTML;
    document.getElementById("liabilityPrice").value = liabilitySelectedRow.cells[2].innerHTML;
    
}
function liabilityUpdateRecord(liabilityFormData) {
    liabilitySelectedRow.cells[0].innerHTML = liabilityFormData.liabilityDescription;
    liabilitySelectedRow.cells[1].innerHTML = liabilityFormData.liabilityQuantity;
    liabilitySelectedRow.cells[2].innerHTML = liabilityFormData.value;
   
}

function onLiabilityDelete(td) {
    if (confirm('Are you sure you want to delete this record ?')) {
        row = td.parentElement.parentElement;
        document.getElementsByClassName("liabilityList")[0].deleteRow(row.rowIndex);
        liabilityResetForm();
    }
}
function liabilityValidate() {
    isValid = true;
    if (document.getElementById("liabilityDescription").value == "") {
        isValid = false;
        document.getElementById("liabilityDescriptionValidationError").classList.remove("hide");
    } else {
        isValid = true;
        if (!document.getElementById("liabilityDescriptionValidationError").classList.contains("hide"))
            document.getElementById("liabilityDescriptionValidationError").classList.add("hide");
    }
    return isValid;
}