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
    <h1>WISATA CIBEBER</h1>
    <ul class="gallery">
        <li class="image">
            <img src="asset/kebunteh.jpeg" alt="Deskripsi gambar 1">
            <h3>KEBUN TEH CIKUYA</h3>
            <span>Kebun Teh Cikuya ini menjadi satu-satunya Kebun Teh yang ada di Provinsi Banten. Kebun teh ini menjadi daya tarik dengan lanskap perkebunan teh dan hawanya yang sejuk.</span>
            <br><span>Kebun Teh Cikuya berada di dataran tinggi, di atas 700 meter di atas permukaan laut. Luas lahan yang sudah digarap sekitar 30 hektare. Teh yang di tanaman di kawasan ini merupakan jenis Camellia Sinesis.</span>
            <br><span>Di sini, kamu juga bisa mencicipi olahan teh yang diproduksi. Ada kafe khusus yang dibuat untuk wisatawan dengan beragam menu teh seperti teh oolong, teh merah, teh hijau dan teh opa. Selain itu, kamu juga bisa membawa pulang produk teh sebagai oleh-oleh. Seru banget, kan?</span>
            
        </li>
        <li class="image">
            <img src="asset/ciporolak12.jpg" alt="Deskripsi gambar 2">
            <br><br><br><br><h3>CURUG CIPOROLAK</h3>
            <span>Curug Ciporolak. Demikian nama obyek wisata yang belum banyak diketahui masyarakat luas ini. Temptanya berada di Desa Hegaarmanah, Kecamatan Cibeber, Kabupaten Lebak, Banten.</span>
            <br><br><span>Curug Ciporolak yang memiliki ketinggian air terjun sekitar 100 m ini berada pada aliran Sungai Cimadur.
              Curug ini memiliki ciri khas curahan air terjun berundak-undak, hingga ke dasar jautuhnya air yang secara alami membentuk danau kecil. Karena itu, dinamakan Ciporolak (bahasa sunda), sebuah frasa yang memiliki arti air yang berjatuhan.</span>
        </li>
        <!-- Tambahkan gambar lainnya di sini -->
    </ul>
</div>
    <main>
        
    <div class="layar-dalam">
         <h3>Harga Open Trip Cibeber</h3>
       <!-- Kotak paragraf pertama -->
  <div class="kotak-paragraf">
  <ul>
    <li>Transportasi penjemputan dari tempat yang di tentukan area Jakarta : Rp 450.000/orang.</li>
  </ul>
  </div>
  <h3>#ExploreLebak</h3>
  <!-- Kotak paragraf kedua -->
  <div class="kotak-paragraf">
    <h3>Sudah Termasuk</h3>
  <ul>
    <li>Transportasi penjemputan dari tempat yang di tentukan area Jakarta PP.</li>
    <li>Penginapan / homestay di Desa Hargamanah ( Non Ac ).</li>
    <li>Makan 3 Kali Prasmanan.</li>
    <li>Administrasi kunjungan obejek wisata.</li>
    <li>Foto Dokumentasi Kegiatan Wisata..</li>
    <li> Guide Lokal.</li>
  </ul>
  <h3> Paket Wisata Cibeber MENGUNJUNGI :</h3> 
  <ul>
    <li>Kebun teh cikuya</li>
    <li>Curug Ciporolak</li>
    <li>pohon damar.</li>
  </ul>
  <h3>Program Paket Wisata cibeber</h3>
  <ul>
    <p>Hari ke 1 </p>
    <li>08.00 : Peserta berkumpul di penjemputan yang telah di tentukan./li>
    <li>09.00 : Keberangkatan menuju Desa Hargamanah. </li>
    <li>12.30 : Isitrahat sejenak dan Makan siang. ( Pengeluaran Pribadi ).</li>
    <li>13.15 : Perjalana di lanjutkan menuju Cibeber</li>
    <li>15.00 : Tiba di desa Hargamanah dan Check-in homestay.</li>
    <li>15.30 : Persiapan jelajah kebun teh Cikuya.</li>
    <li>16.00 : Jelajah menuju kebun Teh Cikuya.</li>
    <li>17.30 : Menikmati keindahan hamparan kebun Teh Cikuya.</li>
    <li>18.00 : Kembali ke Homestay / Penginapan.</li>
    <li>19.00 : Makan malam bersama.</li>
    <li>21.00 : Istirahat dan Acara Bebas.</li>

    <br><p>Hari ke 2</p>
    <li>05.00 : Bangun Pagi dan persiapan sarapan bersama.</li>
    <li>06.30 : Sarapan pagi bersama.</li>
    <li>07.30 : persipan penjelajahan curug ciporolak.</li>
    <li>08.30 : Jelajah curug Ciporolak.</li>
    <li>09.30 : Menikmati Keindahan Curug ciporolak.</li>
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
          <div><img src="asset/cikuya.jpg" /></div> 
          <div><img src="asset/cikuya9.jpeg" /></div> 
          <div><img src="asset/ciporolak77jpeg.jpeg" /></div>
          <div><img src="asset/ciporolak12.jpg" /></div>
          
        </section>
        <section id="gallery">
        
          
          <div><img src="asset/kebun.jpeg" /></div>
          <div><img src="asset/ciporolak0.jpeg" /></div>
          <div><img src="asset/lebak12.jpeg" /></div>
          <div><img src="asset/cikuya0.jpeg" /></div>

      
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