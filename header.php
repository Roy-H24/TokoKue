<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kue";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="widht=device-width">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="icons/icon.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokokue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <selection class="menu">
        <div class="nav">
            <div class="logo">
                <h1>Maria<b>Bakery</b></h1>
            </div>
            <div>
                <ul>
                    <li><a href="index.php" class="active">Beranda</a></li>
                    <li><a href="produk.php">Produk</a></li>
                    <li><a href="tentangkami.php">Tentang Kami</a></li>
                    <li><a href="ulasan.php">Ulasan</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                </ul>
                </nav>
            </div>
            <div>
                <input class="signin" type="submit" value="Sign in" name="Signin">
                <input class="signup" type="submit" value="Sign up" name="Signup">
            </div>
        </div>
        </div>
    </selection>