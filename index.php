<?php
include('database/include.php');
if (isset($_SESSION['accessApprove'])) {
    header("Location: ./home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Divine Jwellery</title>
    <?php include 'meta.php' ?>
    <style>
        body {
            background: #39846b8c;
        }
    </style>
</head>
<body>
    <?php include 'navbarIndex.php' ?>
    
    <div class="signin_page">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="sign_in_card">
                        <form action="backend/login.php" method="post">
                            <center>
                                <h3>Login</h3>
                            </center><br>
                            <div class="email_div">
                                <input size="30" type="email" style="width: 100%;" id="email" pattern="^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$" oninput="studentEmail(this)" name="email" placeholder="Enter your Email Address" required>
                            </div>
                            <br>
                            <div class="pass_div">
                                <input size="30" type="password" style="width: 100%;" id="pwd" name="password" placeholder="Enter your Password" oninput="pwdPattern(this)" required>
                            </div>
                            <br>
                            <!-- <div class="g-recaptcha" data-sitekey="6Le8ZhskAAAAAE27T_06pLIr0NUAM5MYg1068qUm"></div> -->
                            <br>
                            <center><button type="submit" name="login" class="btn">Login</button></center>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function studentEmail(usr) {
            var regexp =  /^[A-Za-z0-9+_.@-]+$/;
            var input = usr.value;
            if (input != "") {
                if (regexp.test(input)) {
                    return true;
                } else {
                    alert("Please enter a valid email address!")
                    usr.value = null;
                }
            }else{
                alert("Please enter your email address!");
            }
        };
        function pwdPattern(usr) {
            var regexp =  /^[A-Za-z0-9#@!$]+$/;
            var input = usr.value;
            if (input != "") {
                if (regexp.test(input)) {
                    return true;
                } else {
                    alert("Please enter a valid password!")
                    usr.value = null;
                }
            }else{
                alert("Please enter your password!");
            }
        };
    </script>
    

    <?php include 'footer.php' ?>
</body>
</html>