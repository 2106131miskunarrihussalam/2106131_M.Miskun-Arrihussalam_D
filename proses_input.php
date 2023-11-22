<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $password = $_POST["password"];

    // Lakukan validasi atau operasi lainnya sesuai kebutuhan

    // Contoh: Simpan data ke dalam database (Catatan: Ini hanya contoh, tidak disarankan untuk digunakan begitu saja)
    // Pastikan untuk menggunakan metode keamanan yang lebih baik dalam lingkungan produksi.
    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $dbname = "2106131_miskun";

    // Buat koneksi
    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk menyimpan data ke dalam tabel pengguna (user)
    $sql = "INSERT INTO user (nama, email, alamat, password) VALUES ('$nama', '$email', '$alamat', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
}
?>
