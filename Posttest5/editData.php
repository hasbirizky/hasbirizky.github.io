<?php
  require "koneksi.php";

  $id = $_GET["id"];
  $sql = "SELECT * FROM tb_baju WHERE id = $id";
  $query = mysqli_query($koneksi, $sql);
  $row = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <link rel="stylesheet" href="css/add-edit.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <form action="editDataAksi.php?id=<?php echo $row["id"] ?>" method="POST" enctype="multipart/form-data">
        <h3>Edit Baju</h3>
        <div class="inputBox">
          <label for="">Nama</label>
          <input type="text" name="nama" value="<?php echo $row["Nama"] ?>" required>
        </div>
        <div class="inputBox">
          <label for="">Harga</label>
          <input type="number" name="harga" value="<?php echo $row["Harga"] ?>" required>
        </div>
        <div class="inputBox">
          <label for="">Ukuran</label>
          <input type="text" name="ukuran" value="<?php echo $row["Ukuran"] ?>" required>
        </div>
        <div class="inputBox">
          <label for="">Foto</label>
          <input type="file" name="foto" value="<?php echo $row["foto"] ?>" required>
        </div>
        <input type="submit" value="Ubah Baju" name="ubah">
        <a href="dashboard.php">Kembali</a>
      </form>
    </div>
  </div>
</body>

</html>