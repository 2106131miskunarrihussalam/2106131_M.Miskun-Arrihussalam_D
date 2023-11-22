<!DOCTYPE html>
<html lang="en">

<head>

    <title>registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Registrasi Users</h2>
    <form action="proses_input.php" method="POST">
        <label for="nama">Nama</label>
        <input type="text" name="nama" required>
        <label for="email">Email</label>
        <input type="email" name="email" required>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" required>
        <label for="password">password</label>
        <input type="password" name="password" required>

        <input type="submit" value="kirim">
    </form>
</body>

</html>