<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = 'login';
$db2 = 'result_db';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    echo "Failed to connect to DB" . $conn->connect_error;
}

$conn2 = new mysqli($host, $user, $pass, $db2);
if ($conn2->connect_error) {
    echo "Failed to connect to DB" . $conn2->connect_error;
}