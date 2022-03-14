<?php
$text = <<<SCHOOL
  ZSŁ - Zespół Szkół Łączności
  <br>
SCHOOL;

  echo "$text<br>";
  echo nl2br($text);

  $name="jANusZ";
  echo "$name<br>";
  echo strtolower($name);
  echo "<br>";
  echo strtoupper($name);
  $surname = "bąk";
  echo "<br>";
  echo strtoupper($surname);
  echo "<br>";
  echo mb_strtoupper($surname);
  $text = "jANusZ koWAlsKi";
  echo $text;
  echo "<br>";
  echo mb_strtolower($text);
  echo "<br>";
  echo ucfirst(mb_strtolower($text));
  echo "<br>";
  echo ucwords(mb_strtolower($text));
  echo "<br>";
  echo "<br>";
  $lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

  echo $lorem;
  echo "<br>";
  echo "<br>";
  echo wordwrap($lorem, 40, "<br>");

ob_Clean();

$name = "   Maksymilian        ";
echo "Długość imienia $name wynosi: ".strlen($name)."<br>";
echo "Długość imienia ".ltrim($name)." wynosi: ".strlen(ltrim($name))."<br>"; //usuwanie spacji z lewej
echo "Długość imienia ".rtrim($name)." wynosi: ".strlen(rtrim($name))."<br>"; //usuwanie spacji z prawej
echo "Długość imienia ".trim($name)." wynosi: ".strlen(trim($name))."<br>"; //usuwanie spacji z obu
 ?>
