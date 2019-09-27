let assetSelectedRow = null

function onAssetFormSubmit() {
    if (validate()) {
        let formData = readFormData();
        if (assetSelectedRow == null)
            insertNewRecord(formData);
        else
            updateRecord(formData);
        resetForm();
    }
}

function readFormData() {
    let formData = {};
    formData["assetDescription"] = document.getElementById("assetDescription").value;
    formData["assetQuantity"] = document.getElementById("assetQuantity").value;
    formData["value"] = document.getElementById("assetPrice").value;
    
    return formData;
}

function insertNewRecord(data) {
    let table = document.getElementById("assetList").getElementsByTagName('tbody')[0];
    let newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.assetDescription;
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.assetQuantity;
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.value;
    cell4 = newRow.insertCell(3);
    cell4.innerHTML = `<a onClick="onEdit(this)">Edit</a>
                       <a onClick="onDelete(this)">Delete</a>`;
}

function resetForm() {
    document.getElementById("assetDescription").value = "";
    document.getElementById("assetQuantity").value = "";
    document.getElementById("assetPrice").value = "";
    assetSelectedRow = null;
}

function onEdit(td) {
    assetSelectedRow = td.parentElement.parentElement;
    document.getElementById("assetDescription").value = assetSelectedRow.cells[0].innerHTML;
    document.getElementById("assetQuantity").value = assetSelectedRow.cells[1].innerHTML;
    document.getElementById("assetPrice").value = assetSelectedRow.cells[2].innerHTML;
    
}
function updateRecord(formData) {
    assetSelectedRow.cells[0].innerHTML = formData.assetDescription;
    assetSelectedRow.cells[1].innerHTML = formData.assetQuantity;
    assetSelectedRow.cells[2].innerHTML = formData.value;
   
}

function onDelete(td) {
    if (confirm('Are you sure you want to delete this record ?')) {
        row = td.parentElement.parentElement;
        document.getElementById("assetList").deleteRow(row.rowIndex);
        resetForm();
    }
}
function validate() {
    isValid = true;
    if (document.getElementById("assetDescription").value == "") {
        isValid = false;
        document.getElementById("assetDescriptionValidationError").classList.remove("hide");
    } else {
        isValid = true;
        if (!document.getElementById("assetDescriptionValidationError").classList.contains("hide"))
            document.getElementById("assetDescriptionValidationError").classList.add("hide");
    }
    return isValid;
}

// Liability
