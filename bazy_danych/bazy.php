<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>użytkownicy</title>
  </head>
  <body>
    <h4>użytkownicy</h4>
    <?php
      $connect=new mysqli("localhost","root","","zsk_4cg2_baza1");
      $sql="SELECT * FROM `users`";
      $result=$connect->query($sql);
      while($rows=$result->fetch_assoc()){
        echo <<<ROW
        Id: $rows[id]<br>
        Imie: $rows[name]<br>
        nazwisko: $rows[surname]<br>
        data urodzenia: $rows[birthday]<br>
        <hr>
ROW;
      }

     ?>
  </body>
</html>
