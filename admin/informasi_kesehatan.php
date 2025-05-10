<?php
// informasi_kesehatan.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Kesehatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #87CEFA, #ffffff);
        }
        .category-card, .doctor-card {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .category-card:hover, .doctor-card:hover {
            transform: scale(1.05);
        }
        .motivation {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }
        h3 {
      text-align: center;
      margin-bottom: 20px;
    }
    .gallery-container {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      justify-content: center;
    }
    .gallery-item {
      width: 200px;
      border: 1px solid #ccc;
      padding: 5px;
      box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
    }
    .gallery-item img {
      width: 100%;
      height: auto;
      display: block;
    }
    .caption {
      text-align: center;
      margin-top: 5px;
      font-size: 14px;
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
<div class="container py-5">
    <h1 class="text-center mb-4">Informasi Kesehatan</h1>

    <!-- Kategori Fasilitas -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="p-3 bg-white category-card">
                <h4>Puskesmas</h4>
                <p>Pelayanan kesehatan primer yang dekat dengan masyarakat.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 bg-white category-card">
                <h4>Klinik</h4>
                <p>Pelayanan medis umum dan spesialis untuk kebutuhan khusus.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 bg-white category-card">
                <h4>Rumah Sakit</h4>
                <p>Pelayanan kesehatan lanjutan dengan fasilitas lengkap.</p>
            </div>
        </div>
    </div>

    <!-- Motivasi Kesehatan -->
    <div class="motivation mb-4">
        <h3 class="mb-3">Motivasi Kesehatan</h3>
        <p>"Kesehatan bukan segalanya, tapi tanpa kesehatan segalanya bukan apa-apa." Jaga kesehatan Anda mulai dari hal kecil setiap hari!</p>
    </div>
 
    <!-- Foto Dokter / Profil -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="p-3 bg-white doctor-card text-center">
                <img src="../galeri/dok1.jpg" class="rounded-circle mb-2 hight-600xp" alt="Dokter 1">
                <h5>Dr. Andi</h5>
                <p>Dokter Umum</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 bg-white doctor-card text-center">
                <img src="../galeri/dok2.jpg" class="rounded-circle mb-2 hight-600xp" alt="Dokter 2">
                <h5>Dr. Budi</h5>
                <p>Dokter Gigi</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 bg-white doctor-card text-center">
                <img src="../galeri/dok3.jpg" class="rounded-circle mb-2 hight-600xp" alt="Dokter 3">
                <h5>Dr. Citra</h5>
                <p>Dokter Anak</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 bg-white doctor-card text-center">
                <img src="../galeri/dok4.jpg" class="rounded-circle mb-2 hight-600xp " alt="Dokter 4">
                <h5>Dr. Dedi</h5>
                <p>Dokter Bedah</p>
            </div>
        </div>
    </div>

    <!-- Galeri Image User (10 Foto) -->
    <h3>Galeri Anda</h3>
  <div class="gallery-container">
    <?php for ($j = 1; $j <= 8; $j++): ?>
      <div class="gallery-item">
        <img src="../galeri/prak<?php echo $j; ?>.jpg" alt="Gambar <?php echo $j; ?>">
        <div class="caption"> fasilitisas <?php echo $j; ?></div>
      </div>
    <?php endfor; ?>
  </div>

    </div>
</div>
<a href="dashboard.php" class="btn-back">
  <i class="fas fa-arrow-left"></i> Kembali
</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
