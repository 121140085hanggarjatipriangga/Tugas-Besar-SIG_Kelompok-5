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
    $sql = "SELECT * FROM data_rumah_sakit WHERE no='$no'";
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
                <title>Halaman Admin - PETA PERSEBARAN LAYANAN KESEHATAN PROVINSI LAMPUNG</title>
                <link rel="stylesheet" href="css/haladmin_edit.css">
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
                        <button id="haladmin-button">Halaman Admin</button>
                        <a href="kelolainfo.php"><button id="kelola-button">Kelola Informasi</button></a>
                        <a href='keldes.php?no=1'><button id="kelola-button">Kelola Deskripsi</button></a>
                    </div>
                    <div id="right">
                        <div id="popup">
                            <div class="popup-content">
                                <span class="close" onclick="closePopup()">&times;</span>
                                <br>
                                <h2 style="text-align: center;">Edit Informasi Layanan Kesehatan</h2>
                                <form action="update.php" method="post" id="add-form">
                                    <div>
                                        <input type="hidden" name="no" value="<?php echo $row['no']; ?>">
                                        <div class="form-group">
                                            <label for="jenis" style="margin-left: 50px; font-size: 20px;" >Jenis Rumah Sakit</label>
                                            <input type="text" id="jenis" name="jenis" value="<?php echo $row['jenis']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama" style="margin-left: 50px; font-size: 20px;">Nama Rumah Sakit</label>
                                            <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="kelas" style="margin-left: 50px; font-size: 20px;">Kelas Rumah Sakit</label>
                                            <input type="text" id="kelas" name="kelas" value="<?php echo $row['kelas']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="kabko" style="margin-left: 50px; font-size: 20px;">Kabupaten / Kota</label>
                                            <input type="text" id="kabko" name="kabko" value="<?php echo $row['kabko']; ?>">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <label for="detail" style="margin-left: 50px; font-size: 20px;">Detail Lokasi</label>
                                            <input type="text" id="detail" name="detail" value="<?php echo $row['detail']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="latitude" style="margin-left: 50px; font-size: 20px;">Latitude</label>
                                            <input type="text" id="latitude" name="latitude" value="<?php echo $row['latitude']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="longitude" style="margin-left: 50px; font-size: 20px;">Longitude</label>
                                            <input type="text" id="longitude" name="longitude" value="<?php echo $row['longitude']; ?>">
                                        </div>
                                        <button type="submit" id="simpan">Simpan</button>
                                    </div>
                                </form>
                            </div>
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