<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $pass = $_POST["pass"];

    if (strlen($no_hp) < 12) {
        echo "Nomor Handphone harus memiliki minimal 10 digit.";
    } else {
        echo "Terima Kasih Telah Membuat Akun di Toko Kami Kak, $nama!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br><br>
    <a href="index.php">Pencet Untuk Kembali Ke Menu Awal</a>
</body>
</html>