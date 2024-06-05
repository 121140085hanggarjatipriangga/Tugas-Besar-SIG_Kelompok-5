<?php
// Koneksi ke database
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "tubessig";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data pencarian dari query string
$query = $_GET['query'];

// Lakukan pencarian di tabel data_rumah_sakit
$sql = "SELECT * FROM data_rumah_sakit WHERE nama LIKE '%$query%'"; 
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Keluarkan hasil pencarian dalam format JSON
echo json_encode($data);

$conn->close();
?>
