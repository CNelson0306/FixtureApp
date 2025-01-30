<?php
include "connect.php";

header("Content-Type: application/json");

if ($conn2->connect_error) {
    die(json_encode(["error" => "Database connection failed"]));
}

$sql = "SELECT result, score, motm FROM stats LIMIT 19";
$result = $conn2->query($sql);

$match = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $match[] = $row;
    }
}
echo json_encode($match);
$conn2->close();


