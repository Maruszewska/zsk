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
      require_once './scripts/connect.php';
      $sql="SELECT * FROM `users`";
      $result=$connect->query($sql);
      if(isset($_GET['delete'])){
        echo "usunięto rekord o id ".$_GET['delete'];
      }
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
        <td><a href="./scripts/delete.php?id=$rows[id]">usuń</a> </td>
        </tr>
ROW;
      }
echo "</table>";
$connect->close();
     ?>

  </body>
</html>
