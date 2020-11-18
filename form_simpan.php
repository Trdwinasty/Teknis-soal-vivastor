<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
  <h1>Tambah Data Siswa</h1>
  <form method="post" action="proses_simpan.php">
    <table cellpadding="8">
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Nilai</td>
        <td><input type="text" name="nilai"></td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Simpan">
    <a href="4.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>