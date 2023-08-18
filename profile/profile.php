<?php
include('../layout/topBar.php');
?>

<div class="profile">
    <div class="row">
        <div class="col-md-12">
            <div class="titleBox py-4">
                <h3 class="mb-0 achivpFont mb-0 font-weight-bold"><a href="#" class="text-dark text-decoration-none">Profile</a></h3>
            </div>
        </div>
    </div>
    <div class="report-section shadow px-5 py-4 rounded-15 my-4">
        <div class="postTitle d-flex flex-wrap gap-15 flex-column mb-5">
            <div class="postImage">
                <img src="../images/postimage.png" alt="postImage" class="mw-100 rounded-pill" width="100">
            </div>
            <div class="changePassword">
                <a href="#" class="text-purple">Change Password</a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3">
                <p class="font-weight-600 text-dark mb-0">First Name</p>
            </div>
            <div class="col-md-6">
                <p class="mb-0 text-secondary">Mark</p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3">
                <p class="font-weight-600 text-dark mb-0">Last Name</p>
            </div>
            <div class="col-md-6">
                <p class="mb-0 text-secondary">Jhon</p>
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
            <button type="button" class="btn bg-theme-primary text-white px-5 rounded-pill py-2">Edit</button>
        </div>
    </div>
</div>

<?php include('../layout/footer.php'); ?>