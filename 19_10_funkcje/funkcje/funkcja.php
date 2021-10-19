<?php
function show(){
  echo "show";
}

function show_name($name){
  return $name;
}
function stringValidate($name){
  $name=ucfirst(strtolower(trim($name)));
  return $name;
}
//funkcja substr
//funkcja date i getdate

 ?>
