<?php
echo PHP_VERSION;
echo 2**10;
$x=1;
$y=10;
echo $x<=>$y; //które wieksze?
//równe
$x=1;
$y=0.1;

echo gettype($x);
echo gettype($y);
//identyczne
if($x===$y){
  echo "identyczne";
}
else{
  echo "różne";
}
$x=10;
$x=$x++; //10
echo $x,"<br>";
$x=++$x;//11
echo $x,"<br>";
$y=$x++;//11
echo $x,"<br>",$y;//12,11
$x=1;
echo $x;//1
$x=$x++;
echo $x;//1
$x=++$x;
echo $x;//2
$y=++$x;
echo $x;//3
echo $y;//3
$y=$x++;
echo $x;//4
echo $y;//3
?>
