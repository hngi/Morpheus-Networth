function popup() {
    let assetList = document.getElementById("assetList");
    let liabilityList = document.getElementById("liabilityList");
    let assetQuantitySum = 0;
    let assetPriceSum = 0;
    let liabilityQuantitySum = 0;
    let liabilityPriceSum = 0;


    for (let i = 1; i < assetList.rows.length; i++) {

        assetQuantitySum += parseInt(assetList.rows[i].cells[1].innerHTML);
        assetPriceSum += parseInt(assetList.rows[i].cells[2].innerHTML);
    }

    for (let i = 1; i < liabilityList.rows.length; i++) {

        liabilityQuantitySum += parseInt(liabilityList.rows[i].cells[1].innerHTML);
        liabilityPriceSum += parseInt(liabilityList.rows[i].cells[2].innerHTML);
    }

    let totalAssetSum = assetQuantitySum * assetPriceSum;
    let totalLiabilitySum = liabilityQuantitySum * liabilityPriceSum;
    let networth = totalAssetSum - totalLiabilitySum;

    alert("Your Total Asset is: " + totalAssetSum + "\n" + 
            "Your Total Liabilities is: " + totalLiabilitySum + "\n" + 
            "Networth = Total Assets - Total Liabilities \n" + 
            "Networth = " + totalAssetSum + " - " + totalLiabilitySum + "\n" + 
            "Your Networth is: " + networth
        );
}