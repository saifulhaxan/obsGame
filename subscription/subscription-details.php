<?php
include('../layout/topBar.php');
?>
<div class="subscription-details">
    <div class="row align-items-center justify-content-between">
        <div class="col-md-4">
            <div class="titleBox py-4">
                <h3 class="mb-0 achivpFont mb-0 font-weight-bold"><a href="./subscription.php" class="text-dark text-decoration-none"><i class="bi bi-chevron-left"></i> Subscription Details</a></h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="titleBox py-4">
                <div class="addPackages text-md-right">
                    <a href="#" class="btn rounded-pill px-5">Edit</a>
                </div>
            </div>
        </div>
    </div>
    <div class="notification-section shadow p-5 rounded-15 my-4">
        <div class="row justify-content-between align-items-md-baseline">
            <div class="col-md-6">
                <div class="subscription-content mb-4">
                    <h3>Plan 1</h3>
                </div>
                <div class="subscription-list">
                    <div class="d-flex gap-15 mb-4">
                        <div class="iconTick flex-shrink-0">
                            <p class="mb-0 lh-1"><i class="bi bi-check lh-1"></i></p>
                        </div>
                        <div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Aenean euismod bibendum laoreet. Proin gravida dolor sit
                                amet lacus accumsan et viverra justo commodo.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex gap-15 mb-4">
                        <div class="iconTick flex-shrink-0">
                            <p class="mb-0 lh-1"><i class="bi bi-check lh-1"></i></p>
                        </div>
                        <div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Aenean euismod bibendum laoreet. Proin gravida dolor sit
                                amet lacus accumsan et viverra justo commodo.
                            </p>
                            <div class="readMore d-flex mt-5">
                                <a href="#" class="text-purple">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex align-items-center flex-wrap selectBox gap-15 my-4 justify-content-md-end">
                    <div class="title flex-shrink-0">
                        <p class="achivpFont mb-0">Mark as:</p>
                    </div>
                    <div class="filterField">
                        <select class="form-select form-select-sm pr-5 py-2 w-auto" aria-label=".form-select-sm example">
                            <option>Select Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('../layout/footer.php'); ?>