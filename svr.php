<html>

<head>
	<title>Pemesanan</title>
</head>

<body>
<?php
include_once("config.php");

if(isset($_POST['submit'])){
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

    $result = mysqli_query($mysqli, "INSERT INTO pemesanan (nama, email, asalKota, Tanggal, jumlahOrang, noWA, destinasi, totalBayar)
    VALUES ('$nama', '$email', '$asalKota', '$Tanggal', '$jumlahOrang', '$noWA', '$destinasi', '$totalBayar')");


    header("Location: pembayaran.php"); // Redirect kembali ke halaman utama setelah data ditambahkan.
}
?>

</body>

</html>