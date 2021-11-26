<form method="post" action="operator_logic.php">
  <label for="fname">Nilai Pertama</label><br>
  <input type="number" id="first" name="first"><br>
  <label for="lname">Nilai Kedua</label><br>
  <input type="number" id="second" name="second">
  <input type="submit" value="Proses" name="proses">
</form>

<?php
  if(!empty($_POST['first'])){
    $res = 0;
    $num = $_POST['second'];
    while ($_POST['first'] >= $num) {
      $res++;
      $num = $num + $_POST['second'];
    }
    echo "<br>Hasil = ".$res;
  }
?>
