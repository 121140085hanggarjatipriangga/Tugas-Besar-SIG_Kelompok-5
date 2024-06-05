<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "tubessig");

// Check koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Ambil data dari formulir
$jenis = $_POST['jenis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$kabko = $_POST['kabko'];
$detail = $_POST['detail'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// Query untuk menyimpan data ke dalam database
$query = "INSERT INTO data_rumah_sakit (jenis, nama, kelas, kabko, detail, latitude, longitude) 
          VALUES ('$jenis', '$nama', '$kelas', '$kabko', '$detail', '$latitude', '$longitude')";

// Eksekusi query
if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil ditambahkan.";
    header("Location: kelolainfo.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
