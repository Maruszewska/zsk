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
if(isset($_GET['error'])){
  echo $_GET['error'];
  echo "<br>";
}
if(isset($_GET['addUser'])){
  echo <<< Formadduser
  <form  action="./scripts/insert.php" method="post">
    <input type="text" name='name' placeholder="Podaj imie"><br><br>
    <input type="text" name='surname' placeholder="Podaj nazwisko"><br><br>
    <input type="date" name='birthday' > Data urodzenia <br><br>
    <select name="sityid">
Formadduser;
$a="SELECT * FROM cities order by city";
$result=$connect->query($a);
while($city=$result->fetch_assoc()){
  echo "<option value=\"$city[sityid]\">$city[city]</option>";
}
  echo <<< Formadduser
    </select><br><br>
    <input type="submit" value="dodaj użytkownika" ><br>
  </form>

Formadduser;
}
else{
  echo '<a href="./3_bazy_tabela_insert.php?addUser=">Dodaj użytkownika</a>';
}
$connect->close();
     ?>

  </body>
</html>
