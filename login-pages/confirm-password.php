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
                            <div class="form-group py-2 position-relative">
                                <label for="password">Password <span class="required text-danger">*</span></label>
                                <div class="passwordWrapper position-relative">
                                    <input type="password" class="form-control rounded-pill border-0 shadow passInput" id="password" placeholder="Enter New Password">
                                    <i class="bi bi-eye-slash enter-icon right-icon position-absolute passDisplay" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-group py-2 position-relative">
                                <label for="confirmPassword">Confirm Password <span class="required text-danger">*</span></label>
                                <div class="passwordWrapper position-relative">
                                    <input type="password" class="form-control rounded-pill border-0 shadow passInput" id="confirmPassword" placeholder="Confirm Password">
                                    <i class="bi bi-eye-slash enter-icon right-icon position-absolute passDisplay" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-group text-center py-2">
                                <input type="button" value="Update" class="form-control border-0 rounded-pill text-white bg-theme-primary" data-toggle="modal" data-target="#passwordReset">
                            </div>
                            <div class="backBtn text-center">
                                <p><a href="./verification-code.php" class="theme-primary-text d-flex justify-content-center align-items-center"><i class="bi bi-arrow-left pr-2 fa-20"></i>Back to Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- reset password -->
<div class="modal fade" id="passwordReset" tabindex="-1" aria-labelledby="passwordResetLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="bi bi-x close" data-dismiss="modal" aria-label="Close"></button>
                <div class="contentModal text-center px-md-5">
                    <i class="bi bi-check-circle text-success"></i>
                    <h3>Successully</h3>
                    <p>Password Update Successully!</p>
                </div>
                <div class="reset-footer text-center">
                    <button type="button" class="btn bg-theme-primary text-white px-5 rounded-pill" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../layout/footer.php'); ?>