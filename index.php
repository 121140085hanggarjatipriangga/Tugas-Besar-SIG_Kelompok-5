<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - PETA PERSEBARAN LAYANAN KESEHATAN PROVINSI LAMPUNG</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 500px;
        }
    </style>
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div id="head">
        <table>
            <tr>
                <td style="width: 40px;">
                    <img src="img/Lampung.png" alt="Provinsi Lampung Logo" style="margin-left: 20px;">
                </td>
                <td style="text-align: center;">
                    <p>PETA PERSEBARAN LAYANAN KESEHATAN PROVINSI LAMPUNG </p>
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
                    <button id="search-button" onclick="searchRumahSakit()">Cari</button>
                </td>
                <td>
                    <a href="login.php"><button id="admin-button" style="margin-left: 70%;">Admin</button></a>
                </td>
            </tr>
        </table>
    </div>
    <hr>
    <div id="main-head">
        <p>
        <?php
            $servername = "localhost"; 
            $username = "root"; 
            $password = ""; 
            $dbname = "tubessig";

            $conn = new mysqli($servername, $username, $password, $dbname);

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
    <p style="text-align: center; font-size: 30px; margin-top: 0; font-family: Arial, Helvetica, sans-serif;">Peta Provinsi Lampung</p>
    <div id="map"></div>
    <div id="main-item">
        <div id="conten-2">
            <div id="left">
                <div id="conten-1">
                    <h3 style="text-align: center; margin-top: 5px;">Jumlah Layanan Kesehatan</h3>
                    <table>
                        <tr>
                            <td>
                                <h1>
                                <?php
                                    $koneksi = mysqli_connect("localhost", "root", "", "tubessig");

                                    $query = "SELECT nama FROM data_rumah_sakit WHERE kabko = 'Bandar Lampung'";
                                    $result = mysqli_query($koneksi, $query);
                                    $total_data = mysqli_num_rows($result);
                                    mysqli_close($koneksi);
                                    echo $total_data; 
                                    ?>
                                </h1>
                                <p>Bandar Lampung</p>
                            </td>
                            <td style="border-left: 3px solid #00ABEB;">
                                <h1>
                                <?php
                                    $koneksi = mysqli_connect("localhost", "root", "", "tubessig");

                                    $query = "SELECT nama FROM data_rumah_sakit WHERE kabko = 'Lampung Selatan'";
                                    $result = mysqli_query($koneksi, $query);
                                    $total_data = mysqli_num_rows($result);
                                    mysqli_close($koneksi);
                                    echo $total_data; 
                                    ?>
                                </h1>
                                <p style="margin-top: 0px;">Lampung Selatan</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="left" style="margin-left: 10%;">
                <div id="conten-1">
                    <table style="margin-top: 45px;">
                        <tr>
                            <td>
                                <h1>
                                <?php
                                    $koneksi = mysqli_connect("localhost", "root", "", "tubessig");

                                    $query = "SELECT nama FROM data_rumah_sakit";
                                    $result = mysqli_query($koneksi, $query);
                                    $total_data = mysqli_num_rows($result);
                                    mysqli_close($koneksi);
                                    echo $total_data; 
                                    ?>
                                </h1>
                                <p>Total Layanan Kesehatan</p>
                            </td>
                            <td style="border-left: 3px solid #00ABEB;">
                                <h1>
                                <?php
                                    $koneksi = mysqli_connect("localhost", "root", "", "tubessig");

                                    $query = "SELECT DISTINCT `jenis` FROM `data_rumah_sakit`";
                                    $result = mysqli_query($koneksi, $query);
                                    $total_data = mysqli_num_rows($result);
                                    mysqli_close($koneksi);
                                    echo $total_data; 
                                    ?>
                                </h1>
                                <p style="margin-top: 0px;">Jenis Layanan Kesehatan</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="main-item-bottom">
        <div id="daftar">
            <h3 style="text-align: center; margin-bottom: 20px;">Daftar Layanan Kesehatan Beserta Lokasi</h3>
            <table id="data-table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis RS</th>
                    <th>Nama Rumah Sakit</th>
                    <th>Kelas RS</th>
                    <th>Kabupaten / Kota</th>
                    <th>Detail Lokasi</th>
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
        
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="js/script.js"></script>
    <script src="js/search.js"></script>
</body>
</html>
