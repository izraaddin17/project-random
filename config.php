<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

//Menangkap data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$asalKota = $_POST['asalKota'];
$Tanggal = $_POST['Tanggal'];
$jumlahOrang = $_POST['jumlahOrang'];
$noWA = $_POST['noWA'];
$destinasi = $_POST['destinasi'];

if($destinasi == "Baduy"){
    $harga = 350000;
} else if($destinasi == "Sawarna"){
    $harga = 700000;
} else {
    $harga = 450000;
}

$totalBayar = $harga * $jumlahOrang;

//Menyimpan data ke database
$sql = "INSERT INTO pemesanan (nama, email, asalKota, Tanggal, jumlahOrang, noWA, destinasi, totalBayar) VALUES ('$nama', '$email', '$asalKota', '$Tanggal', '$jumlahOrang', '$noWA', '$destinasi', '$totalBayar')";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    /* style.css */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    background-color: #333;
    padding: 20px;
}

.content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.content a {
    color: white;
    text-decoration: none;
    padding: 8px 16px;
}

.content a:hover {
    background-color: #ddd;
    color: black;
}

.box {
            border: 1px solid black;
            padding: 10px;
            margin: 20px;
            text-align: center;
        }
</style>
<body>
    <div class="container">
        <div class="content">
            <a href="logout.php" class="tombol">logout</a>
        </div>
    </div>

    <div class="box" >
<h3>Data Pemesanan</h3>
    <p>Nama lengkap : <?php echo $nama ?></p>
    <p>Email : <?php echo $email ?></p>
    <p>Asal Kota : <?php echo $asalKota ?></p>
    <p>Tanggal Pemberangkatan : <?php echo $Tanggal ?></p>
    <p>Jumlah Orang : <?php echo $jumlahOrang ?></p>
    <p>No Wa : <?php echo $noWA ?></p>
    <p>Destinasi : <?php echo $destinasi ?></p>
    <p>Total Bayar : Rp. <?php echo $totalBayar?></p>
    <br><p><a href="whatsapp://send?text=Hello&phone=+6281382933890" class="tombol">Kirim Bukti Pembayaran</a></p>
    
</div>
</body>
</html>
