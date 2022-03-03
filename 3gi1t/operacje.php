<?php

echo PHP_VERSION;
echo "<br>";
echo 2**10;


$x = 10;
$y=5;
echo "<br>";
echo $x<=>$y;

$x=1;
$y=1.0;

echo gettype($x);
echo "<br>";

echo gettype($y);

echo "<br>";
if ($x==$y) {
  echo "równe";
}
else {
  echo "różne";
}


echo "<br>";
if ($x===$y) {
  echo "Identyczne";
}
else {
  echo "Nieidentyczne";
}


//preinklementacja ++$i
//postinlementacja $i++
//preinlementacja --$i
//postinklementacja $i--


$x = 1;
echo "<br>";
echo $x; //1
echo "<br>";
$x=$x++;
echo "<br>";
echo $x; //1
echo "<br>";
$x=$x++;
echo "<br>";
echo $x; //2
echo "<br>";
$y=$x++;
echo "<br>";

echo $x; //2
echo "<br>";
echo $y;//3
echo "<br>";
$y=$x++;
echo "<br>";
echo $x; //2
echo "<br>";
echo $y; //3






 ?>
