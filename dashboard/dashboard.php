<?php
include('../layout/topBar.php');
?>
<div class="row">
    <div class="col-md-12">
        <div class="titleBox border-bottom py-4">
            <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Dashboard</h3>
        </div>
    </div>
    <div class="col-md-4 my-3">
        <div class="d-flex justify-content-between shadow align-items-end p-3 flex-wrap h-100">
            <div class="totalUser">
                <p class="mb-2">Total Users</p>
                <p class="mb-0 font-weight-bold">100</p>
            </div>
            <div class="userStats">
                <img src="../images/trend.png" class="mw-100" alt="Total Users">
            </div>
        </div>
    </div>
    <div class="col-md-4 my-3">
        <div class="d-flex justify-content-between shadow align-items-end p-3 flex-wrap h-100">
            <div class="totalUser">
                <p class="mb-2">Total Businesses</p>
                <p class="mb-0 font-weight-bold">100</p>
            </div>
            <div class="userStats">
                <img src="../images/data-analysis.png" class="mw-100" alt="Total Businesses">
            </div>
        </div>
    </div>
    <div class="col-md-4 my-3">
        <div class="d-flex justify-content-between shadow align-items-end p-3 flex-wrap h-100">
            <div class="totalUser">
                <p class="mb-2">Total Badges</p>
                <p class="mb-0 font-weight-bold">100</p>
            </div>
            <div class="userStats">
                <img src="../images/graphBox.png" class="mw-100" alt="Total Badges">
            </div>
        </div>
    </div>
</div>

<!-- No. Students Registered -->
<div class="badge-section shadow rounded-15 my-4 p-3">
    <div class="row position-relative my-4">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="d-flex align-items-center flex-wrap justify-content-between">
                    <div class="graphTitle flex-shrink-0">
                        <h6 class="mb-0 achivpFont">Amount Analytics</h6>
                    </div>
                    <div class="grapSelect d-flex gap-15 flex-shrink-0 flex-wrap flex-lg-nowrap">
                        <select class="form-select form-select-sm pr-5 py-2" aria-label=".form-select-sm example">
                            <option selected>Type</option>
                            <option value="1">January</option>
                            <option value="2">Febuary</option>
                            <option value="3">March</option>
                        </select>
                        <select class="form-select form-select-sm pr-5 py-2" aria-label=".form-select-sm example">
                            <option selected>Month</option>
                            <option value="1">January</option>
                            <option value="2">Febuary</option>
                            <option value="3">March</option>
                        </select>
                    </div>
                </div>
                <div class="graphBox py-4 position-relative">
                    <div class="col rotateText">
                        <h6 class="mb-0 achivpFont">Amount</h6>
                    </div>
                    <!--<figure class="mb-0">-->
                    <!--    <img src="../images/graph.png" class="mw-100" alt="No. Students Registered">-->
                    <!--</figure>-->
                    <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
                </div>
            </div>
            <div class="col-md-12 text-center my-4">
                <p class="py-3 mb-0">Year</p>
            </div>
        </div>
        
 
    </div>
</div>

<!-- Recent Subscription -->

<div class="notification-section shadow rounded-15 p-3 pt-5 my-4">
    <div class="row justify-content-between">
        <div class="col-md-12 mb-3">
            <h3 class="achivpFont">Recent Members</h3>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-md-6">
            <div class="d-flex align-items-center flex-wrap flex-md-nowrap selectBox gap-15 my-4">
                <div class="title flex-shrink-0">
                    <p class="achivpFont mb-0">Filter by Game Package:</p>
                </div>
                <div class="filterField flex-grow-1">
                    <select class="form-select form-select-sm pr-5 py-2 w-auto" aria-label=".form-select-sm example">
                        <option>Select Status</option>
                        <option value="active">Monthly</option>
                        <option value="inactive">Yearly</option>
                    </select>
                </div>
            </div>
            <div class="d-flex align-items-center flex-wrap mb-3">
                <div class="dateBox d-flex align-items-center gap-15 flex-wrap flex-md-nowrap">
                    <p class="mb-0 achivpFont flex-shrink-0">Sort By Date:</p>
                    <div class="flex-grow-1">
                        <div class="form-group">
                            <label class="mb-0">From</label>
                            <div class="input-group date" id="datetimepicker7" data-target-input="nearest">
                                <input type="date" class="form-control datetimepicker-input" data-target="#datetimepicker7">
                            </div>
                        </div>
                    </div>
                    -
                    <div class="flex-grow-1">
                        <div class="form-group">
                            <label for="">To</label>
                            <div class="input-group date" id="datetimepicker8" data-target-input="nearest">
                                <input type="date" class="form-control datetimepicker-input" data-target="#datetimepicker8">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-flex align-items-center flex-wrap selectBox gap-15 my-4 justify-content-md-end">
                <div class="title flex-shrink-0">
                    <p class="achivpFont mb-0">Filter By Status:</p>
                </div>
                <div class="filterField">
                    <select class="form-select form-select-sm pr-5 py-2 w-auto" aria-label=".form-select-sm example">
                        <option>Select Status</option>
                        <option value="active">Ongoing</option>
                        <option value="inactive">Completed</option>
                    </select>
                </div>
            </div>
            <div class="userSeach input-group w-auto">
                <input class="form-control w-50 py-2 border-right-0 border" type="search" placeholder="Search" id="example-search-input">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary border-left-0 border bg-white" type="button">
                        <i class="bi bi-search"></i>
                    </button>
                </span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 pt-5 table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th class="table-site-headings">S.No.</th>
                        <th class="table-site-headings">Full Name</th>
                        <th class="table-site-headings">Email Address</th>
                        <th class="table-site-headings">Date</th>
                        <th class="table-site-headings">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Mark Carson</td>
                        <td>abc@xyz.com</td>
                        <td>02.02.2021</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Mark Carson</td>
                        <td>abc@xyz.com</td>
                        <td>02.02.2021</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Mark Carson</td>
                        <td>abc@xyz.com</td>
                        <td>02.02.2021</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>Mark Carson</td>
                        <td>abc@xyz.com</td>
                        <td>02.02.2021</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>Mark Carson</td>
                        <td>abc@xyz.com</td>
                        <td>02.02.2021</td>
                        <td>Active</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between flex-wrap align-items-center">
            <p class="mb-0">Showing 10 of 50 Entries</p>
            <div class="viewAll d-flex justify-content-end flex-wrap py-3">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<?php
include('../layout/footer.php');
?>