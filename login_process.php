<?php
$koneksi = mysqli_connect("localhost", "root", "", "tubessig");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) == 1) {
    echo "Login berhasil!";
    header("Location: haladmin.php");
} else {
    echo "<p> Username atau password salah! </p>";
    header("Location: login.php");
}

// Tutup koneksi
mysqli_close($koneksi);
?>
