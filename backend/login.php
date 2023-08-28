<?php
include('./../database/include.php');
include('./../config.php');
if(isset($_POST["login"])) {
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    if($email == $DBemail) {
        if($password == $DBPassword) {
            $_SESSION['accessApprove'] = 1;
            echo '<script>window.location.href = "./../home.php"</script>';
        } else {
            echo '<script>alert("Incorrect Password !!!")</script>';
            echo '<script>window.location.href = "./../index.php"</script>';
        }
    } else {
        echo '<script>alert("User does not exists")</script>';
        echo '<script>window.location.href = "./../index.php"</script>';
    }
} else {
    echo '<script>alert("Bad request ! you can not access this page like this. !!!")</script>';
    echo '<script>window.location.href = "./../index.php"</script>';
}
?>