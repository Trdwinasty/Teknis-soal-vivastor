<html>
<head>
  <title>Soal 4</title>
</head>
<body>
  <h1>Data Siswa</h1>
  <a href="form_simpan.php">Tambah Data</a><br>
  <table border="1" width="100%">
  <tr>
    <th>Nama</th>>
    <th>Nilai</th>
  </tr>
  <?php
  include "config.php";
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM siswa");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['nilai']."</td>";
    echo "</tr>";
  }
  ?>
  </table>
  <?php
  include "config.php";
  // Buat query untuk menampilkan semua data siswa
  $sql2 = $pdo->prepare("SELECT MAX(nilai) AS nilai FROM `siswa`");
  $sql2->execute(); // Eksekusi querynya
  $q = $sql2->fetch();
  $max = $q['nilai'];
  $que = $pdo->prepare("SELECT *  FROM `siswa` WHERE nilai = '$max'");
  $que->execute();
  while($data2 = $que->fetch()){ 
	echo "Nilai tertinggi ".$data2['nama']." dengan nilai ".$data2['nilai'];
  }
  ?>
  <br>
  <?php
  include "config.php";
  // Buat query untuk menampilkan semua data siswa
  $sql3 = $pdo->prepare("SELECT MIN(nilai) AS nilai FROM `siswa`");
  $sql3->execute(); // Eksekusi querynya
  $q2 = $sql3->fetch();
  $min = $q2['nilai'];
  $que2 = $pdo->prepare("SELECT *  FROM `siswa` WHERE nilai = '$min'");
  $que2->execute();
  while($data3 = $que2->fetch()){ 
	echo "Nilai tertinggi ".$data3['nama']." dengan nilai ".$data3['nilai'];
  }
  ?>
</body>
</html>