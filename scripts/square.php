<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kwadrat</title>
  </head>
  <body>
    <h3>Kwadrat</h3>
    <!--post nieszyfrowana, wolniejsza
    get nie widoczny w pasku adresu-->
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj blok a"><br><br>
      <input type="submit" value="Oblicz">
    </form>
    <?php
if (!empty($_GET['sideA'])) {
  $sideA=str_replace(',','.',$_GET['sideA']);
  $area=pow($sideA,2);
  $obw=4*$sideA;
  echo <<<RESULT
  <hr>
  Pole kwadratu wynosi: $area cm<sub>2</sub>
  <hr>
  Obwód kwadratu wynosi: $obw
RESULT;
}
else{
  echo "wypełnij dane";
}
     ?>
  </body>
</html>
