<?php
include 'db.php';

$kabkota = $pdo->query("SELECT * FROM kabkota")->fetchAll();
$jenis = $pdo->query("SELECT * FROM jenis_faskes")->fetchAll();
$kategori = $pdo->query("SELECT * FROM kategori")->fetchAll();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $stmt = $pdo->prepare("INSERT INTO faskes (nama, nama_pengelola, alamat, website, email, rating, kabkota, longitude, latitude, jenis_faskes, kategori)
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $_POST['nama'],
        $_POST['nama_pengelola'],
        $_POST['alamat'],
        $_POST['website'],
        $_POST['email'],
        $_POST['rating'],
        $_POST['kabkota'],
        $_POST['longitude'],
        $_POST['latitude'],
        $_POST['jenis_faskes'],
        $_POST['kategori']
    ]);
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tambah Faskes</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-semibold mb-6">Tambah Fasilitas Kesehatan</h2>
    <form method="POST" class="space-y-4">

      <?php
      $fields = [
        "nama" => "Nama",
        "nama_pengelola" => "Nama Pengelola",
        "alamat" => "Alamat",
        "website" => "Website",
        "email" => "Email",
        "rating" => "Rating",
        "longitude" => "Longitude",
        "latitude" => "Latitude"
      ];

      foreach ($fields as $name => $label) {
        echo "<div>
                <label class='block mb-1'>$label</label>
                <input name='$name' required class='w-full p-2 border rounded' />
              </div>";
      }
      ?>

      <div>
        <label class="block mb-1">Kabupaten/Kota</label>
        <select name="kabkota" required class="w-full p-2 border rounded">
          <option value="">-- Pilih Kab/Kota --</option>
          <?php foreach ($kabkota as $k) echo "<option value='{$k['id']}'>{$k['nama']}</option>"; ?>
        </select>
      </div>

      <div>
        <label class="block mb-1">Jenis Faskes</label>
        <select name="jenis_faskes" required class="w-full p-2 border rounded">
          <option value="">-- Pilih Jenis --</option>
          <?php foreach ($jenis as $j) echo "<option value='{$j['id']}'>{$j['nama']}</option>"; ?>
        </select>
      </div>

      <div>
        <label class="block mb-1">Kategori</label>
        <select name="kategori" required class="w-full p-2 border rounded">
          <option value="">-- Pilih Kategori --</option>
          <?php foreach ($kategori as $c) echo "<option value='{$c['id']}'>{$c['nama']}</option>"; ?>
        </select>
      </div>

      <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded">Simpan</button>
      <a href="index.php" class="ml-4 text-gray-600 hover:underline">Kembali</a>
    </form>
  </div>
</body>
</html>
