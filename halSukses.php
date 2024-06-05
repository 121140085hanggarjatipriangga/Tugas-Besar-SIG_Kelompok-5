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
            <p>SELAMAT SUKSES MENGHAPUS</p>
        </div>
    </div>
</body>
</html>
