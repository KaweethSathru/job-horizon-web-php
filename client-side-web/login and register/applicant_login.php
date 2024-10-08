<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>

<?php
if (isset($_POST["login"])) {
    $applicant_username = $_POST["applicant_username"];
    $applicant_password = $_POST["applicant_password"];

    $query = "SELECT * FROM applicants
              WHERE applicant_username = '$applicant_username'";

    $result = mysqli_query($connection, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $applicant = mysqli_fetch_assoc($result);
            $_SESSION['applicant_id'] = $applicant['applicant_id'];
            header("Location: ../home.php");
        }
    } else {
        echo "Login Failed!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB HORIZON | Login as Applicant</title>

    <link rel="shortcut icon" type="image/x-icon" href="../../assets/favicon/favicon.ico">
    <link rel="stylesheet" href="../style/login.css">
</head>

<body>

    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../../assets/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->

    <div class="login-wrapper">
        <img src="../../assets/logo/logo.png" alt="">
        <h1>Login as an Applicants</h1>
        <form action="applicant_login.php" method="post">
            <div>
                <label for="username">Username</label>
                <input type="text" name="applicant_username" placeholder="Enter Username">
            </div>
            <div>
                <label for="passowrd">Password</label>
                <input type="password" name="applicant_password" placeholder="Enter passowrd">
            </div>
            <input type="submit" name="login" value="Login">
            <p>Not registered yet? <a href="applicant_register.php">Register Here</a></p>
        </form>
    </div>





    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="../js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="../components/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../components/js/popper.min.js"></script>
    <script src="../components/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="../components/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="../components/js/owl.carousel.min.js"></script>
    <script src="../components/js/slick.min.js"></script>
    <script src="../components/js/price_rangs.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="../components/js/wow.min.js"></script>
    <script src="../components/js/animated.headline.js"></script>
    <script src="../components/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="../components/js/jquery.scrollUp.min.js"></script>
    <script src="../components/js/jquery.nice-select.min.js"></script>
    <script src="../components/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="../components/js/contact.js"></script>
    <script src="../components/js/jquery.form.js"></script>
    <script src="../components/js/jquery.validate.min.js"></script>
    <script src="../components/js/mail-script.js"></script>
    <script src="../components/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="../components/js/plugins.js"></script>
    <script src="../components/js/main.js"></script>

</body>

</html>