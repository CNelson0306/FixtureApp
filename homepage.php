<?php
session_start();
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <title>Fixtures</title>

</head>

<body>
    <div class="topnav">
        <img src="../public/img/bont_rfc.JPG" alt="Rugby club logo">
        <p>Pontarddulais RFC</p>
        <div class="logout">
            <a href="logout.php">Log Out</a>
        </div>
    </div>

    <div class="header" id="header">
        <h1>Fixtures</h1>
    </div>


    <!--Headings of the table-->
    <div class="table">
        <div class="title">
            <h2>Bont U13's Fixture List 24/25</h2>
        </div>


        <!--Rows of the table-->

        <div class="row">
            <div class="cell">
                <h6>01/09/24</h6>
            </div>
            <div class="cell">
                <h6>Abercrave</h6>
            </div>
            <div class="cell">
                <h6>Home</h6>
            </div>
            <div class="cell">
                <label for="result"></label>
                <select name="result" id="result">
                    <option value="result">Result</option>
                    <option value="win">Win</option>
                    <option value="loss">Loss</option>
                    <option value="win">OFF</option>
                </select>
            </div>
            <div class="cell">
                <label for="score">
                    <input type="text" id="score" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <label for="motm"></label>
                <select name="motm" id="motm1">

                </select>
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>


        </div>
        <div class="row">
            <div class="cell">
                <h6>08/09/24</h6>
            </div>
            <div class="cell">
                <h6>Mumbles</h6>
            </div>
            <div class="cell">
                <h6>Away</h6>
            </div>
            <div class="cell">
                <label for="result"></label>
                <select name="result" id="result">
                    <option value="result">Result</option>
                    <option value="win">Win</option>
                    <option value="loss">Loss</option>
                    <option value="win">OFF</option>
                </select>
            </div>
            <div class="cell">
                <label for="score">
                    <input type="text" id="score" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <label for="motm"></label>
                <select name="motm" id="motm2">

                </select>
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>


        <!--CUP WEEK-->

        <div class="row">
            <div class="cell-cup">
                <h6>15/09/24</h6>
            </div>
            <div class="cell-cup">
                <h6>Cup</h6>
            </div>
            <div class="cell-cup">
                <h6>Week 1</h6>
            </div>
            <div class="cell-cup">
                <h6>Details</h6>
            </div>
            <div class="cell-cup">
                <h6>To Be</h6>
            </div>
            <div class="cell-cup">
                <h6>Confirmed</h6>
            </div>
        </div>


        <div class="row">
            <div class="cell">
                <h6>22/09/24</h6>
            </div>
            <div class="cell">
                <h6>Vardre</h6>
            </div>
            <div class="cell">
                <h6>Home</h6>
            </div>
            <div class="cell">
                <label for="result"></label>
                <select name="result" id="result">
                    <option value="result">Result</option>
                    <option value="win">Win</option>
                    <option value="loss">Loss</option>
                    <option value="win">OFF</option>
                </select>
            </div>
            <div class="cell">
                <label for="score">
                    <input type="text" id="score" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <label for="motm"></label>
                <select name="motm" id="motm3">

                </select>
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>


        <div class="row">
            <div class="cell">
                <h6>29/09/24</h6>
            </div>
            <div class="cell">
                <h6>Ystrad</h6>
            </div>
            <div class="cell">
                <h6>Away</h6>
            </div>
            <div class="cell">
                <label for="result"></label>
                <select name="result" id="result">
                    <option value="result">Result</option>
                    <option value="win">Win</option>
                    <option value="loss">Loss</option>
                    <option value="win">OFF</option>
                </select>
            </div>
            <div class="cell">
                <label for="score">
                    <input type="text" id="score" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <label for="motm"></label>
                <select name="motm" id="motm4">

                </select>
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>


        <!--  CUP WEEK  -->

        <div class="row">
            <div class="cell-cup">
                <h6>06/10/24</h6>
            </div>
            <div class="cell-cup">
                <h6>Cup</h6>
            </div>
            <div class="cell-cup">
                <h6>Week 1</h6>
            </div>
            <div class="cell-cup">
                <h6>Details</h6>
            </div>
            <div class="cell-cup">
                <h6>To Be</h6>
            </div>
            <div class="cell-cup">
                <h6>Confirmed</h6>
            </div>
        </div>


        <div class="row">
            <div class="cell">
                <h6>13/10/24</h6>
            </div>
            <div class="cell">
                <h6>Birchgrove</h6>
            </div>
            <div class="cell">
                <h6>Home</h6>
            </div>
            <div class="cell">
                <label for="result"></label>
                <select name="result" id="result">
                    <option value="result">Result</option>
                    <option value="win">Win</option>
                    <option value="loss">Loss</option>
                    <option value="win">OFF</option>
                </select>
            </div>
            <div class="cell">
                <label for="score">
                    <input type="text" id="score" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <label for="motm"></label>
                <select name="motm" id="motm5">

                </select>
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>


        <!--  CUP WEEK  -->

        <div class="row">
            <div class="cell-cup">
                <h6>20/10/24</h6>
            </div>
            <div class="cell-cup">
                <h6>Cup</h6>
            </div>
            <div class="cell-cup">
                <h6>Week 1</h6>
            </div>
            <div class="cell-cup">
                <h6>Details</h6>
            </div>
            <div class="cell-cup">
                <h6>To Be</h6>
            </div>
            <div class="cell-cup">
                <h6>Confirmed</h6>
            </div>
        </div>


        <div class="row">
            <div class="cell">
                <h6>27/10/24</h6>
            </div>
            <div class="cell">
                <h6>Gorseinon</h6>
            </div>
            <div class="cell">
                <h6>Away</h6>
            </div>
            <div class="cell">
                <label for="result"></label>
                <select name="result" id="result">
                    <option value="result">Result</option>
                    <option value="win">Win</option>
                    <option value="loss">Loss</option>
                    <option value="win">OFF</option>
                </select>
            </div>
            <div class="cell">
                <label for="score">
                    <input type="text" id="score" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <label for="motm"></label>
                <select name="motm" id="motm6">

                </select>
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>


        <!--  CUP WEEK  -->

        <div class="row">
            <div class="cell-cup">
                <h6>03/11/24</h6>
            </div>
            <div class="cell-cup">
                <h6>Cup</h6>
            </div>
            <div class="cell-cup">
                <h6>Week 1</h6>
            </div>
            <div class="cell-cup">
                <h6>Details</h6>
            </div>
            <div class="cell-cup">
                <h6>To Be</h6>
            </div>
            <div class="cell-cup">
                <h6>Confirmed</h6>
            </div>
        </div>


        <div class="row">
            <div class="cell">
                <h6>10/11/24</h6>
            </div>
            <div class="cell">
                <h6>Dunvant</h6>
            </div>
            <div class="cell">
                <h6>Home</h6>
            </div>
            <div class="cell">
                <label for="result"></label>
                <select name="result" id="result">
                    <option value="result">Result</option>
                    <option value="win">Win</option>
                    <option value="loss">Loss</option>
                    <option value="win">OFF</option>
                </select>
            </div>
            <div class="cell">
                <label for="score">
                    <input type="text" id="score" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <label for="motm"></label>
                <select name="motm" id="motm7">

                </select>
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>


        <!--  CUP WEEK  -->

        <div class="row">
            <div class="cell-cup">
                <h6>17/11/24</h6>
            </div>
            <div class="cell-cup">
                <h6>Cup</h6>
            </div>
            <div class="cell-cup">
                <h6>Week 1</h6>
            </div>
            <div class="cell-cup">
                <h6>Details</h6>
            </div>
            <div class="cell-cup">
                <h6>To Be</h6>
            </div>
            <div class="cell-cup">
                <h6>Confirmed</h6>
            </div>
        </div>


        <div class="row">
            <div class="cell">
                <h6>24/11/24</h6>
            </div>
            <div class="cell">
                <h6>Loughor</h6>
            </div>
            <div class="cell">
                <h6>Away</h6>
            </div>
            <div class="cell">
                <label for="result"></label>
                <select name="result" id="result">
                    <option value="result">Result</option>
                    <option value="win">Win</option>
                    <option value="loss">Loss</option>
                    <option value="win">OFF</option>
                </select>
            </div>
            <div class="cell">
                <label for="score">
                    <input type="text" id="score" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <label for="motm"></label>
                <select name="motm" id="motm8">

                </select>
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>


        <div class="row">
            <div class="cell">
                <h6>01/12/24</h6>
            </div>
            <div class="cell">
                <h6>Trebanos</h6>
            </div>
            <div class="cell">
                <h6>Home</h6>
            </div>
            <div class="cell">
                <label for="result"></label>
                <select name="result" id="result">
                    <option value="result">Result</option>
                    <option value="win">Win</option>
                    <option value="loss">Loss</option>
                    <option value="win">OFF</option>
                </select>
            </div>
            <div class="cell">
                <label for="score">
                    <input type="text" id="score" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <label for="motm"></label>
                <select name="motm" id="motm9">

                </select>
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>


        <!--  CUP WEEK  -->

        <div class="row">
            <div class="cell-cup">
                <h6>08/12/24</h6>
            </div>
            <div class="cell-cup">
                <h6>Cup</h6>
            </div>
            <div class="cell-cup">
                <h6>Week 1</h6>
            </div>
            <div class="cell-cup">
                <h6>Details</h6>
            </div>
            <div class="cell-cup">
                <h6>To Be</h6>
            </div>
            <div class="cell-cup">
                <h6>Confirmed</h6>
            </div>
        </div>


        <div class="row">
            <div class="cell">
                <h6>15/12/24</h6>
            </div>
            <div class="cell">
                <h6>Morriston</h6>
            </div>
            <div class="cell">
                <h6>Home</h6>
            </div>
            <div class="cell">
                <label for="result"></label>
                <select name="result" id="result">
                    <option value="result">Result</option>
                    <option value="win">Win</option>
                    <option value="loss">Loss</option>
                    <option value="win">OFF</option>
                </select>
            </div>
            <div class="cell">
                <label for="score">
                    <input type="text" id="score" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <label for="motm"></label>
                <select name="motm" id="motm10">

                </select>
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>


        <!--  CHRISTMAS BREAK  -->

        <div class="row">
            <div class="cell-xmas">
                <h6>22/12/24</h6>
            </div>
            <div class="cell-xmas">
                <h6></h6>
            </div>
            <div class="cell-xmas">
                <h6>Christmas</h6>
            </div>
            <div class="cell-xmas">
                <h6></h6>
            </div>
            <div class="cell-xmas">
                <h6>Break</h6>
            </div>
            <div class="cell-xmas">
                <h6></h6>
            </div>
        </div>


        <div class="row">
            <div class="cell">
                <h6>05/01/25</h6>
            </div>
            <div class="cell">
                <h6>Abercrave</h6>
            </div>
            <div class="cell">
                <h6>Away</h6>
            </div>
            <div class="cell">
                <label for="result"></label>
                <select name="result" id="result">
                    <option value="result">Result</option>
                    <option value="win">Win</option>
                    <option value="loss">Loss</option>
                    <option value="win">OFF</option>
                </select>
            </div>
            <div class="cell">
                <label for="score">
                    <input type="text" id="score" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <label for="motm"></label>
                <select name="motm" id="motm11">

                </select>
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>


        <!--  CUP GAME  -->

        <div class="row">
            <div class="cell-cup">
                <h6>12/01/25</h6>
            </div>
            <div class="cell-cup">
                <h6>Cup</h6>
            </div>
            <div class="cell-cup">
                <h6>Week 1</h6>
            </div>
            <div class="cell-cup">
                <h6>Details</h6>
            </div>
            <div class="cell-cup">
                <h6>To Be</h6>
            </div>
            <div class="cell-cup">
                <h6>Confirmed</h6>
            </div>
        </div>


        <div class="row">
            <div class="cell">
                <h6>19/01/25</h6>
            </div>
            <div class="cell">
                <h6>Mumbles</h6>
            </div>
            <div class="cell">
                <h6>Home</h6>
            </div>
            <div class="cell">
                <label for="result"></label>
                <select name="result" id="result">
                    <option value="result">Result</option>
                    <option value="win">Win</option>
                    <option value="loss">Loss</option>
                    <option value="win">OFF</option>
                </select>
            </div>
            <div class="cell">
                <label for="score">
                    <input type="text" id="score" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <label for="motm"></label>
                <select name="motm" id="motm12">

                </select>
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>


        <!--  CUP GAME  -->

        <div class="row">
            <div class="cell-cup">
                <h6>26/01/25</h6>
            </div>
            <div class="cell-cup">
                <h6>Cup</h6>
            </div>
            <div class="cell-cup">
                <h6>Week 1</h6>
            </div>
            <div class="cell-cup">
                <h6>Details</h6>
            </div>
            <div class="cell-cup">
                <h6>To Be</h6>
            </div>
            <div class="cell-cup">
                <h6>Confirmed</h6>
            </div>
        </div>


        <div class="row">
            <div class="cell">
                <h6>02/02/25</h6>
            </div>
            <div class="cell">
                <h6>Vardre</h6>
            </div>
            <div class="cell">
                <h6>Away</h6>
            </div>
            <div class="cell">
                <label for="result"></label>
                <select name="result" id="result">
                    <option value="result">Result</option>
                    <option value="win">Win</option>
                    <option value="loss">Loss</option>
                    <option value="win">OFF</option>
                </select>
            </div>
            <div class="cell">
                <label for="score">
                    <input type="text" id="score" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <label for="motm"></label>
                <select name="motm" id="motm13">

                </select>
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>


        <!--  CUP GAME  -->

        <div class="row">
            <div class="cell-cup">
                <h6>09/02/25</h6>
            </div>
            <div class="cell-cup">
                <h6>Cup</h6>
            </div>
            <div class="cell-cup">
                <h6>Week 1</h6>
            </div>
            <div class="cell-cup">
                <h6>Details</h6>
            </div>
            <div class="cell-cup">
                <h6>To Be</h6>
            </div>
            <div class="cell-cup">
                <h6>Confirmed</h6>
            </div>
        </div>


        <div class="row">
            <div class="cell">
                <h6>16/02/25</h6>
            </div>
            <div class="cell">
                <h6>Ystrad</h6>
            </div>
            <div class="cell">
                <h6>Home</h6>
            </div>
            <div class="cell">
                <label for="result"></label>
                <select name="result" id="result">
                    <option value="result">Result</option>
                    <option value="win">Win</option>
                    <option value="loss">Loss</option>
                    <option value="win">OFF</option>
                </select>
            </div>
            <div class="cell">
                <label for="score">
                    <input type="text" id="score" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <label for="motm"></label>
                <select name="motm" id="motm14">

                </select>
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>


        <!--  CUP GAME  -->

        <div class="row">
            <div class="cell-cup">
                <h6>23/02/25</h6>
            </div>
            <div class="cell-cup">
                <h6>Cup</h6>
            </div>
            <div class="cell-cup">
                <h6>Week 1</h6>
            </div>
            <div class="cell-cup">
                <h6>Details</h6>
            </div>
            <div class="cell-cup">
                <h6>To Be</h6>
            </div>
            <div class="cell-cup">
                <h6>Confirmed</h6>
            </div>
        </div>


        <div class="row">
            <div class="cell">
                <h6>02/03/25</h6>
            </div>
            <div class="cell">
                <h6>Birchgrove</h6>
            </div>
            <div class="cell">
                <h6>Away</h6>
            </div>
            <div class="cell">
                <label for="result"></label>
                <select name="result" id="result">
                    <option value="result">Result</option>
                    <option value="win">Win</option>
                    <option value="loss">Loss</option>
                    <option value="win">OFF</option>
                </select>
            </div>
            <div class="cell">
                <label for="score">
                    <input type="text" id="score" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <label for="motm"></label>
                <select name="motm" id="motm15">

                </select>
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>


        <div class="row">
            <div class="cell">
                <h6>09/03/25</h6>
            </div>
            <div class="cell">
                <h6>Gorseinon</h6>
            </div>
            <div class="cell">
                <h6>Home</h6>
            </div>
            <div class="cell">
                <label for="result"></label>
                <select name="result" id="result">
                    <option value="result">Result</option>
                    <option value="win">Win</option>
                    <option value="loss">Loss</option>
                    <option value="win">OFF</option>
                </select>
            </div>
            <div class="cell">
                <label for="score">
                    <input type="text" id="score" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <label for="motm"></label>
                <select name="motm" id="motm16">

                </select>
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>


        <!-- CUP SEMI FINALS -->

        <div class="row">
            <div class="cell-final">
                <h6>16/03/25</h6>
            </div>
            <div class="cell-final">
                <h6>Cup</h6>
            </div>
            <div class="cell-final">
                <h6>SEMI</h6>
            </div>
            <div class="cell-final">
                <h6>FINALS</h6>
            </div>
            <div class="cell-final">
                <h6>DETAILS</h6>
            </div>
            <div class="cell-final">
                <h6>TBC</h6>
            </div>
        </div>


        <div class="row">
            <div class="cell">
                <h6>23/03/25</h6>
            </div>
            <div class="cell">
                <h6>Dunvant</h6>
            </div>
            <div class="cell">
                <h6>Away</h6>
            </div>
            <div class="cell">
                <label for="result"></label>
                <select name="result" id="result">
                    <option value="result">Result</option>
                    <option value="win">Win</option>
                    <option value="loss">Loss</option>
                    <option value="win">OFF</option>
                </select>
            </div>
            <div class="cell">
                <label for="score">
                    <input type="text" id="score" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <label for="motm"></label>
                <select name="motm" id="motm17">

                </select>
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>


        <!--  MOTHERS DAY  -->

        <div class="row">
            <div class="cell-mday">
                <h6>16/03/25</h6>
            </div>
            <div class="cell-mday">
                <h6></h6>
            </div>
            <div class="cell-mday">
                <h6>Mothers</h6>
            </div>
            <div class="cell-mday">
                <h6></h6>
            </div>
            <div class="cell-mday">
                <h6>Day</h6>
            </div>
            <div class="cell-mday">
                <h6></h6>
            </div>
        </div>


        <div class="row">
            <div class="cell">
                <h6>06/04/25</h6>
            </div>
            <div class="cell">
                <h6>Loughor</h6>
            </div>
            <div class="cell">
                <h6>Home</h6>
            </div>
            <div class="cell">
                <label for="result"></label>
                <select name="result" id="result">
                    <option value="result">Result</option>
                    <option value="win">Win</option>
                    <option value="loss">Loss</option>
                    <option value="win">OFF</option>
                </select>
            </div>
            <div class="cell">
                <label for="score">
                    <input type="text" id="score" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <label for="motm"></label>
                <select name="motm" id="motm18">

                </select>
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>


        <!--  CUP FINALS  -->

        <div class="row">
            <div class="cell-final">
                <h6>13/04/25</h6>
            </div>
            <div class="cell-final">
                <h6>District</h6>
            </div>
            <div class="cell-final">
                <h6>Cup</h6>
            </div>
            <div class="cell-final">
                <h6>Finals</h6>
            </div>
            <div class="cell-final">
                <h6>Details</h6>
            </div>
            <div class="cell-final">
                <h6>TBC</h6>
            </div>
        </div>


        <!--  EASTER  -->

        <div class="row">
            <div class="cell-easter">
                <h6>20/04/25</h6>
            </div>
            <div class="cell-easter">
                <h6></h6>
            </div>
            <div class="cell-easter">
                <h6></h6>
            </div>
            <div class="cell-easter">
                <h6>Easter</h6>
            </div>
            <div class="cell-easter">
                <h6></h6>
            </div>
            <div class="cell-easter">
                <h6></h6>
            </div>
        </div>


        <div class="row">
            <div class="cell">
                <h6>27/04/25</h6>
            </div>
            <div class="cell">
                <h6>Trebanos</h6>
            </div>
            <div class="cell">
                <h6>Away</h6>
            </div>
            <div class="cell">
                <label for="result"></label>
                <select name="result" id="result">
                    <option value="result">Result</option>
                    <option value="win">Win</option>
                    <option value="loss">Loss</option>
                    <option value="win">OFF</option>
                </select>
            </div>
            <div class="cell">
                <label for="score">
                    <input type="text" id="score" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <label for="motm"></label>
                <select name="motm" id="motm19">

                </select>
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>

    </div>
    </div>
    </div>
    <br>
    <div class="footer">
        <section id='footer'>
            <p>&copy; 2025 Carl Nelson. <br />
                All Rights Reserved.
            </p>
        </section>
    </div>

    <script src="./js/index.js"></script>

</body>

</html>