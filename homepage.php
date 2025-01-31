<?php session_start();
include "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <title>Fixtures</title>

</head>

<div class="topnav">
    <img src="./img/bont_rfc.JPG" alt="Rugby club logo">
    <p>Pontarddulais RFC</p>
    <div class="logout">
        <a href="index.php">Log Out</a>
    </div>
</div>

<div class="header" id="header">
    <h1>Fixtures</h1>
</div>

<!--Headings of the table-->

<div class="table">
    <div class="title">
        <h2>U13's Fixture List 24/25</h2>
    </div>
</div>

<!--Rows of the table-->
<form action="insert.php" method="post">
    <div class="row-container">
        <div class="row">
            <div class="cell">
                <h6>04/09/24</h6>
            </div>
            <div class="cell">
                <h6>Abercrave</h6>
            </div>
            <div class="cell">
                <h6>Home</h6>
            </div>
            <div class="cell">
                <label for="result">
                    <input class="result" type="text" name="result" id="result1" placeholder="Result:" />
                </label>
            </div>
            <div class="cell">
                <label for="score">
                    <input class="score" type="text" name="score" id="score1" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <input class="motm" type="text" name="motm" id="motm1" placeholder="MOTM:" />
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>
    </div>
</form>

<form action="insert.php" method="post">
    <div class="row-container">
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
                <label for="result">
                    <input class="result" type="text" name="result" id="result2" placeholder="Result:" />
                </label>
            </div>
            <div class="cell">
                <label for="score">
                    <input class="score" type="text" name="score" id="score2" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <input class="motm" type="text" name="motm" id="motm2" placeholder="MOTM:" />
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>
    </div>
</form>

<!--CUP WEEK-->
<div class="row-container">
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
</div>

<form action="insert.php" method="post">
    <div class="row-container">
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
                <label for="result">
                    <input class="result" type="text" name="result" id="result3" placeholder="Result:" />
                </label>
            </div>
            <div class="cell">
                <label for="score">
                    <input class="score" type="text" name="score" id="score3" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <input class="motm" type="text" name="motm" id="motm3" placeholder="MOTM:" />
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>
    </div>
</form>

<form action="insert.php" method="post">
    <div class="row-container">
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
                <label for="result">
                    <input class="result" type="text" name="result" id="result4" placeholder="Result:" />
                </label>
            </div>
            <div class="cell">
                <label for="score">
                    <input class="score" type="text" name="score" id="score4" placeholder="Score:" />
                </label>
            </div>
            <div class="cell">
                <input class="motm" type="text" name="motm" id="motm4" placeholder="MOTM:" />
            </div>
            <div class="add-btn">
                <button type="submit" id="add-btn">Confirm</button>
            </div>
        </div>
    </div>
</form>

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

<form action="insert.php" method="post">
    <div class="row">
        <div class="cell">
            <h6>13/10/24</h6>
        </div>
        <div class="cell">
            <h6>Bonymaen</h6>
        </div>
        <div class="cell">
            <h6>Home</h6>
        </div>
        <div class="cell">
            <label for="result">
                <input class="result" type="text" name="result" id="result5" placeholder="Result:" />
            </label>
        </div>
        <div class="cell">
            <label for="score">
                <input class="score" type="text" name="score" id="score5" placeholder="Score:" />
            </label>
        </div>
        <div class="cell">
            <input class="motm" type="text" name="motm" id="motm5" placeholder="MOTM:" />
        </div>
        <div class="add-btn">
            <button type="submit" id="add-btn">Confirm</button>
        </div>
    </div>
</form>

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

<form action="insert.php" method="post">
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
            <label for="result">
                <input class="result" type="text" name="result" id="result6" placeholder="Result:" />
            </label>
        </div>
        <div class="cell">
            <label for="score">
                <input class="score" type="text" name="score" id="score6" placeholder="Score:" />
            </label>
        </div>
        <div class="cell">
            <input class="motm" type="text" name="motm" id="motm6" placeholder="MOTM:" />
        </div>
        <div class="add-btn">
            <button type="submit" id="add-btn">Confirm</button>
        </div>
    </div>
</form>

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

<form action="insert.php" method="post">
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
            <label for="result">
                <input class="result" type="text" name="result" id="result7" placeholder="Result:" />
            </label>
        </div>
        <div class="cell">
            <label for="score">
                <input class="score" type="text" name="score" id="score7" placeholder="Score:" />
            </label>
        </div>
        <div class="cell">
            <input class="motm" type="text" name="motm" id="motm7" placeholder="MOTM:" />
        </div>
        <div class="add-btn">
            <button type="submit" id="add-btn">Confirm</button>
        </div>
    </div>
</form>

<form action="insert.php" method="post">
    <div class="row">
        <div class="cell">
            <h6>15/11/24</h6>
        </div>
        <div class="cell">
            <h6>Maesteg</h6>
        </div>
        <div class="cell">
            <h6>Home</h6>
        </div>
        <div class="cell">
            <label for="result">
                <input class="result" type="text" name="result" id="result8" placeholder="Result:" />
            </label>
        </div>
        <div class="cell">
            <label for="score">
                <input class="score" type="text" name="score" id="score8" placeholder="Score:" />
            </label>
        </div>
        <div class="cell">
            <input class="motm" type="text" name="motm" id="motm8" placeholder="MOTM:" />
        </div>
        <div class="add-btn">
            <button type="submit" id="add-btn">Confirm</button>
        </div>
    </div>
</form>

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

<form action="insert.php" method="post">
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
            <label for="result">
                <input class="result" type="text" name="result" id="result9" placeholder="Result:" />
            </label>
        </div>
        <div class="cell">
            <label for="score">
                <input class="score" type="text" name="score" id="score9" placeholder="Score:" />
            </label>
        </div>
        <div class="cell">
            <input class="motm" type="text" name="motm" id="motm9" placeholder="MOTM:" />
        </div>
        <div class="add-btn">
            <button type="submit" id="add-btn">Confirm</button>
        </div>
    </div>
</form>

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

<form action="insert.php" method="post">
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
            <label for="result">
                <input class="result" type="text" name="result" id="result10" placeholder="Result:" />
            </label>
        </div>
        <div class="cell">
            <label for="score">
                <input class="score" type="text" name="score" id="score10" placeholder="Score:" />
            </label>
        </div>
        <div class="cell">
            <input class="motm" type="text" name="motm" id="motm10" placeholder="MOTM:" />
        </div>
        <div class="add-btn">
            <button type="submit" id="add-btn">Confirm</button>
        </div>
    </div>
</form>

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

<form action="insert.php" method="post">
    <div class="row">
        <div class="cell">
            <h6>12/01/25</h6>
        </div>
        <div class="cell">
            <h6>Felinfoel</h6>
        </div>
        <div class="cell">
            <h6>Away</h6>
        </div>
        <div class="cell">
            <label for="result">
                <input class="result" type="text" name="result" id="result11" placeholder="Result:" />
            </label>
        </div>
        <div class="cell">
            <label for="score">
                <input class="score" type="text" name="score" id="score11" placeholder="Score:" />
            </label>
        </div>
        <div class="cell">
            <input class="motm" type="text" name="motm" id="motm11" placeholder="MOTM:" />
        </div>
        <div class="add-btn">
            <button type="submit" id="add-btn">Confirm</button>
        </div>
    </div>
</form>

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

<form action="insert.php" method="post">
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
            <label for="result">
                <input class="result" type="text" name="result" id="result12" placeholder="Result:" />
            </label>
        </div>
        <div class="cell">
            <label for="score">
                <input class="score" type="text" name="score" id="score12" placeholder="Score:" />
            </label>
        </div>
        <div class="cell">
            <input class="motm" type="text" name="motm" id="motm12" placeholder="MOTM:" />
        </div>
        <div class="add-btn">
            <button type="submit" id="add-btn">Confirm</button>
        </div>
    </div>
</form>

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

<form action="insert.php" method="post">
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
            <label for="result">
                <input class="result" type="text" name="result" id="result13" placeholder="Result:" />
            </label>
        </div>
        <div class="cell">
            <label for="score">
                <input class="score" type="text" name="score" id="score13" placeholder="Score:" />
            </label>
        </div>
        <div class="cell">
            <input class="motm" type="text" name="motm" id="motm13" placeholder="MOTM:" />
        </div>
        <div class="add-btn">
            <button type="submit" id="add-btn">Confirm</button>
        </div>
    </div>
</form>

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

<form action="insert.php" method="post">
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
            <label for="result">
                <input class="result" type="text" name="result" id="result14" placeholder="Result:" />
            </label>
        </div>
        <div class="cell">
            <label for="score">
                <input class="score" type="text" name="score" id="score14" placeholder="Score:" />
            </label>
        </div>
        <div class="cell">
            <input class="motm" type="text" name="motm" id="motm14" placeholder="MOTM:" />
        </div>
        <div class="add-btn">
            <button type="submit" id="add-btn">Confirm</button>
        </div>
    </div>
</form>

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

<form action="insert.php" method="post">
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
            <label for="result">
                <input class="result" type="text" name="result" id="result15" placeholder="Result:" />
            </label>
        </div>
        <div class="cell">
            <label for="score">
                <input class="score" type="text" name="score" id="score15" placeholder="Score:" />
            </label>
        </div>
        <div class="cell">
            <input class="motm" type="text" name="motm" id="motm15" placeholder="MOTM:" />
        </div>
        <div class="add-btn">
            <button type="submit" id="add-btn">Confirm</button>
        </div>
    </div>
</form>

<form action="insert.php" method="post">
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
            <label for="result">
                <input class="result" type="text" name="result" id="result16" placeholder="Result:" />
            </label>
        </div>
        <div class="cell">
            <label for="score">
                <input class="score" type="text" name="score" id="score16" placeholder="Score:" />
            </label>
        </div>
        <div class="cell">
            <input class="motm" type="text" name="motm" id="motm16" placeholder="MOTM:" />
        </div>
        <div class="add-btn">
            <button type="submit" id="add-btn">Confirm</button>
        </div>
    </div>
</form>

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

<form action="insert.php" method="post">
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
            <label for="result">
                <input class="result" type="text" name="result" id="result17" placeholder="Result:" />
            </label>
        </div>
        <div class="cell">
            <label for="score">
                <input class="score" type="text" name="score" id="score17" placeholder="Score:" />
            </label>
        </div>
        <div class="cell">
            <input class="motm" type="text" name="motm" id="motm17" placeholder="MOTM:" />
        </div>
        <div class="add-btn">
            <button type="submit" id="add-btn">Confirm</button>
        </div>
    </div>
</form>

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

<form action="insert.php" method="post">
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
            <label for="result">
                <input class="result" type="text" name="result" id="result18" placeholder="Result:" />
            </label>
        </div>
        <div class="cell">
            <label for="score">
                <input class="score" type="text" name="score" id="score18" placeholder="Score:" />
            </label>
        </div>
        <div class="cell">
            <input class="motm" type="text" name="motm" id="motm18" placeholder="MOTM:" />
        </div>
        <div class="add-btn">
            <button type="submit" id="add-btn">Confirm</button>
        </div>
    </div>
</form>

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

<form action="insert.php" method="post">
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
            <label for="result">
                <input class="result" type="text" name="result" id="result19" placeholder="Result:" />
            </label>
        </div>
        <div class="cell">
            <label for="score">
                <input class="score" type="text" name="score" id="score19" placeholder="Score:" />
            </label>
        </div>
        <div class="cell">
            <input class="motm" type="text" name="motm" id="motm19" placeholder="MOTM:" />
        </div>
        <div class="add-btn">
            <button type="submit" id="add-btn">Confirm</button>
        </div>
    </div>
</form>
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