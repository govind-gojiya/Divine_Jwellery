<?php 

include ('./../database/include.php');

if(isset($_POST['addUserDetails'])){
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $contact = htmlspecialchars($_POST["contact"]);
    $accNumber = htmlspecialchars($_POST["accNumber"]);
    $paymentType = htmlspecialchars($_POST["paymentType"]);
    $lastTrNo = htmlspecialchars($_POST["lastTrNo"]);
    $transcationDate = htmlspecialchars($_POST["transcationDate"]);
    // $transcationDate = date("m-d-Y", strtotime($transcationDate));
    $address = htmlspecialchars($_POST["address"]);
    $pincode = htmlspecialchars($_POST["pincode"]);
    $payout = htmlspecialchars($_POST["payout"]);
    $payto1 = htmlspecialchars($_POST["payto1"]);
    $payto2 = htmlspecialchars($_POST["payto2"]);
    $typeofnode = htmlspecialchars($_POST["typeofnode"]);
    $parentId = htmlspecialchars($_POST["parentId"]);
    $isActive = htmlspecialchars($_POST["isActive"]);
    $accountBranch = htmlspecialchars($_POST["accountBranch"]);
    $accountIFSC = htmlspecialchars($_POST["accountIFSC"]);
    $accountUPINo = htmlspecialchars($_POST["accountUPINo"]);
    $aadharcardname = htmlspecialchars($_POST["aadharcardname"]);
    $aadharcardno = htmlspecialchars($_POST["aadharcardno"]);
    $pancardno = htmlspecialchars($_POST["pancardno"]);
    $passbooklink = htmlspecialchars($_POST["passbooklink"]);
    $aadharcardlink = htmlspecialchars($_POST["aadharcardlink"]);
    $pancardlink = htmlspecialchars($_POST["pancardlink"]);
    $remark = htmlspecialchars($_POST["remark"]);
    
    $insQuery = "INSERT INTO `divine_jwellery_payout_data`(`Payout`, `contact`, `EmailId`, `AccountHolderName`, `AccountNumber`, `PaymentType`, `LastPaymentTransactionNo`, `LastPaymentTransactionDate`, `pay_to_id_1`, `pay_to_id_2`, `type_of_node`, `address`, `pincode`, `isactive`, `parentId`, `account_ifsc`, `account_branch_name`, `account_upi_number`, `passbook_link`, `aadhar_card_number`, `aadhar_card_name`, `aadhar_card_link`, `pan_card_number`, `pan_card_link`, `remark`) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $inserting = $conn->prepare($insQuery);
    $inserting->execute([$payout, $contact, $email, $name, $accNumber, $paymentType, $lastTrNo, $transcationDate, $payto1, $payto2, $typeofnode, $address, $pincode, $isActive, $parentId, $accountIFSC, $accountBranch, $accountUPINo, $passbooklink, $aadharcardno, $aadharcardname, $aadharcardlink, $pancardno, $pancardlink, $remark]);

    if($inserting){
        echo '<script>alert("Inserted User Successfully.")</script>';
        echo '<script>window.location.href = "./../addUser.php"</script>';
    }else{
        echo '<script>alert("Something went wrong !!!")</script>';
        echo '<script>window.location.href = "./../addUser.php"</script>';
    }

} else { 
    echo '<script>alert("Bad request ! you can not access this page like this. !!!")</script>';
    echo '<script>window.location.href = "./../home.php"</script>';
}

?>