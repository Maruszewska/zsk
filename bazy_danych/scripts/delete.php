<?php
if($_GET['id']){
  require_once './connect.php';
  $idik=$_GET['id'];
  $sql="DELETE from `users` where id=$idik";
  $result=$connect->query($sql);
  if($connect->affected_rows>0){
    echo "usunięto $connect->affected_rows wierszy";
  }
  header("location: ../3_bazy_tabela_delete.php?delete=$idik");

}
else{
  header('location: ../3_bazy_tabela_delete.php');
}
 ?>
