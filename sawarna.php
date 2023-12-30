<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Kumpulan Gambar</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

h1 {
  background-color: f1f1f1;
    color: black;
    margin: 0;
    padding: 20px;
    text-align: center;
}

h2 {
    background-color: blue;
    color: white;
    margin: 0;
    padding: 20px;
    text-align: center;
    font-size : 30px;
}

p{
  text-align : center;
  padding:15px;
}

.gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    grid-gap: 20px;
    padding: 20px;
    list-style: none; /* Hapus baris ini */
}

.image {
    background-color: #f1f1f1;
    padding: 20px;
    text-align: justify;
}

.image img {
    width: 100%;
    height: auto;
}

.image h3{
    text-align : center;
}
body {
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar a.active {
            background-color: #4CAF50;
            color: white;
        }

        .navbar-right {
            float: right;
        }
</style>
<body>
<div class="navbar">
        <a href="index.php" class="active">Home</a>
        <div class="navbar-right">
        <a href="logout.php" class="btn">logout</a>
        </div>
    </div>
    <div>
    <h1>WISATA PANTAI SAWARNA</h1>
    <ul class="gallery">
        <li class="image">
            <img src="asset/Pantai-Karang.webp" alt="Deskripsi gambar 1">
            <h3>Pantai sawarna</h3>
            <p>Pantai Sawarna adalah salah satu pantai yang memukau di kawasan Banten dan dalam paket wisata Sawarna 2 hari 1 malam ini, kami akan mengajak anda mengunjungi tempat indah tersebut.
              Panjang pantai mencapai 65 km. Indahnya Pantai Sawarna dihiasi dengan pasir putih, air laut biru yang jernih, serta barisan bukit hijau.
              Kondisi pantai masih terbilang asli dan jauh dari kata tercemar. Maka tak salah Indahnya Pantai Sawarna ini sangat memukau.
              Mari berkunjung ke Pantai sawarna bersama kawan dan sanak keluarga anda dan bergabung dalam paket wisata Sawarna 2 hari 1 malam ini.</p>
        </li>
    </ul>
</div>
    <main>
        
    <div class="layar-dalam">
         <h3>Harga Open Trip Pantai Sawarna</h3>
       <!-- Kotak paragraf pertama -->
  <div class="kotak-paragraf">
  <ul>
    <li>Transportasi penjemputan dari tempat yang di tentukan area Jakarta : Rp 700.000/orang.</li>
  </ul>
  </div>
  <h3>#ExploreLebak</h3>
  <!-- Kotak paragraf kedua -->
  <div class="kotak-paragraf">
    <h3>Sudah Termasuk</h3>
  <ul>
    <li>Transportasi penjemputan dari tempat yang di tentukan area Jakarta PP.</li>
    <li>Penginapan / homestay di Desa Sawarna ( Non Ac ).</li>
    <li>Makan 3 Kali Prasmanan.</li>
    <li>Administrasi kunjungan Seluruh Pantai.</li>
    <li>Foto Dokumentasi Kegiatan Wisata..</li>
    <li> Guide Lokal.</li>
  </ul>
  <h3> Paket Wisata Sawarna 2 Hari 1 Malam MENGUNJUNGI :</h3> 
  <ul>
    <li>Desa Sawarna.</li>
    <li>Goa lalay</li>
    <li>Lagoon Pari.</li>
    <li>Tanjung Layar.</li>
    <li>Pantai Ciantir.</li>
  </ul>
  <h3>Program Paket Wisata Sawarna</h3>
  <ul>
    <p>Hari ke 1 </p>
    <li>05.00 : Peserta berkumpul di penjemputan yang telah di tentukan./li>
    <li>05.30 : Keberangkatan menuju Desa Sawarna. </li>
    <li>11.30 : Isitrahat sejenak dan Makan siang. ( Pengeluaran Pribadi ).</li>
    <li>12.30 : Perjalana di lanjutkan menuju Sawarna</li>
    <li>14.00 : Tiba di Sawarna dan Check-in Penginapan.</li>
    <li>14.30 : Persiapan jelajah Pantai Ciantir..</li>
    <li>16.30 : Jelajah menuju Tanjung Layar.</li>
    <li>17.30 : Menikmati keindahan Sunset di Pantai Tanjung Layar.</li>
    <li>18.00 : Kembali ke Homestay / Penginapan.</li>
    <li>19.00 : Makan malam bersama.</li>
    <li>21.00 : Istirahat dan Acara Bebas.</li>

    <br><p>Hari ke 2</p>
    <li>05.00 : Bangun Pagi dan persiapan sarapan bersama.</li>
    <li>06.30 : Sarapan pagi bersama.</li>
    <li>07.30 : Menuju Karang Taraje.</li>
    <li>08.30 : Jelajah Lagoon Pari dan sekitar.</li>
    <li>09.30 : Kegiatan Caving Goa Lalay.</li>
    <li>12.00 : Persiapan Check-out Penginapan.</li>
    <li>13.00 : Perjalanan menuju kembali ke Kota Jakarta.</li>
    <li>22.00 : Tiba di Jakarta dan Tour selesai.</li>
  </ul>
  <p>
      <a href="pembayaran.php" class="tombol">Book now</a>
 </p>
  </div>
  </div>
  
  <div class="kotak-paragraf" >
    <h2>Gallery</h2>
  <section id="gallery">
          <div><img src="asset/sawarna5.jpeg" /></div>  
          <div><img src="asset/legonpari.webp" /></div>
          <div><img src="asset/pantai-tanjung-layar.jpeg" /></div>
          <div><img src="asset/sawarna1.jpeg" /></div>
          <div><img src="asset/sawarna.jpg" /></div>
          
        </section>
        <section id="gallery">
        
          <div><img src="asset/sawarna2.jpeg" /></div>
          <div><img src="asset/sawarna4.jpeg" /></div>
          <div><img src="asset/sawarna3.jpeg" /></div>
          <div><img src="asset/tanjunglayar1.jpg" /></div>
          <div><img src="asset/sawarna6.jpeg" /></div>

      
        </section>
        </div>
  </main>
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
  <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
</body>
</html>