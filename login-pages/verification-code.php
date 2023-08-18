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
                            <p>An email has been sent to you with a verification code. Please enter it here.</p>
                        </div>
                        <form action="./confirm-password.php">
                            <div class="form-group py-2">
                                <label for="email">
                                Verification Code <span class="required text-danger">*</span>
                                </label>
                                <input type="number" name="loginEmail" placeholder="Enter Verification Code" class="form-control rounded-pill border-0 shadow">
                            </div>
                            <div class="d-flex justify-content-end flex-wrap mb-md-4">
                                <p><a href="./forgot-password.php" class="theme-primary-text">Resend Code</a></p>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Continue" class="form-control rounded-pill text-white border-0 bg-theme-primary">
                            </div>
                            <div class="backBtn text-center">
                                <p><a href="./forgot-password.php" class="theme-primary-text d-flex justify-content-center align-items-center"><i class="bi bi-arrow-left pr-2 fa-20"></i>Back to Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../layout/footer.php');?>