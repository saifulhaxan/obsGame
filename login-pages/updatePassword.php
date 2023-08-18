<?php
include('../layout/topBar.php');
?>

<div class="profile">
    <div class="row">
        <div class="col-md-12">
            <div class="titleBox py-4">
                <h3 class="mb-0 achivpFont mb-0 font-weight-bold"><a href="#" class="text-dark text-decoration-none">Update Password
                    </a></h3>
            </div>
        </div>
    </div>
    <div class="report-section shadow px-5 py-4 rounded-15 my-4">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form action="#" method="POST">
                    <div class="form-group py-2 position-relative">
                        <label for="password">Enter Password <span class="required text-danger">*</span></label>
                        <div class="passwordWrapper position-relative">
                            <input type="password" class="form-control rounded-pill border-0 shadow passInput" id="password" placeholder="Enter New Password">
                            <i class="bi bi-eye-slash enter-icon right-icon position-absolute passDisplay" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-group py-2 position-relative">
                        <label for="newPassword">New Password <span class="required text-danger">*</span></label>
                        <div class="passwordWrapper position-relative">
                            <input type="password" class="form-control rounded-pill border-0 shadow passInput" id="newPassword" placeholder="New Password">
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
                    <div class="form-group py-4">
                        <input type="button" value="Update" class="border-0 rounded-pill text-white bg-theme-primary px-5 py-2" data-toggle="modal" data-target="#updatedPassword">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>    
<!-- reset password -->
<div class="modal fade" id="updatedPassword" tabindex="-1" aria-labelledby="updatedPasswordLabel" aria-hidden="true">
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