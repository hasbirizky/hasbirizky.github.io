<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginstyle.css">
    <title>Toko Baju</title>
</head>
<body>
    <h2>SILAHKAN LOGIN</h2>
    <form method="POST" action="login.php">
        <label for="nama">Nama : </label> 
<input type="text" id="nama" name="nama" required><br><br>
<label for="email">Email : </label>
        <input type="text" id="email" name="email" required><br><br>
<label for="no_hp">Nomor Handphone : </label>
        <input type="number" id="no_hp" name="no_hp" required><br><br>
<label for="pass">Password : </label>
        <input type="password" id="pass" name="pass" required><br><br>
<input type="submit" value="Kirim">
    </form>
</form>
</body>
</html>