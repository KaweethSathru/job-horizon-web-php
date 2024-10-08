<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB HORIZON | Register as Applicant</title>

    
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
        <h1>Register as an Applicants</h1>

        <?php
        if (isset($_POST["submit"]) && isset($_FILES['image'])) {

            $image_name = $_FILES['image']['name'];
            $image_size = $_FILES['image']['size'];
            $tmp_name = $_FILES['image']['tmp_name'];
            // $errors = $_FILES['image']['error'];
            $img_extension = pathinfo($image_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_extension);

            $allowed_extensions = array("jpg", "jpeg");

            $errors = array();

            if (in_array($img_ex_lc, $allowed_extensions)) {

                $new_img_name = uniqid("APPLICANT_IMG-", true) . "." . $img_ex_lc;
                $img_upload_path = '../../assets/uploads/applicants/profile-pictures/' . $new_img_name;

                move_uploaded_file($tmp_name, $img_upload_path);

                $applicant_username = $_POST["applicant_username"];
                $applicant_first_name = $_POST["applicant_first_name"];
                $applicant_last_name = $_POST["applicant_last_name"];
                $applicant_email = $_POST["applicant_email"];
                $applicant_password = $_POST["applicant_password"];
                $applicant_passwordRepeat = $_POST["repeat_applicant_password"];
                $applicantpasswordHash = password_hash($applicant_password, PASSWORD_DEFAULT);

                if (empty($applicant_username) or empty($applicant_first_name) or  empty($applicant_last_name) or empty($applicant_email) or empty($applicant_password) or empty($applicant_passwordRepeat)) {
                    array_push($errors, "All fields are required");
                }

                $query1 = "SELECT * FROM applicants
                           WHERE
                           applicant_username = '$applicant_username' ";

                $result1 = mysqli_query($connection, $query1);

                $rowCount1 = mysqli_num_rows($result1);
                if ($rowCount1 > 0) {
                    array_push($errors, "applicant username already exists!");
                }

                if (!filter_var($applicant_email, FILTER_VALIDATE_EMAIL)) {
                    array_push($errors, "applicant_email is not valid");
                }
                if (strlen($applicant_password) < 8) {
                    array_push($errors, "applicant_passwordmust be at least 8 charactes long");
                }
                if ($applicant_password !== $applicant_passwordRepeat) {
                    array_push($errors, "applicant_passworddoes not match");
                }

                $query2 = "SELECT * FROM applicants
                           WHERE
                           applicant_email = '$applicant_email' ";

                $result2 = mysqli_query($connection, $query2);

                $rowCount2 = mysqli_num_rows($result2);
                if ($rowCount2 > 0) {
                    array_push($errors, "applicant_email already exists!");
                }
                if (count($errors) > 0) {
                    foreach ($errors as  $error) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                } else {

                    $query3 = "INSERT INTO applicants(applicant_username, applicant_first_name, applicant_last_name, applicant_email, applicant_password, applicant_profile_picture)
                               VALUES ('{$applicant_username}', '{$applicant_first_name}', '{$applicant_last_name}', '{$applicant_email}', '{$applicantpasswordHash}', '{$new_img_name}')";

                    $result3 = mysqli_query($connection, $query3);

                    if ($result3) {
                        header("Location: ../home.php");
                    }

                }
            } else {
                echo "File extension can not be allowed! Please upload jpg files only.";
            }
        }
        ?>
        
        
        <form action="applicant_register.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="username">Username</label>
                <input type="text" name="applicant_username" placeholder="Enter Username">
            </div>
            <div>
                <label for="firstname">First Name</label>
                <input type="text" name="applicant_first_name"  placeholder="Enter Firstname">
            </div>
            <div>
                <label for="lastname">Last Name</label>
                <input type="text" name="applicant_last_name" placeholder="Enter Last Name">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="applicant_email" placeholder="Enter Email">
            </div>
            <div>
                <label for="passowrd">Password Give a password more than 8 characters</label>
                <input type="password" name="applicant_password" placeholder="Enter passowrd">
            </div>
            <div>
                <label for="passowrd">Repeat Your passowrd</label>
                <input type="password" name="repeat_applicant_password" placeholder="Re-enter passowrd">
            </div>
            <div>
                <label for="profile">Profile Pictures</label>
                <input type="file" name="image" >
            </div>
            <input type="submit" value="Register" name="submit">
            <p>Already registered <a href="applicant_login.php">Register Here</a></p>
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