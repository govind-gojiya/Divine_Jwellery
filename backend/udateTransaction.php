<?php 

include('./../database/include.php');

if(isset($_POST['activeTransaction'])){
    $trid = htmlspecialchars($_POST['transactionIdActive']);
    $isActive = 1;
    $sql = "UPDATE `divine_transaction` SET `is_active`= ? WHERE `transaction_id` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([ $isActive, $trid]);

    if($stmt){
        echo '<script>alert("Transaction Activated Successfully.")</script>';
        echo '<script>window.location.href = "./../transaction.php"</script>';
    }else{
        echo '<script>alert("Something went wrong !!!")</script>';
        echo '<script>window.location.href = "./../home.php"</script>';
    }
} else if(isset($_POST['deactiveTransaction'])){
    $trid = htmlspecialchars($_POST['transactionIdDeactive']);
    $isActive = 0;
    $sql = "UPDATE `divine_transaction` SET `is_active`= ? WHERE `transaction_id` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([ $isActive, $trid]);

    if($stmt){
        echo '<script>alert("Transaction Deactivated Successfully.")</script>';
        echo '<script>window.location.href = "./../transaction.php"</script>';
    }else{
        echo '<script>alert("Something went wrong !!!")</script>';
        echo '<script>window.location.href = "./../home.php"</script>';
    }
} else{
    echo '<script>alert("Something went wrong")</script>';
    echo '<script>window.location.href = "./../index.php"</script>';
}
?>