<?php
echo "ZSK<br>";
echo "ZSK<br>";
$name="Anna";
$surname="nowak";
echo "Imię: $name";
//typy danych
//całkowity
$całkowita=10; //nazwy zmiennych w języku polskim
echo $całkowita,"<br>";
$bin=0b1011; //1
echo $bin,"<br>";
$oct=010;//8
echo $oct,"<br>";
//konkatanacja .
//interpolacja ,
echo "tekst"."tekst2","tekst3<br>";
//zmiennoprzecinkowy
$x=10.05;
//logiczny
$prawda=true; //wyświetlki 1
$fałsz=false; //nic nie wyświetli
echo $fałsz;
//składnia heredoc
echo <<<ETYKIETA
<hr>
imie i nazwisko : $name $surname <br>
poznan <br>
ETYKIETA;
$text= <<<ETYKIETA
<hr>
imie i nazwisko : $name $surname <br>
poznan <br>
ETYKIETA;
echo $text;
echo <<<'ETYKIETA'
<hr>
imie i nazwisko : $name $surname <br>
poznan <br>
ETYKIETA;
echo "Imię i nazwisko: $name, nazwa zmiennej imienia \$name";
 ?>
