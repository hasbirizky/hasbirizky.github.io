<?php
  require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add</title>
  <link rel="stylesheet" href="css/add-edit.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <form action="addDataAksi.php" method="POST" enctype="multipart/form-data">
        <h3>Tambah Baju</h3>
        <div class="inputBox">
          <label for="">Nama Baju</label>
          <input type="text" name="nama" placeholder="John Doe" required>
        </div>
        <div class="inputBox">
          <label for="">Harga</label>
          <input type="number" name="Harga" placeholder="100000" required>
        </div>
        <div class="inputBox">
          <label for="">Ukuran</label>
          <input type="text" name="Ukuran" placeholder="XL" required>
        </div>
        <div class="inputBox">
          <label for="">Foto</label>
          <input type="file" name="foto"  required>
        </div>
        <input type="submit" value="Tambah Baju" name="tambah">
        <a href="dashboard.php">Kembali</a>
      </form>
    </div>
  </div>
</body>

</html>