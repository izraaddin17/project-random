
<?php

@include 'koneksi.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Bordered List</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: auto;
        }

        .output {
            background-color: #F5F5F5;
            padding: 20px;
            border: 1px solid #ddd;
        }

        .output p {
            text-align: center;
           
            margin: 0;
            padding: 10px 0;
            border-bottom: 1px solid #ddd; /* Tambahkan border untuk bawah */
        }

        .output strong {
            font-weight: bold;
            margin-right: 10px;
            
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #F5F5F5;
        }

        form {
            margin: 0 auto;
            width: 400px;
        }
        label {
            display: block;
            margin-top: 10px;
            color: white;
            
        }
        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 8px;
            margin-top: 6px;
            border: 1px solid #ddd;
        }
        input[type="submit"] {
            margin-top: 10px;
            padding: 8px;
            background-color: tomato;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: darkblue;
        }
        .box {
            border: 1px solid black;
            padding: 10px;
            margin: 20px;
            margin-bottom: 50px; /* Tambahkan jarak di bawah */
            text-align: justify;
            background: blue;
        }

        .container {
            padding: 20px;
            
        }
       .h{
        font-size: 33px;
        color : white;
        
       }
       .h1{
        font-size: 33px;
        color : red;
        padding:20px;
        text-align : center;
       }
       .nav{
        background: blue
        ;
        padding: 30px;
       }
    .home{
        background-color: #c86b85;
  height: 40px;
  line-height: 42px;
  color: #fff;
  text-align: right;
  text-decoration: none;
  display: inline-block;
  padding: 0px 20px 0px 20px;
  font-size: 15px;
  border-radius: 4px;
    }
    </style>
</head>
<body>

<div class="nav">

        <div class="content">
        
            <a href="logout.php" class="tombol">logout</a>
            <a href="index.php" class ="home" >Home</a>
        </div>
    </div>
      <h1 class = "h1">welcome <span class ="h1"><?php echo $_SESSION['user_name'] ?></span></h1>
<div class="container">

</div>
    <div class="container">
        <div class="output">
          <h3>BERIKUT TATA CARA PEMBAYARAN</h3>
        <ol>
          <li>Isi formulir Pemesanan.</li>
          <li>Nominal pembayaran akan muncul.</li>
          <li>Silahkan lakukan pembayaran  dengan Cara Transfer ATM/Internet Banking/SMS Banking/Setor Tunai, ke salah satu nomor rekening tujuan yang ada di bawah tersebut.</li>
          <li>Dan kirim konfirmasi pembayaran Anda ke WhatsApp kami.</li>
          <li>Kami akan memproses order Anda maksimal 2 x 60 menit sejak sms konfirmasi pembayaran dari Anda kami terima.</li>
      </ol>
        </div>
    </div>
    <section>
    <div class="container">
        <h2>Rek Pembayaran</h2>
        <div class="output">
            <table>
                <tr>
                    <th>Bank</th>
                    <th>No. Rekening</th>
                    <th>Pemilik Rekening</th>
                </tr>
                <tr>
                    <td><img src="asset/BRI.png" alt="BRI" width="100"></td>
                    <td>3702 0107 0819 537</td>
                    <td>Izra Addin Sena</td>
                </tr>
            </table>
        </div>
    
    </section>
</div>

<div class="box">
<h3 class ="h">Booking</h3>
    <form action ="config.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="asalKota">Asal Kota:</label>
        <input type="text" id="asalKota" name="asalKota" required><br><br>

        <label for="Tanggal">Tanggal Pemberangkatan</label>
        <input type="date" id="Tanggal" name="Tanggal" required />

        <label for="jumlahOrang">Jumlah Orang:</label>
        <input type="number" id="jumlahOrang" name="jumlahOrang" min="1" required><br><br>

        <label for="noWA">No WA:</label>
        <input type="text" id="noWA" name="noWA" required><br><br>

        <label for="destinasi">Pilihan Destinasi:</label>
        <select id="destinasi" name="destinasi" required>
            <option value="Baduy">Baduy - Harga: Rp.350.000/orang</option>
            <option value="Sawarna">Sawarna- Harga: Rp.700.000/orang</option>
            <option value="Cibeber">Cibeber - Harga: Rp.450.000/orang</option>
        </select><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    
    <?php
//Menangkap data dari form
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
}

?>
</div>
<footer id="contact">
        <div class="layar-dalam">
          <div>
            <h5>Info</h5>
            JL. Raya Bayah , Bayah Barat, Kec. Bayah, Kabupaten Lebak, Banten 42393
          </div>
          <div>
            <h5>Tour</h5>
           wisata baduy <br>
           wisata sawarna <br>
           wisata Cibeber <br>
          </div>
          <div>
            <h5>customer</h5>
           <span>Cara Pemesanan</span>
           <span>Metode pembayaran</span>
          </div>
          <div>
            <h5>Contact</h5>
            WA    : +62 85960342843 <br>
            Email: travelLebak@gmail.com <br>
            ig    : @Lebakselatan

          </div>
        </div>
        <div class="layar-dalam">
          <div class="copyright">&copy; 2023 Izra Addin Sena Allright Reserved.</div>
        </div>
      </footer>
</body>

</html>