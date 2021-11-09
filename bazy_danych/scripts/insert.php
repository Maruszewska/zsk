<?php
if(isset($_POST)){
  foreach($_POST as $key => $value){
    if(empty($value)){
      header("location: ../3_bazy_tabela_insert.php?error=wypełnij wszystkie dane");
      exit();
    }
  }
  require_once './connect.php';
  $sityid=$_POST['sityid'];
  $name=$_POST['name'];
  $surname=$_POST['surname'];
  $birthday=$_POST['birthday'];
  $sql="INSERT INTO `users` (`id`, `sityid`, `name`, `surname`, `birthday`) VALUES (NULL, '$sityid', '$name', '$surname', '$birthday')";
  $result=$connect->query($sql);
  if($connect->affected_rows==1){
    header("location: ../3_bazy_tabela_insert.php?error=dodano użytkownika");
  }
  else{
    header("location: ../3_bazy_tabela_insert.php?error=nie dodano użytkownika&addUser=");
  }

$connect->close();
}
 ?>
