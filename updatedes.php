<?php

$conn = mysqli_connect("localhost", "root", "", "tubessig");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['no'])) {
    $no = $_POST['no'];
    $isi = $_POST['isi'];

    $sql = "UPDATE bio SET isi='$isi'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: keldes.php?no=1");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
$conn->close();
?>
