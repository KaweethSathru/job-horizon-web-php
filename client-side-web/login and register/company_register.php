<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>

<?php

if (isset($_POST["submit"]) && isset($_FILES['image'])) {

    $image_name = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];

    $img_extension = pathinfo($image_name, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_extension);

    $allowed_extensions = array("PNG", "png");

    $errors = array();

    if (in_array($img_ex_lc, $allowed_extensions)) {

        $new_img_name = uniqid("COMPANY_IMG-", true) . "." . $img_ex_lc;
        $img_upload_path = '../../assets/uploads/companies/company-logo/' . $new_img_name;

        move_uploaded_file($tmp_name, $img_upload_path);

        $company_username = $_POST["company_username"];
        $company_name = $_POST["company_name"];
        $company_website = $_POST["company_website"];
        $company_email = $_POST["company_email"];
        $company_description = $_POST["company_description"];
        $company_password = $_POST["company_password"];
        $company_passwordRepeat = $_POST["repeat_company_password"];
        $companypasswordHash = password_hash($company_password, PASSWORD_DEFAULT);

        $errors = array();

        if (empty($company_username) or empty($company_name) or  empty($company_website) or empty($company_email) or empty($company_password) or empty($company_passwordRepeat) or empty($company_description)) {
            array_push($errors, "All fields are required");
        }

        $query1 = "SELECT * FROM companies
                   WHERE
                   company_username = '$company_username'";

        $result1 = mysqli_query($connection, $query1);
        $rowCount1 = mysqli_num_rows($result1);

        if ($rowCount1 > 0) {
            array_push($errors, "company username already exists!");
        }

        if (!filter_var($company_email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "company_email is not valid");
        }
        if (strlen($company_password) < 8) {
            array_push($errors, "company_passwordmust be at least 8 charactes long");
        }
        if ($company_password !== $company_passwordRepeat) {
            array_push($errors, "company_passworddoes not match");
        }

        $query2 = "SELECT * FROM companies
                   WHERE
                   company_email = '$company_email' ";

        $result2 = mysqli_query($connection, $query2);
        $rowCount2 = mysqli_num_rows($result2);

        if ($rowCount2 > 0) {
            array_push($errors, "company_email already exists!");
        }
        if (count($errors) > 0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
        } else {

            $query3 = "INSERT INTO companies (company_username, company_name, company_website, company_email, company_description, company_password, company_logo)
                       VALUES ('{$company_username}', '{$company_name}', '{$company_website}', '{$company_email}', '{$company_description}', '{$companypasswordHash}', '{$new_img_name}')";

            $result3 = mysqli_query($connection, $query3);

            if ($result3) {
                header("Location: ../../company-side-web/login and register/company_login.php");
            }
        }
    } else {
        echo "File extension can not be allowed! Please upload png files only.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB HORIZON | Register as Company</title>

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
        <h1>Login as an Company</h1>
        <form action="company_register.php " method="post" enctype="multipart/form-data">
            <div>
                <label for="username">Username</label>
                <input type="text" name="company_username"  placeholder="Enter Username">
            </div>
            <div>
                <label for="name">Company Name</label>
                <input type="text" name="company_name" placeholder="Enter Firstname">
            </div>
            <div>
                <label for="web">Website</label>
                <input type="text" name="company_website" placeholder="Enter Last Name">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="company_email" placeholder="Enter Email">
            </div>
            <div>
                <label for="email">Company Description</label>
                <input type="text" name="company_description" placeholder="Enter Email">
            </div>
            <div>
                <label for="passowrd">Password Give a password more than 8 characters</label>
                <input type="password" name="company_password" placeholder="Enter passowrd">
            </div>
            <div>
                <label for="passowrd">Repeat Your passowrd</label>
                <input type="password" name="repeat_company_password" placeholder="Re-enter passowrd">
            </div>
            <div>
                <label for="profile">Comapny Logo(Accepts PNG images only)</label>
                <input type="file" name="image">
            </div>
            <input type="submit" value="Login">
            <p>Already Registered <a href="company_login.php">login Here</a></p>
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