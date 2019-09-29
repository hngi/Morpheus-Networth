function popup() {
    let assetList = document.getElementById("assetList");
    let liabilityList = document.getElementById("liabilityList");
    let assetQuantitySum = 0;
    let assetPriceSum = 0;
    let liabilityQuantitySum = 0;
    let liabilityPriceSum = 0;


    for (let i = 2; i < assetList.rows.length; i++) {

        assetQuantitySum += parseInt(assetList.rows[i].cells[1].innerHTML);
        assetPriceSum += parseInt(assetList.rows[i].cells[2].innerHTML);
    }

    for (let i = 2; i < liabilityList.rows.length; i++) {

        liabilityQuantitySum += parseInt(liabilityList.rows[i].cells[1].innerHTML);
        liabilityPriceSum += parseInt(liabilityList.rows[i].cells[2].innerHTML);
    }

    let totalAssetSum = assetQuantitySum * assetPriceSum;
    let totalLiabilitySum = liabilityQuantitySum * liabilityPriceSum;
    let networth = totalAssetSum - totalLiabilitySum;

    // alert("Your Total Asset is: " + totalAssetSum + "\n" + 
    //         "Your Total Liabilities is: " + totalLiabilitySum + "\n" + 
    //         "Networth = Total Assets - Total Liabilities \n" + 
    //         "Networth = " + totalAssetSum + " - " + totalLiabilitySum + "\n" + 
    //         "Your Networth is: " + networth
    //     );
document.getElementById("test1").innerHTML = totalAssetSum;
document.getElementById("test2").innerHTML = totalLiabilitySum;
document.getElementById("test3").innerHTML = networth;
}

// window.localStorage.setItem("Total Assets", totalAssetSum, "Total Liabilities", totalLiabilitySum, "Networth", networth);
