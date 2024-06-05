<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "tubessig");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['no'])) {
    $no = $_GET['no'];
    // Fetching data based on primary key (no)
    $sql = "SELECT * FROM bio WHERE no='$no'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Kelola Deskripsi - PETA PERSEBARAN LAYANAN KESEHATAN PROVINSI LAMPUNG</title>
                    <link rel="stylesheet" href="css/keldes.css">
                    <link rel="stylesheet" href="css/head.css">
                    <link rel="stylesheet" href="css/search.css">
                </head>
                <body>
                    <div id="head">
                        <table>
                            <tr>
                                <td style="width: 40px;">
                                    <img src="img/Lampung.png" alt="Provinsi Lampung Logo" style="margin-left: 20px;">
                                </td>
                                <td style="text-align: center;">
                                    <p>PETA PERSEBARAN LAYANAN KESEHATAN PROVINSI LAMPUNG</p>
                                </td>
                                <td style="width: 40px;">
                                    <img src="img/bhakti.png" alt="Logo Bhakti Husada" style="margin-right: 20px;">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div id="search-container">
                        <table style="width: 100%;">
                            <tr>
                                <td>
                                    <input type="text" id="search-input" placeholder="Cari Nama / Lokasi Rumah Sakit">
                                    <button id="search-button">Cari</button>
                                </td>
                                <td>
                                    <a href="login.php"><button id="exit-button" style="margin-left: 70%;">Keluar</button></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <hr>
                    <div id="container">
                        <div id="left">
                            <a href="haladmin.php"><button id="haladmin-button">Halaman Admin</button></a>
                            <a href="kelolainfo.php"><button id="haladmin-button">Kelola Informasi</button></a>
                            <button id="kelola-button">Kelola Deskripsi</button>
                        </div>
                        <div id="right">
                            <div id="conten-input">
                                <form action="updatedes.php" method="post">
                                    <input type="hidden" name="no" value="<?php echo $row['no']; ?>">
                                    <label for="isi"><h2 style="margin-left: 40px;">Deskripsi Website</h2>:</label><br>
                                    <input type="text" id="in-tambah" name="isi" value="<?php echo $row['isi']; ?>"><br>
                                    <input type="submit" value="Submit" id="simpan">
                                </form>
                            </div>
                        </div>
                    </div>
                </body>
                </html>
            <?php
        }
    } else {
        echo "0 results";
    }
}
$conn->close();
?>