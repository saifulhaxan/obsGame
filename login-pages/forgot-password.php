<?php
include('../layout/header.php');
?>

<section class="login h-100vh align-items-center">
    <div class="container-fluid h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-md-5 leftColumn">
                <div class="loginForm">
                    <div class="loginContent px-md-5">
                        <div class="logo">
                            <figure>
                                <a href="#"><h2>OBS <span>STUDIO</span></h2></a>
                            </figure>
                        </div>
                        <div class="titleBox text-center">
                            <h3>Password Recovery</h3>
                            <p>Enter your email address to receive a verification code.</p>
                        </div>
                        <form action="./verification-code.php" method="POST">
                            <div class="form-group py-2 mb-5">
                                <label for="email">
                                    Email <span class="required text-danger">*</span>
                                </label>
                                <input type="email" name="loginEmail" placeholder="Enter Email Address" class="form-control rounded-pill border-0 shadow">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Continue" class="form-control rounded-pill border-0 text-white bg-theme-primary">
                            </div>
                            <div class="backBtn text-center">
                                <p><a href="./login.php" class="theme-primary-text d-flex justify-content-center align-items-center"><i class="bi bi-arrow-left pr-2 fa-20"></i>Back to Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../layout/footer.php');?>