<?php
$mysqli = new mysqli("localhost","root","","test");

// Check connection
if ($mysqli->connect_error) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}

$sql = "SELECT `tb_mahasiwa_nilai`.*, `tb_matakuliah`.*, `tb_mahasiswa`.*
FROM `tb_mahasiwa_nilai`
LEFT JOIN `tb_matakuliah`
ON `tb_mahasiwa_nilai`.mk_id=`tb_matakuliah`.mk_id
LEFT JOIN `tb_mahasiswa`
ON `tb_mahasiwa_nilai`.mhs_id = `tb_mahasiswa`.mhs_id
WHERE `tb_matakuliah`.mk_kode='MK303'
ORDER BY `tb_mahasiwa_nilai`.nilai DESC
LIMIT 1";
// $sql = "SELECT * FROM tb_mahasiswa";
$res = $mysqli->query($sql);
$data = [];
if ($res->num_rows > 0) {
  while($row = $res->fetch_assoc()) {
    array_push($data, $row);
  }
} else {
  echo "0 results";
}
$mysqli->close();

echo "Nama : ".$data[0]['mhs_nama']."<br>";
echo "Nilai : ".$data[0]['nilai']."<br>";
echo "Mata Kuliah : ".$data[0]['mk_nama']."<br>";
?>
