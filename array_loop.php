<?php
$aplikasi[1] = 'gtAkademik';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gtPerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'eOviz';
$i=1;
do {
  echo $aplikasi[$i]."<br>";
  $i++;
} while ($i <= count($aplikasi));

?>
