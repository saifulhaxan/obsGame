<?php
include('../layout/topBar.php');
?>

<div class="ediTprofile">
    <div class="row">
        <div class="col-md-12">
            <div class="titleBox py-4">
                <h3 class="mb-0 achivpFont mb-0 font-weight-bold"><a href="#" class="text-dark text-decoration-none">Online Session - Details</a></h3>
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
                        </label>
                        <textarea placeholder="Description" rows="5" class="form-control border-0 rounded-15 shadow"></textarea>
                    </div>
                    <div class="form-group py-2">
                        <input type="number" value="" name="price" placeholder="Session Prices* ($)" class="form-control border-0 rounded-pill shadow">
                    </div>
                    <div class="form-group py-2">
                        <label for="lastName">
                            Date:
                        </label>
                        <input type="date" name="date" class="form-control border-0 rounded-pill shadow">
                    </div>
                    <div class="form-group py-2">
                        <label for="time">
                            Time:
                        </label>
                        <input type="time" name="time" class="form-control border-0 rounded-pill shadow">
                    </div>
                    <div class="form-group py-2">
                        <label for="duration">
                            Duration:
                        </label>
                        <input type="number" name="duration" class="form-control border-0 rounded-pill shadow" placeholder="Enter Duration">
                    </div>
                    <div class="form-group py-2">
                        <label for="seats">
                            Total Seats:
                        </label>
                        <input type="number" name="seats" class="form-control border-0 rounded-pill shadow" placeholder="Enter Total Number of Seats">
                    </div>
                    <div class="form-group py-2">
                        <label for="trainer">
                            Assign Trainer:
                        </label>
                        <input type="number" name="trainer" class="form-control border-0 rounded-pill shadow" placeholder="Search & Assign Trainer">
                    </div>
                </div>
            </div>
            <div class="editBtn py-4">
                <button type="button" class="btn bg-theme-primary text-white px-5 rounded-pill py-2" data-toggle="modal" data-target="#sessionEdit">Publish</button>
            </div>
        </form>
    </div>
</div>

<?php 
include('./session-popup.php');
include('../layout/footer.php'); 
?>