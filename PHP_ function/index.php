<?php

 $fruits = ["りんご"=>100, "みかん"=>150, "もも"=>500];
 $quantity = [3, 1, 6];
 $i=0;

  function Cash ($value, $quantity) {
    $cash = $value * $quantity;
    return $cash;
  }

  foreach ($fruits as $key=>$value) {
    $price = Cash ($value, $quantity[$i]);
    echo $key.'は'.$price.'円です。';
    echo '<br>';
    $i++;
  }
?>