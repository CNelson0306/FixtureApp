<?php
include "connect.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("Direct access not allowed");
}

$result = $_POST['result'];
$score = $_POST['score'];
$motm = $_POST['motm'];


$sql = "INSERT INTO stats (result, score, motm) VALUES (?, ?, ?)";

$stmt = $conn2->prepare($sql);

if (!$stmt) {
    die("SQL Preparation failed" . $conn2->error);
}

$stmt->bind_param("sss", $result, $score, $motm);

if ($stmt->execute()) {
    echo "<script>console.log('Game info inserted')</script>";
    header("Location: homepage.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn2->close();
