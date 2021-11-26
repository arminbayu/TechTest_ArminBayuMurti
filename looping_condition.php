<?php
  for($i=1;$i<=50;$i++){
    $res = '';
    if(($i%3 == 0) && ($i%5 == 0)){
      $res = 'FooBar';
    }elseif ($i%3 == 0) {
      $res = 'Foo';
    }elseif ($i%5 == 0) {
      $res = 'Bar';
    }else {
      $res = $i;
    };

    echo $res."<br>";
  }
?>
