<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prostokąt</title>
  </head>
  <body>
    <h3>Prostokąt</h3>
    <!--post nieszyfrowana, wolniejsza
    get nie widoczny w pasku adresu-->
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj blok a"><br><br>
      <input type="text" name="sideB" placeholder="Podaj blok b"><br><br>
      <input type="submit" value="Oblicz">
    </form>
    <?php
if (!empty($_GET['sideA'])&&!empty($_GET['sideB'])) {
  $sideA=str_replace(',','.',$_GET['sideA']);
  $sideB=str_replace(',','.',$_GET['sideB']);
  $area=$sideA*$sideB;
  $obw=2*$sideA+2*$sideB;
  echo <<<RESULT
  <hr>
  Pole prostokąta wynosi: $area
  <hr>
  Obwód prostokąta wynosi: $obw
RESULT;
}
else{
  echo "wypełnij dane";
}
     ?>
  </body>
</html>
