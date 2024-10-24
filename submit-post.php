<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumbit dari Form | POST Methods</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
<div class="box">

    <?php
    // Mengecek apakah data username dan password telah dikirim melalui POST
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
    
        echo "<h2>Data yang Dikirim (Metode POST)</h2>";
        echo "Username: " . $username . "<br>";
        echo "Password: " . $password . "<br>";
    
        // Penjelasan metode POST
        echo "<h3>Penjelasan Metode POST</h3>";
        echo "<p>Metode POST digunakan untuk mengirimkan data secara tersembunyi dari pengguna, sehingga data seperti password dan informasi sensitif tidak terlihat di URL. Ini lebih aman untuk data yang bersifat rahasia atau sensitif. Pada metode POST, data dikirimkan melalui body request HTTP dan tidak memiliki batasan panjang data yang dikirimkan.</p>";
    } else {
        echo "Tidak ada data yang dikirim.";
    }
    ?>
        <a href="index.html">Kembali ke Halaman Awal</a>
</div>
    </div>
</body>
</html>
