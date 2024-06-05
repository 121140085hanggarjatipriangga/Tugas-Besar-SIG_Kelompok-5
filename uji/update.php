<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "tubessig");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['no'])) {
    $no = $_POST['no'];
    $jenis = $_POST['jenis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $kabko = $_POST['kabko'];
    $detail = $_POST['detail'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Update data based on primary key (no)
    $sql = "UPDATE data_rumah_sakit SET jenis='$jenis', nama='$nama', kelas='$kelas', kabko='$kabko', detail='$detail', latitude='$latitude', longitude='$longitude' WHERE no='$no'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
$conn->close();
?>
