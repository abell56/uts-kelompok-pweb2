<?php
// about.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #3a8dde, #ffffff);
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        header {
            text-align: center;
            padding: 20px;
        }
        .about {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        .team {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        .member {
            background: rgba(255, 255, 255, 0.8);
            padding: 15px;
            border-radius: 10px;
            text-align: center;
        }
        .member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        footer a {
            margin: 0 10px;
            text-decoration: none;
            color: #333;
        }
        .btn-back {
  display: inline-flex;
  align-items: center;
  padding: 10px 20px;
  background-color: #0056b3; /* Warna biru agak gelap */
  color: white;
  border-radius: 5px;
  text-decoration: none;
  font-size: 16px;
  transition: background-color 0.3s;
}

.btn-back:hover {
  background-color: #004494; /* Warna biru lebih gelap saat hover */
}

.btn-back i {
  margin-right: 8px; /* Spasi antara ikon dan teks */
  }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Kata Sambutan</h1>
        </header>
        <section class="about">
            <h2>About Us</h2>
            <p>Hallo!!  terima kasih sudah berkunjung ke website kami yaitu FASKES, sebuah platform informasi terkait kesehatan dan keselamatan diri anda.diamana informasi terkait puskesmas dan klini bahkan rumah sakit bisa anda upload dan akses disini</p>
            <p>Selamat menikmati dan jika ada usulan beritahukan kepada kami, masukan anda sangat berharga bagi kami</p>
        </section>
        <section class="team">
            <div class="member">
                <img src="../galeri/anwar.jpg" alt="Foto Member">
                <h3>Anwar Maulana</h3>
                <p>Ayo coba kalau gagal ya udah!</p>
            </div>
            <div class="member">
                <img src="../galeri/fatur.jpg" alt="Foto Member">
                <h3>Faturrahman</h3>
                <p>teruslah melangkah sampai sejauh mana kamu terjatuh</p>
            </div>
            <div class="member">
                <img src="../galeri/awal.jpg" alt="Foto Member">
                <h3>M.Rizky Nur Awalin</h3>
                <p>Motto 3</p>
            </div>
            <div class="member">
                <img src="placeholder.jpg" alt="Foto Member">
                <h3>Abellllllll</h3>
                <p>Motto 4</p>
            </div>
        </section>
        <a href="dashboard.php" class="btn-back">
  <i class="fas fa-arrow-left"></i> Kembali
</a>
        <footer>
            <ul>
                <a href="https://www.youtube.com/@Al-agnani12" target="_blank" >youtube</a>
                <a href="https://github.com/Warlana1451/">Github</a>
            </ul>
        </footer>
    </div>
</body>
</html>