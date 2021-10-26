<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>użytkownicy</title>
    <link rel="stylesheet" href="./css/styl.css">
  </head>
  <body>
    <h4>użytkownicy</h4>
    <?php
      $connect=new mysqli("localhost","root","","zsk_4cg2_baza1");
      $sql="SELECT * FROM `users`";
      $result=$connect->query($sql);
      echo<<<table
      <table>
      <tr>
      <th>id</th>
      <th>imie</th>
      <th>nazwisko</th>
      <th>data urodzenia</th>
      </tr>

table;
      while($rows=$result->fetch_assoc()){
        echo <<<ROW
        <tr>
        <td> $rows[id]</td>
        <td> $rows[name]</td>
        <td> $rows[surname]</td>
        <td> $rows[birthday]</td>
        </tr>
ROW;
      }
echo "</table>";
     ?>
  </body>
</html>
