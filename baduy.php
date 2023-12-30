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
    <h1>WISATA BADUY</h1>
    <ul class="gallery">
        <li class="image">
            <img src="asset/baduy-dalam.jpg" alt="Deskripsi gambar 1">
            <h3>BADUY DALAM</h3>
            <p>Baduy Dalam merupakan salah satu dari dua Suku Baduy yang masih memegang teguh aturan adat dan menjalankan dengan baik. Baduy Dalam dengan pikukuh atau kukuh yang masih sangat ketat untuk melarang menggunakan barang - barang elektronik seperti TV, handphone, jam dan lain - lain. Dan secara menyeluruh untuk masyarakat Baduy Dalam berkomitmen untuk memilih hidup tanpa menggunakan listrik, berjalan kaki kemana pun dan tanpa alas kaki. Mata Pencaharian dar Suku Baduy Dalam sama seperti Suku Baduy Luar yaitu berladang dan bertani.</p>
            <span>Untuk urusan berpakaian untuk pria, Suku Baduy Dalam dapat dibedakan dengan penampilannya yaitu selalu memakai baju berlengan panjang dan memiliki warna putih polos, yang disebut oleh Suku Baduy adalah "Jamang Sangsang". Disebut Jamang Sangsang karena cara memakainya hanya cukup disangsangkan, atau di ikat di badan</span><br>
            <br><span>Desain dari baju Jama Sangsang ini cukuo dilubangi di bagian leher hingga pada bagian dada. Potongannya tidak memakai kerah dan juga tanpa menggunakan kancing satu pun serta tidak terdapat kantong. Untuk pembuatan Jamang Sangsang ini cukup menggunakan tangan saja dan tidak diperbolehkan untuk dijahit oleh mesin. Bahan dari Jamang Sangsang ini pun harus terbuat dari benang kapas yang di tenun.</span><br>
            <br><span>Untuk pakaian bagian bawah dari Suku Baduy Dalam ini yaitu menggunakan berupa kain seperti sarung yang memiliki warna biru kehitaman. Meskipun sekilas nampak layaknya celana, akan tetapi kain itu hanyalah dililitkan dibagian pinggang saja. Supaya kain tersebut tidak melorot dan kuat, kain tersebut diikat dengan selembar kain. Dan pada bagian kepala, Suku Baduy Dalam menggunakan ikat kepala yang memiliki warna putih polos.</span><br>
        </li>
        <li class="image">
            <img src="asset/baduy2.jpg" alt="Deskripsi gambar 2">
            <h3>BADUY LUAR</h3>
            <p>Suku Baduy adalah salah satu suku yang ada di Indonesia yang bermukim di alam sekitar Gunung Kendeng, Kabupaten Lebak, Provinsi Banten. Suku Baduy hidup harmonis serta bergantungan pada alam di sekitar.
                Pada Suku Baduy Luar telah dipengaruhi oleh gaya hidup masyarakat modern jaman sekarang. Untuk mata pencaharian Suku Baduy Luar adalah berladang dan bertani.
                Namun ada keunikan dari kedua suku ini (Suku Baduy Luar dan Suku Baduy Dalam) yaitu tidak mengenal serta menggunakan alat untuk menggarap sawah, contohnya mesin penggarap serta kerbau.
                Penggunaan mesin memang sangat dilarang di daerah ini. Dan aturan adat melarang Suku Baduy untuk memelihara hewan berkaki empat.</p>
            <span>Untuk masalah berbusana untuk masyarakat pria Baduy Luar, mereka mengenakan baju yang memiliki warna hitam serta ikat kepala yang memiliki warna biru tua dan memiliki corak batik khas dari Lebak. Untuk desain pakaian Baduy Luar terbelah dua sampai dengan bagian bawah, layaknya baju yang biasa dikenakan khalayak ramai. Dan untuk pakaian dari masyarakat Baduy Luar boleh ada kantongnya dan boleh memakai kancing. Sangat berbeda dengan pakaian dari Baduy Dalam, pakaian atau baju dari masyarakat Baduy Luar tidak di haruskan terbuat dari benang kapas murni</span>
        </li>
        <!-- Tambahkan gambar lainnya di sini -->
    </ul>
</div>
    <main>
        
    <div class="layar-dalam">
         <h3>Harga Open Trip Baduy</h3>
       <!-- Kotak paragraf pertama -->
  <div class="kotak-paragraf">
  <ul>
    <li>Dari Jakarta (Stasiun Tanah Abang) dan Stasiun Rangkasbitung : Rp 350.000/orang.</li>
  </ul>
  </div>
  <h3>#ExploreLebak</h3>
  <!-- Kotak paragraf kedua -->
  <div class="kotak-paragraf">
    <h3>Sudah Termasuk</h3>
  <ul>
    <li>Transportasi (Elf / Angkot) Rangkasbitung - Terminal Ciboleger PP (Khusus dari Jakarta dan Rangkasbitung).</li>
    <li>Guide lokal.</li>
    <li>Makan 2 kali selama di Baduy (makan malam dan makan pagi).</li>
    <li>Biaya perizinan masuk Pemukiman Suku Baduy.</li>
    <li>Penginapan di Baduy.</li>
    <li>Tour leader dari meeting point.</li>
  </ul>
  <h3>Belum Termasuk</h3>
  <ul>
    <li>Tiket Kereta Commuter Line Stasiun Tanah Abang - Rangkasbitung PP : Rp 16.000/orang.</li>
    <li>Biaya porter (optional).</li>
    <li>Tips guide (sukarela).</li>
  </ul>
  <h3>RENCANA PERJALANAN OPEN TRIP BADUY DARI JAKARTA DAN RANGKASBITUNG</h3>
  <ul>
    <p>Hari ke 1 </p>
    <li>07.00 : Meeting point di Stasiun Tanah Abang, registrasi ulang dan kenalan sesama peserta.</li>
    <li>07.30 : Perjalanan menuju Stasiun Rangkasbitung dengan commuter line. </li>
    <li>09.45 : Tiba di Stasiun Rangkasbitung dan dilanjutkan perjalanan ke Ciboleger dengan Elf atau angkot.</li>
    <li>11.00 : ISHOMA, beli perbekalan dan persiapan trekking.</li>
    <li>12.00 : Trekking menuju Baduy Dalam dari Ciboleger (estimasi 4 jam). Dalam perjalanan bisa sambil beli oleh-oleh khas Baduy Luar dan melihat penduduk Baduy sedang menenun.</li>
    <li>16.00 : Tiba di homestay, bersih - bersih dan bisa di isi dengan keliling desa.</li>
    <li>18.00 : Makan malam.</li>
    <li>19.00 : Makrab dan cerita tentang kehidupan di Baduy dengan penduduk Baduy Dalam.</li>
    <li>21.00 : Istirahat.</li>
    <br><p>Hari ke 2</p>

    <li>05.00 : Sholat Subuh (bagi beragama muslim) dan menikmati pagi hari di Desa Baduy Dalam. Melihat aktifitas penduduk Baduy Dalam.</li>
    <li>06.00 : Sarapan dan persiapan trekking ke Ciboleger atau Cijahe. Perjalanan bisa di isi dengan membeli oleh - oleh khas Baduy Dalam.</li>
    <li>07.00 : Treking dari Baduy Dalam ke Ciboleger / Cijahe.</li>
    <li>10.30 : Perjalanan Stasiun Rangkasbitung dengan Elf atau angkot.</li>
    <li>13.00 : Ishoma (makan siang di sekitar stasiun).</li>
    <li>14.00 : Pulang dengan kereta commuterline dari Stasiun Rangkasbitung dan Open Trip Baduy selesai.</li>
  </ul>
  <h3>Larangan Yang wajib dipatuhi</h3>
  <ul>
    <li>Tidak menangkap atau membunuh binatang yang di perjalanan.</li>
    <li>Tidak membuang sampah sembarangan (terutama dari kaleng atau plastik).</li>
    <li>Tidak membuang sampah ataupun sejenisnya ke sungai.</li>
    <li>Tidak membuang puntung rokok yang masih menyala.</li>
    <li>Tidak meninggalkan api bekas masak atau api unggun dalam keadaan menyala.</li>
    <li>Tidak mencabut atau merusak tanaman sepanjang jalan yang dilalui.</li>
    <li>Tidak melanggar norma susila.</li>
    <li>Tidak ada kamar mandi / toilet, semua kegiatan MCK dilakukan di sungai dan tidak boleh menggunakan sabun dan pasta gigi.</li>
    <li>Semua tamu atau pengunjung tanpa terkecuali dilarang memasuki hutan tutupan.</li>
</ul>
  <p>
      <a href="pembayaran.php" class="tombol">Book now</a>
 </p>
  </div>
  </div>
  
  <div class="kotak-paragraf" >
    <h2>Gallery</h2>
  <section id="gallery">
          <div><img src="asset/baduy1.jpg" /></div>
          <div><img src="asset/ftbaduy7.jpeg" /></div>
          <div><img src="asset/ftbaduy6.jpeg" /></div>
          <div><img src="asset/ftbaduy8.jpeg" /></div>
          <div><img src="asset/ftbaduy9.jpeg" /></div>
         
          
        </section>
        <section id="gallery">
          <div><img src="asset/baduy2.jpg" /></div>
          <div><img src="asset/ftbaduy1.jpeg" /></div>
          <div><img src="asset/ftbaduy2.jpeg" /></div>
          <div><img src="asset/ftbaduy3.jpeg" /></div>
          <div><img src="asset/ftbaduy5.jpeg" /></div>
          
      
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