<?php
include('../layout/topBar.php');
?>

<div class="ediTprofile">
    <div class="row">
        <div class="col-md-12">
            <div class="titleBox py-4">
                <h3 class="mb-0 achivpFont mb-0 font-weight-bold"><a href="./profile.php" class="text-dark text-decoration-none"><i class="bi bi-chevron-left"></i> Edit Profile</a></h3>
            </div>
        </div>
    </div>
    <div class="report-section shadow px-5 py-4 rounded-15 my-4">
        <div class="postTitle d-flex flex-wrap gap-15 flex-column mb-5">
            <div class="postImage position-relative">
                <img src="../images/postimage.png" alt="postImage" class="mw-100 rounded-pill" width="150" id="profilePic">
                <label for="profilePicture" class="editprofile">
                    <i class="bi bi-camera-fill"></i>
                    <input type="file" id="profilePicture" class="d-none">
                </label>
            </div>
            <div class="changePassword">
                <a href="../login-pages/updatePassword.php" class="text-purple">Change Password</a>
            </div>
        </div>
        <form action="">
            <div class="row mb-4">
                <div class="col-md-5">

                    <div class="form-group py-2">
                        <label for="firstName">
                            First Name <span class="required text-danger">*</span>
                        </label>
                        <input type="text" name="firstName" placeholder="Enter First Name" class="form-control border-0 rounded-pill shadow">
                    </div>
                    <div class="form-group py-2">
                        <label for="lastName">
                            Last Name <span class="required text-danger">*</span>
                        </label>
                        <input type="text" name="lastName" placeholder="Enter Last Name" class="form-control border-0 rounded-pill shadow">
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-3">
                    <p class="font-weight-600 text-dark mb-0">Email</p>
                </div>
                <div class="col-md-6">
                    <p class="mb-0 text-secondary">mark@gmail.com</p>
                </div>
            </div>
            <div class="editBtn py-4">
                <button type="button" class="btn bg-theme-primary text-white px-5 rounded-pill py-2" data-toggle="modal" data-target="#profileadd">Update</button>
            </div>
        </form>
    </div>
</div>

<?php include('./profilePopups.php');?>
<?php include('../layout/footer.php'); ?>