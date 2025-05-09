<?php
include 'db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM faskes WHERE id = ?");
$stmt->execute([$id]);
$faskes = $stmt->fetch();

// Fetch options
$kabkotaStmt = $pdo->query("SELECT * FROM kabkota");
$jenisStmt = $pdo->query("SELECT * FROM jenis_faskes");
$kategoriStmt = $pdo->query("SELECT * FROM kategori");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $update = $pdo->prepare("UPDATE faskes SET 
        nama = ?, 
        nama_pengelola = ?, 
        alamat = ?, 
        website = ?, 
        email = ?, 
        rating = ?, 
        Kabkota_id = ?, 
        longitude = ?, 
        latitude = ?, 
        jenis_faskes_id = ?, 
        kategori_id1 = ? 
        WHERE id = ?");

    $update->execute([
        $_POST['nama'],
        $_POST['nama_pengelola'],
        $_POST['alamat'],
        $_POST['website'],
        $_POST['email'],
        $_POST['rating'],
        $_POST['Kabkota_id'],
        $_POST['longitude'],
        $_POST['latitude'],
        $_POST['jenis_faskes_id'],
        $_POST['kategori_id1'],  // Correct field name
        $id
    ]);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Faskes</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <form method="POST" class="max-w-2xl mx-auto bg-white p-6 rounded shadow space-y-4">
    <h2 class="text-xl font-bold mb-4">Edit Fasilitas Kesehatan</h2>

    <?php
    $fields = [
      'nama' => 'Nama',
      'nama_pengelola' => 'Nama Pengelola',
      'alamat' => 'Alamat',
      'website' => 'Website',
      'email' => 'Email',
      'rating' => 'Rating',
      'longitude' => 'Longitude',
      'latitude' => 'Latitude'
    ];

    foreach ($fields as $name => $label) {
        echo "<div>
                <label class='block font-medium mb-1'>$label</label>
                <input name='$name' value='{$faskes[$name]}' required class='w-full p-2 border rounded'>
              </div>";
    }
    ?>

    <!-- Kab/Kota Dropdown -->
    <div>
      <label class='block font-medium mb-1'>Kab/Kota</label>
      <select name="Kabkota_id" class="w-full p-2 border rounded" required>
        <?php while ($row = $kabkotaStmt->fetch()): ?>
          <option value="<?= $row['id'] ?>" <?= $row['id'] == $faskes['Kabkota_id'] ? 'selected' : '' ?>>
            <?= $row['nama'] ?>
          </option>
        <?php endwhile; ?>
      </select>
    </div>

    <!-- Jenis Faskes Dropdown -->
    <div>
      <label class='block font-medium mb-1'>Jenis Faskes</label>
      <select name="jenis_faskes_id" class="w-full p-2 border rounded" required>
        <?php while ($row = $jenisStmt->fetch()): ?>
          <option value="<?= $row['id'] ?>" <?= $row['id'] == $faskes['jenis_faskes_id'] ? 'selected' : '' ?>>
            <?= $row['nama'] ?>
          </option>
        <?php endwhile; ?>
      </select>
    </div>

    <!-- Kategori Dropdown -->
    <div>
      <label class='block font-medium mb-1'>Kategori</label>
      <select name="kategori_id1" class="w-full p-2 border rounded" required> <!-- Corrected column name -->
        <?php while ($row = $kategoriStmt->fetch()): ?>
          <option value="<?= $row['id'] ?>" <?= $row['id'] == $faskes['kategori_id1'] ? 'selected' : '' ?>>
            <?= $row['nama'] ?>
          </option>
        <?php endwhile; ?>
      </select>
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan Perubahan</button>
  </form>
</body>
</html>
