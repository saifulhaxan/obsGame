<?php
include('../layout/topBar.php');
?>

<div class="ediTprofile">
    <div class="row">
        <div class="col-md-12">
            <div class="titleBox py-4">
                <h3 class="mb-0 achivpFont mb-0 font-weight-bold"><a href="#" class="text-dark text-decoration-none">Edit Subscription Plan</a></h3>
            </div>
        </div>
    </div>
    <div class="report-section shadow px-5 py-4 rounded-15 my-4">
        <form action="">
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="form-group py-2">
                        <label for="firstName">
                            Session Title:
                        </label>
                        <input type="text" value="" name="sessionTitle" placeholder="Session title here*" class="form-control border-0 rounded-pill shadow">
                    </div>
                    <div class="form-group py-2">
                        <label for="lastName">
                            Description:
                            <span class="pl-4"><input type="checkbox" class="form-controls"> Select</span>
                        </label>
                        <textarea placeholder="Description" rows="5" class="form-control border-0 rounded-15 shadow"></textarea>
                    </div>
                    <div class="form-group py-2">
                        <label for="lastName">
                            Description:
                            <span class="pl-4"><input type="checkbox" class="form-controls"> Select</span>
                        </label>
                        <textarea placeholder="Description" rows="5" class="form-control border-0 rounded-15 shadow"></textarea>
                    </div>
                    <div class="form-group py-2">
                        <label for="lastName">
                            Description:
                            <span class="pl-4"><input type="checkbox" class="form-controls"> Select</span>
                        </label>
                        <textarea placeholder="Description" rows="5" class="form-control border-0 rounded-15 shadow"></textarea>
                    </div>
                    <div class="form-group py-2">
                        <label for="lastName">
                            Description:
                            <span class="pl-4"><input type="checkbox" class="form-controls"> Select</span>
                        </label>
                        <textarea placeholder="Description" rows="5" class="form-control border-0 rounded-15 shadow"></textarea>
                    </div>
                    <div class="form-group py-2">
                        <label for="lastName">
                            Description:
                            <span class="pl-4"><input type="checkbox" class="form-controls"> Select</span>
                        </label>
                        <textarea placeholder="Description" rows="5" class="form-control border-0 rounded-15 shadow"></textarea>
                    </div>
                    <div class="form-group py-2">
                        <label for="lastName">
                            Description:
                            <span class="pl-4"><input type="checkbox" class="form-controls"> Select</span>
                        </label>
                        <textarea placeholder="Description" rows="5" class="form-control border-0 rounded-15 shadow"></textarea>
                        <div class="editBtn py-4 d-flex justify-content-end">
                            <button type="button" class="btn bg-theme-primary text-white px-5 rounded-pill py-2">Add More</button>
                        </div>
                    </div>
                    <div class="form-group py-2">
                        <label for="price">
                            Prices <span class="text-danger">*</span>
                        </label>
                        <input type="number" value="" name="price" placeholder="Enter Prices" class="form-control border-0 rounded-pill shadow">
                    </div>
                    <div class="form-group py-2">
                        <label for="price">
                            Prices <span class="text-danger">*</span>
                        </label>
                        <input type="number" value="" name="price" placeholder="Enter Prices" class="form-control border-0 rounded-pill shadow">
                    </div>
                    <div class="form-group py-2">
                        <label for="price">
                            Prices <span class="text-danger">*</span>
                        </label>
                        <input type="number" value="" name="price" placeholder="Enter Prices" class="form-control border-0 rounded-pill shadow">
                    </div>
                    <div class="form-group py-2">
                        <label for="price">
                            Prices <span class="text-danger">*</span>
                        </label>
                        <input type="number" value="" name="price" placeholder="Enter Prices" class="form-control border-0 rounded-pill shadow">
                    </div>
                    <div class="form-group py-2">
                        <label for="price">
                            Prices <span class="text-danger">*</span>
                        </label>
                        <input type="number" value="" name="price" placeholder="Enter Prices" class="form-control border-0 rounded-pill shadow">
                    </div>
                    <div class="form-group py-2">
                        <label for="price">
                            Prices <span class="text-danger">*</span>
                        </label>
                        <input type="number" value="" name="price" placeholder="Enter Prices" class="form-control border-0 rounded-pill shadow">
                    </div>
                    <div class="form-group py-2">
                        <label for="price">
                            Prices <span class="text-danger">*</span>
                        </label>
                        <input type="number" value="" name="price" placeholder="Enter Prices" class="form-control border-0 rounded-pill shadow">
                    </div>
                </div>
            </div>
            <div class="editBtn py-4">
                <button type="button" class="btn bg-theme-primary text-white px-5 rounded-pill py-2" data-toggle="modal" data-target="#upatedPlan">Update</button>
            </div>
        </form>
    </div>
</div>

<?php
include('./subscription-popup.php');
include('../layout/footer.php');
?>