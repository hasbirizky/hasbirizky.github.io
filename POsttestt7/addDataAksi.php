<?php
  require "koneksi.php";

  if (isset($_POST["tambah"])) {

    $nama = $_POST["nama"];
    $harga = $_POST["Harga"];
    $ukuran = $_POST["Ukuran"];
    $gambar = $_FILES["foto"]["name"];
    $gambarBaru = "$nama.png";
    $tmp = $_FILES["foto"]["tmp_name"];

    if (move_uploaded_file($tmp, 'databaseImages/'.$gambarBaru)){
      $sql = "INSERT INTO tb_baju VALUES(NULL, '$nama', '$harga', '$ukuran', '$gambarBaru' )";

      $result = mysqli_query($koneksi, $sql);
      if ($result) {
        echo "
          <script>
            alert('Data berhasil ditambah');
            document.location.href = 'dashboard.php';
          </script>
        ";
      } else {
        echo "
          <script>
            alert('Data gagal ditambah');
            document.location.href = 'dashboard.php';
          </script>
        ";
      }
    }
  }
?>