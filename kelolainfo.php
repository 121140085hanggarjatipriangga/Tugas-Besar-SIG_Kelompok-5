<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Info - PETA PERSEBARAN LAYANAN KESEHATAN PROVINSI LAMPUNG</title>
    <link rel="stylesheet" href="css/kelolainfo.css">
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
            <button id="kelola-button">Kelola Informasi</button>
            <a href='keldes.php?no=1'><button id="haladmin-button">Kelola Deskripsi</button></a>
        </div>
        <div id="right">
            <p>Tambah Informasi Layanan Kesehatan</p>
            <div id="conten-input">
                <form id="add-form" method="post" action="proses_tambah_rs.php">
                    <label for="jenis" style="margin-left: 50px; font-size: 20px; margin-top: 20px">Jenis:</label>
                    <input type="text" name="jenis" id="jenis-rs" required>

                    <label for="nama" style="margin-left: 50px; font-size: 20px;">Nama:</label>
                    <input type="text" name="nama" id="nama-rs" required>

                    <label for="kelas" style="margin-left: 50px; font-size: 20px;">Kelas:</label>
                    <input type="text" name="kelas" id="kelas-rs" required>

                    <label for="kabko" style="margin-left: 50px; font-size: 20px;">Kabupaten/Kota:</label>
                    <input type="text" name="kabko" id="kabko" required>

                    <label for="detail" style="margin-left: 50px; font-size: 20px;">Detail:</label>
                    <input type="text" name="detail" id="detail" required>

                    <label for="latitude" style="margin-left: 50px; font-size: 20px;">Latitude:</label>
                    <input type="text" name="latitude" id="latitude" required>

                    <label for="longitude" style="margin-left: 50px; font-size: 20px;">Longitude:</label>
                    <input type="text" name="longitude" id="longitude" required>
                    
                    <button type="submit" id="simpan">Simpan</button>
                    <button type="reset" id="batal">Batalkan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
