<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tubessig";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT nama, latitude, longitude, detail FROM `data_rumah_sakit`";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "0 results";
}


$conn->close();


header('Content-Type: application/json');
echo json_encode($data);
?>
