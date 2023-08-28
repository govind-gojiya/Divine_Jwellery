<?php 

include('./../database/include.php');

if(isset($_POST['Delete'])){
    $id = htmlspecialchars($_POST['deleteid']);

    $sql = "DELETE FROM `divine_jwellery_payout_data` WHERE `id` =?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    if($stmt){
        echo '<script>alert("Deleted Successfully user")</script>';
        echo '<script>window.location.href = "./../home.php"</script>';
    }else{
        echo '<script>alert("Something went wrong !!!")</script>';
        echo '<script>window.location.href = "./../home.php"</script>';
    }
} else if(isset($_POST['EditUser'])){
    $_SESSION['editUserID'] = htmlspecialchars($_POST['editid']);
    echo '<script>window.location.href = "./../editUser.php"</script>';
} else{
    echo '<script>alert("Something went wrong")</script>';
    echo '<script>window.location.href = "./../index.php"</script>';
}
?>