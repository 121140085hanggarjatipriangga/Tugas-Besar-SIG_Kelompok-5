<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "tubessig");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['no'])) {
    $no = $_GET['no'];
    // Deleting data based on primary key (no)
    $sql = "DELETE FROM data_rumah_sakit WHERE no='$no'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Sukses Menghapus Data'); window.location.href = 'haladmin.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
