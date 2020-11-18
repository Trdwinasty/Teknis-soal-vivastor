<?php
// Load file koneksi.php
include "config.php";
// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
$nilai = $_POST['nilai'];
// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO siswa(nama, nilai ) VALUES(:nama,:nilai)");
$sql->bindParam(':nama', $nama);
$sql->bindParam(':nilai', $nilai);
$sql->execute(); // Eksekusi query insert
if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: 4.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>