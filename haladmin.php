<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin - PETA PERSEBARAN LAYANAN KESEHATAN PROVINSI LAMPUNG</title>
    <link rel="stylesheet" href="css/haladmin.css">
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
            <p>Daftar Informasi Layanan Kesehatan</p>
            <div id="desk">
                <p style="font-size: 15px; margin-left: 5%; margin-right: 5%;">
                <?php
                    $conn = new mysqli("localhost", "root", "","tubessig");

                    $sql = "SELECT * FROM bio WHERE no = 1"; 
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo $row["isi"]. "<br>";
                        }
                    } 
                    $conn->close();
                ?>
                </p>
            </div>
            <table id="data-table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis RS</th>
                    <th>Nama Rumah Sakit</th>
                    <th>Kelas RS</th>
                    <th>Kabupaten / Kota</th>
                    <th>Detail Lokasi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $koneksi = mysqli_connect("localhost", "root", "", "tubessig");

                    $query = "SELECT * FROM data_rumah_sakit";
                    $result = mysqli_query($koneksi, $query);

                    // Periksa apakah ada baris data
                    if (mysqli_num_rows($result) > 0) {
                        // Membuat nomor urut
                        $no = 1;
                        // Menampilkan data dalam tabel
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $no++ . "</td>";
                            echo "<td>" . $row['jenis'] . "</td>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['kelas'] . "</td>";
                            echo "<td>" . $row['kabko'] . "</td>";
                            echo "<td>" . $row['detail'] . "</td>";
                            echo "<td>
                                <a href='haladmin_edit.php?no=".$row['no']."'><button class='edit'>Edit</button></a>
                                <a href='delete.php?no=".$row['no']."'><button class='hapus'>Delete</button></a>
                                </td> ";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>Tidak ada data rumah sakit.</td></tr>";
                    }

                    // Tutup koneksi
                    mysqli_close($koneksi);
                    ?>
                </tbody>
              </table>
        </div>
    </div>

</body>
</html>
