<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - PETA PERSEBARAN LAYANAN KESEHATAN PROVINSI LAMPUNG</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/head.css">
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
    <div id="container">
        <h2 style="font-family: Arial, Helvetica, sans-serif;">Login Admin</h2>
        <form action="login_process.php" method="post">
            <input type="text" name="username" id="login-input" placeholder="Username" required>
            <input type="password" name="password" id="login-input" placeholder="Password" required>
            <button type="submit" id="admin-button">Masuk</button>
        </form>
        <a href="index.php"><button id="index-button">Beranda</button></a>
    </div>
</body>
</html>
