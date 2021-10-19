<?php
require_once '../funkcje/funkcja.php';
show();
if(!empty($_POST['name'])){
echo "<hr>Imię: ".show_name($_POST['name'])."<hr>";
echo "Walidacja: ".stringValidate($_POST['name'])." Długość: ".strlen(stringValidate($_POST['name']))."<hr>";
}
 ?>
