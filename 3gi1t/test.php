<?php


$name = "Maksymililian";
$Nazwisko = "Woś";


//echo "Imię i Nazwisko: $name $Nazwisko";

//KONKATENACJA  .
echo "Imie: ".$name."<br>";
echo "<br>";
//INTERPOLACJA  ,

echo "Imie: ",$name,"<br>";

// typy danych
echo "<br>";
//boolean

$prawda = true;
$fałsz = false;
echo $prawda ;
echo $fałsz;

echo "<br>";
//int

$dec = 10;
$bin = 0b1010;
$oct = 010;
$hex = 0x10;

echo "<br>$dec";
echo "<br>$bin";
echo "<br>$oct";
echo "<br>$hex";
echo "<br>";

echo gettype($hex);
echo "<br>";
echo gettype($prawda);

//zmiennoprzecinkowe

$x = 10.2;

echo "<br>";
echo gettype($x);

$name = "Anna";
echo "<br>";
echo "<br>";
echo "Nazwa zmiennej \$name, Imię $name";


//heredoc
$surname = "Nowak";
echo <<<ETYKIETA

<br>
Imię i nazwisko: $name $surname
<hr>

ETYKIETA;


 ?>
