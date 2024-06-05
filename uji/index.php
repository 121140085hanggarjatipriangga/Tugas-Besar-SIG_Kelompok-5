<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Rumah Sakit</title>
</head>
<body>
    <h1>Data Rumah Sakit</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Jenis</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Kab/Kota</th>
            <th>Detail</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Action</th>
        </tr>
        <?php
        // Database connection
        $conn = mysqli_connect("localhost", "root", "", "tubessig");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetching data from database
        $sql = "SELECT * FROM data_rumah_sakit";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['no']."</td>";
                echo "<td>".$row['jenis']."</td>";
                echo "<td>".$row['nama']."</td>";
                echo "<td>".$row['kelas']."</td>";
                echo "<td>".$row['kabko']."</td>";
                echo "<td>".$row['detail']."</td>";
                echo "<td>".$row['latitude']."</td>";
                echo "<td>".$row['longitude']."</td>";
                echo "<td><a href='edit.php?no=".$row['no']."'>Edit</a> | <a href='delete.php?no=".$row['no']."'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
