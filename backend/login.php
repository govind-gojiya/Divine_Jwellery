<?php

try {
    include('./../database/include.php');
    if (isset($_POST['login'])) {
        if ($_POST['g-recaptcha-response'] == '') {
            echo "<script>alert('Please check the captcha !!')</script>";
            echo "<script>window.location.href = './../index.php';</script>";
        } else {
            $secretKey = "6Le8ZhskAAAAAPannYK3ekmE8jiDUSFBVHy5N704";
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if($responseData->success) {
                    $username = htmlspecialchars($_POST["email"]);
                    $pwd = htmlspecialchars($_POST["password"]);
                    $pwd = md5($pwd);
    
                    $searchUser = "SELECT * FROM `user_authenticate` WHERE `username` =?";
                    $findUser = $conn->prepare($searchUser);
                    $findUser->execute([$username]);
                    $userDetails = $findUser->fetch(PDO::FETCH_ASSOC);
    
                    if ($findUser->rowCount()) {
    
                        $databasePWD = $userDetails['password'];
                        if ($pwd === $databasePWD) {
                            if ($userDetails['active_status'] == 0) {
                                echo "<script>alert('Your account status isn't activated. !!')</script>";
                                echo "<script>window.location.href = './../index.php';</script>";
                            } else {
                                $_SESSION['accessApprove'] = 1;
                                echo '<script>window.location.href = "./../home.php"</script>';
                            }
                        } else {
                            echo "<script>alert('Password is not correct !!')</script>";
                            echo "<script>window.location.href = './../index.php';</script>";
                        }
                    } else {
                        echo "<script>alert('User Does not Exist !!')</script>";
                        echo "<script>window.location.href = './../index.php';</script>";
                    }
            } else {
                echo "<script>alert('Please check the captcha !!')</script>";
                echo "<script>window.location.href = './../index.php';</script>";
            }
        }
    } else { 
        echo "<script>alert('Bad request ! you can't access this page like this.');</script>"; 
        echo "<script>window.location.href = './../index.php';</script>";
    }
} catch (PDOException $e) {
    echo "Error:" . $e->getMessage();
}
?>