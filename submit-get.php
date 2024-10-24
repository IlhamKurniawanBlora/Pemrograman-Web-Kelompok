<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit dari Form | GET methods</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container ">
<div class="box">

<?php
// Mengecek apakah data username dan password telah dikirim melalui GET
if (isset($_GET['username']) && isset($_GET['password'])) {
    $username = htmlspecialchars($_GET['username']);
    $password = htmlspecialchars($_GET['password']);

    echo "<h2>Data yang Dikirim (Metode GET)</h2>";
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br>";

    // Penjelasan metode GET
    echo "<h3>Penjelasan Metode GET</h3>";
    echo "<p>Metode GET digunakan untuk mengirimkan data melalui URL. Data yang dikirim menggunakan metode GET akan terlihat di URL sebagai query string (misalnya: ?username=JohnDoe&password=12345). Karena data terlihat, metode GET kurang cocok digunakan untuk mengirimkan informasi sensitif. GET biasanya digunakan untuk mengambil data atau untuk melakukan pencarian.</p>";
} else {
    echo "Tidak ada data yang dikirim.";
}
?>
    <a href="index.html">Kembali ke Halaman Awal</a>
</div>

    </div>
</body>
</html>
