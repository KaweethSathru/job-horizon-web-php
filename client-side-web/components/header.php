<header>
    <div class="header-container">
        <div class="log">
            <img src="images/logo/logo.png" alt="">
        </div>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="find_jobs.php">Find Jobs</a></li>
        </ul>
        <?php if (isset($_SESSION['applicant_id'])) { ?>
            <!-- Show this dropdown if applicant is logged in -->
            <div onclick="dropDown()" id="dropdown">
                <i class="fa-solid fa-user"></i>
                <p>Profile</p>
                <div id="dropdown-menu">
                    <a href="profile.php">Profile</a>
                    <a href="./login and register/logout.php">Logout</a>
                </div>
            </div>

        <?php } elseif (isset($_SESSION['company_id'])) { ?>
            <!-- Show this dropdown if company is logged in -->
            <div onclick="dropDown()" id="dropdown">
                <i class="fa-solid fa-user"></i>
                <p>Company</p>
                <div id="dropdown-menu">
                    <a href="profile.php">Profile</a>
                    <a href="./login and register/logout.php">Logout</a>
                </div>
            </div>
        <?php } else { ?>
            <!-- Show this dropdown if no one is logged in -->
            <div onclick="dropDown()" id="dropdown">
                <i class="fa-solid fa-user"></i>
                <i class="fa-solid fa-caret-down"></i>
                <div id="dropdown-menu">
                    <a href="./login and register/applicant_login.php">Applicants</a>
                    <a href="./login and register/company_login.php">Company</a>
                </div>
            </div>
        <?php } ?>
    </div>
</header>