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
                <title>Edit Data Rumah Sakit</title>
            </head>
            <body>
                <h1>Edit Data Rumah Sakit</h1>
                <form action="update.php" method="post">
                    <input type="hidden" name="no" value="<?php echo $row['no']; ?>">
                    <label for="jenis">Jenis:</label><br>
                    <input type="text" id="jenis" name="jenis" value="<?php echo $row['jenis']; ?>"><br>
                    <label for="nama">Nama:</label><br>
                    <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>"><br>
                    <label for="kelas">Kelas:</label><br>
                    <input type="text" id="kelas" name="kelas" value="<?php echo $row['kelas']; ?>"><br>
                    <label for="kabko">Kab/Kota:</label><br>
                    <input type="text" id="kabko" name="kabko" value="<?php echo $row['kabko']; ?>"><br>
                    <label for="detail">Detail:</label><br>
                    <input type="text" id="detail" name="detail" value="<?php echo $row['detail']; ?>"><br>
                    <label for="latitude">Latitude:</label><br>
                    <input type="text" id="latitude" name="latitude" value="<?php echo $row['latitude']; ?>"><br>
                    <label for="longitude">Longitude:</label><br>
                    <input type="text" id="longitude" name="longitude" value="<?php echo $row['longitude']; ?>"><br><br>
                    <input type="submit" value="Submit">
                </form>
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
