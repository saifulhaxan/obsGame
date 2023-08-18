<?php
include('../layout/topBar.php');
?>

<div class="ediTprofile">
    <div class="row">
        <div class="col-md-12">
            <div class="titleBox py-4">
                <h3 class="mb-0 achivpFont mb-0 font-weight-bold"><a href="#" class="text-dark text-decoration-none">Create Game</a></h3>
            </div>
        </div>
    </div>
    <div class="report-section shadow px-5 py-4 rounded-15 my-4">
        <form action="">
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="form-group py-2">
                        <label for="firstName">
                            Game Title:
                        </label>
                        <input type="text" value="" name="GameTitle" placeholder="Game title here*" class="form-control border-0 rounded-pill shadow">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group py-2">
                        <label for="price">
                            Price:
                        </label>
                        <input type="number" value="" name="price" placeholder="Game Prices* ($)" class="form-control border-0 rounded-pill shadow">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group py-2">
                        <label for="lastName">
                            Date:
                        </label>
                        <input type="date" name="date" class="form-control border-0 rounded-pill shadow">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group py-2">
                        <label for="time">
                            Time:
                        </label>
                        <input type="time" name="time" class="form-control border-0 rounded-pill shadow">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group py-2">
                        <label for="duration">
                            Duration:
                        </label>
                        <input type="number" name="duration" class="form-control border-0 rounded-pill shadow" placeholder="Enter Duration">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group py-2">
                        <label for="seats">
                            Total Seats:
                        </label>
                        <input type="number" name="seats" class="form-control border-0 rounded-pill shadow" placeholder="Enter Total Number of Seats">
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="numberGenrator">
                        <button type="button" class="btn btn-warning" onclick="generateRandomNumbers('firstXnumber', 'firstYnumber')">1 Generator</button>
                        <button type="button" class="btn btn-warning" onclick="generateRandomNumbers('secondXnumber', 'secondYnumber')">2 Generator</button>
                        <button type="button" class="btn btn-warning" onclick="generateRandomNumbers('thirdXnumber', 'thirdYnumber')">3 Generator</button>
                        <button type="button" class="btn btn-warning" onclick="generateRandomNumbers('fourthXnumber', 'fourthYnumber')">4 Generator</button>
                        <button type="button" class="btn btn-danger clearBtn">Clear</button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="gamingBox">
                            <thead>

                            </thead>
                            <tbody>
                                <tr>
                                    <td class="lightYellow" colspan="4">1st</td>
                                    <td class="lightYellow firstXnumber clear">0</td>
                                    <td class="lightYellow firstXnumber clear">0</td>
                                    <td class="lightYellow firstXnumber clear">0</td>
                                    <td class="lightYellow firstXnumber clear">0</td>
                                    <td class="lightYellow firstXnumber clear">0</td>
                                    <td class="lightYellow firstXnumber clear">0</td>
                                    <td class="lightYellow firstXnumber clear">0</td>
                                    <td class="lightYellow firstXnumber clear">0</td>
                                    <td class="lightYellow firstXnumber clear">0</td>
                                    <td class="lightYellow firstXnumber clear">0</td>
                                </tr>
                                <tr>
                                    <td class="lightYellow" rowspan="3">1st</td>
                                    <td class="orangeColor" colspan="3">2nd</td>
                                    <td class="orangeColor secondXnumber clear">0</td>
                                    <td class="orangeColor secondXnumber clear">0</td>
                                    <td class="orangeColor secondXnumber clear">0</td>
                                    <td class="orangeColor secondXnumber clear">0</td>
                                    <td class="orangeColor secondXnumber clear">0</td>
                                    <td class="orangeColor secondXnumber clear">0</td>
                                    <td class="orangeColor secondXnumber clear">0</td>
                                    <td class="orangeColor secondXnumber clear">0</td>
                                    <td class="orangeColor secondXnumber clear">0</td>
                                    <td class="orangeColor secondXnumber clear">0</td>
                                </tr>
                                <tr>
                                    <td rowspan="2" class="orangeColor">2nd</td>
                                    <td colspan="2" class="lightBlue">3rd</td>
                                    <td class="lightBlue thirdXnumber clear">0</td>
                                    <td class="lightBlue thirdXnumber clear">0</td>
                                    <td class="lightBlue thirdXnumber clear">0</td>
                                    <td class="lightBlue thirdXnumber clear">0</td>
                                    <td class="lightBlue thirdXnumber clear">0</td>
                                    <td class="lightBlue thirdXnumber clear">0</td>
                                    <td class="lightBlue thirdXnumber clear">0</td>
                                    <td class="lightBlue thirdXnumber clear">0</td>
                                    <td class="lightBlue thirdXnumber clear">0</td>
                                    <td class="lightBlue thirdXnumber clear">0</td>
                                </tr>
                                <tr>
                                    <td class="lightBlue">3rd</td>
                                    <td class="blueColor">4th</td>
                                    <td class="blueColor fourthXnumber clear">0</td>
                                    <td class="blueColor fourthXnumber clear">0</td>
                                    <td class="blueColor fourthXnumber clear">0</td>
                                    <td class="blueColor fourthXnumber clear">0</td>
                                    <td class="blueColor fourthXnumber clear">0</td>
                                    <td class="blueColor fourthXnumber clear">0</td>
                                    <td class="blueColor fourthXnumber clear">0</td>
                                    <td class="blueColor fourthXnumber clear">0</td>
                                    <td class="blueColor fourthXnumber clear">0</td>
                                    <td class="blueColor fourthXnumber clear">0</td>
                                </tr>
                                <tr>
                                    <td class="lightYellow firstYnumber clear">0</td>
                                    <td class="orangeColor secondYnumber clear">0</td>
                                    <td class="lightBlue thirdYnumber clear">0</td>
                                    <td class="blueColor fourthYnumber clear">0</td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="lightYellow firstYnumber clear">0</td>
                                    <td class="orangeColor secondYnumber clear">0</td>
                                    <td class="lightBlue thirdYnumber clear">0</td>
                                    <td class="blueColor fourthYnumber clear">0</td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="lightYellow firstYnumber clear">0</td>
                                    <td class="orangeColor secondYnumber clear">0</td>
                                    <td class="lightBlue thirdYnumber clear">0</td>
                                    <td class="blueColor fourthYnumber clear">0</td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="lightYellow firstYnumber clear">0</td>
                                    <td class="orangeColor secondYnumber clear">0</td>
                                    <td class="lightBlue thirdYnumber clear">0</td>
                                    <td class="blueColor fourthYnumber clear">0</td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="lightYellow firstYnumber clear">0</td>
                                    <td class="orangeColor secondYnumber clear">0</td>
                                    <td class="lightBlue thirdYnumber clear">0</td>
                                    <td class="blueColor fourthYnumber clear">0</td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="lightYellow firstYnumber clear">0</td>
                                    <td class="orangeColor secondYnumber clear">0</td>
                                    <td class="lightBlue thirdYnumber clear">0</td>
                                    <td class="blueColor fourthYnumber clear">0</td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="lightYellow firstYnumber clear">0</td>
                                    <td class="orangeColor secondYnumber clear">0</td>
                                    <td class="lightBlue thirdYnumber clear">0</td>
                                    <td class="blueColor fourthYnumber clear">0</td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="lightYellow firstYnumber clear">0</td>
                                    <td class="orangeColor secondYnumber clear">0</td>
                                    <td class="lightBlue thirdYnumber clear">0</td>
                                    <td class="blueColor fourthYnumber clear">0</td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="lightYellow firstYnumber clear">0</td>
                                    <td class="orangeColor secondYnumber clear">0</td>
                                    <td class="lightBlue thirdYnumber clear">0</td>
                                    <td class="blueColor fourthYnumber clear">0</td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="lightYellow firstYnumber clear">0</td>
                                    <td class="orangeColor secondYnumber clear">0</td>
                                    <td class="lightBlue thirdYnumber clear">0</td>
                                    <td class="blueColor fourthYnumber clear">0</td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="gameBox">
                                            <input type="checkbox" value="" class="checkboxSquare">
                                            <div class="checkMark"></div>
                                        </label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="editBtn py-4">
                <button type="button" class="btn bg-theme-primary text-white px-5 rounded-pill py-2" data-toggle="modal" data-target="#sessionadd">Publish</button>
            </div>
        </form>
    </div>
</div>

<?php
include('./session-popup.php');
include('../layout/footer.php');
?>