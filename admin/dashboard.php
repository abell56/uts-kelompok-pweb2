<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-sky-900 text-white p-6">
      <h2 class="text-2xl font-bold mb-6">Admin Faskes</h2>
      <nav>
        <ul>
          <li class="mb-4">
            <a href="dashboard.php" class="block px-4 py-2 rounded bg-blue-600 hover:bg-blue-500">Daftar Faskes</a>
            <br>
            <a href="informasi_kesehatan.php" class="btn btn-success block px-4 py-2 rounded bg-blue-600 hover:bg-blue-500">Conten</a>
            <br>
            <a href="about.php" class="btn btn-success block px-4 py-2 rounded bg-blue-600 hover:bg-blue-500">About </a>
          </li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Daftar Fasilitas Kesehatan</h1>
        <a href="create.php" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Faskes</a>

        <table class="w-full mt-4 table-auto border-collapse text-sm">
          <thead>
            <tr class="bg-gray-200">
              <th class="border px-4 py-2">ID</th>
              <th class="border px-4 py-2">Nama</th>
              <th class="border px-4 py-2">Nama Pengelola</th>
              <th class="border px-4 py-2">Alamat</th>
              <th class="border px-4 py-2">Website</th>
              <th class="border px-4 py-2">Email</th>
              <th class="border px-4 py-2">Rating</th>
              <th class="border px-4 py-2">Kab/Kota</th>
              <th class="border px-4 py-2">Longitude</th>
              <th class="border px-4 py-2">Latitude</th>
              <th class="border px-4 py-2">Jenis Faskes</th>
              <th class="border px-4 py-2">Kategori</th>
              <th class="border px-4 py-2">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $stmt = $pdo->query("SELECT f.*, k.nama AS nama_kabkota, j.nama AS nama_jenis, c.nama AS nama_kategori
            FROM faskes f
            LEFT JOIN kabkota k ON f.Kabkota_id = k.id
            LEFT JOIN jenis_faskes j ON f.jenis_faskes_id = j.id
            LEFT JOIN kategori c ON f.kategori_id1 = c.id");
            while ($row = $stmt->fetch()) {
              echo "<tr>
                      <td class='border px-4 py-2'>{$row['id']}</td>
                      <td class='border px-4 py-2'>{$row['nama']}</td>
                      <td class='border px-4 py-2'>{$row['nama_pengelola']}</td>
                      <td class='border px-4 py-2'>{$row['alamat']}</td>
                      <td class='border px-4 py-2'><a href='{$row['website']}' target='_blank' class='text-blue-600 underline'>{$row['website']}</a></td>
                      <td class='border px-4 py-2'>{$row['email']}</td>
                      <td class='border px-4 py-2'>{$row['rating']}</td>
                      <td class='border px-4 py-2'>{$row['kabkota']}</td>
                      <td class='border px-4 py-2'>{$row['longitude']}</td>
                      <td class='border px-4 py-2'>{$row['latitude']}</td>
                      <td class='border px-4 py-2'>{$row['nama_jenis']}</td>
                      <td class='border px-4 py-2'>{$row['nama_kategori']}</td>
                      <td class='border px-4 py-2'>
                        <a href='edit.php?id={$row['id']}' class='text-blue-500'>Edit</a> |
                        <a href='delete.php?id={$row['id']}' class='text-red-500' onclick='return confirm(\"Yakin ingin menghapus?\")'>Delete</a>
                      </td>
                    </tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>

<!-- Footer -->
<footer class="w-full bg-sky-900 text-white text-center py-4 mt-8">
  &copy; <?php echo date("Y"); ?> Admin Faskes. All rights reserved.
</footer>
</body>

</html>