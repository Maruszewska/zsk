<?php
//echo '<pre>';
//print_r($_POST);
//echo '</pre>';
if (!empty($_POST['name']) && !empty($_POST['geo'])) {
  switch ($_POST['geo']) {
    case 'kwadrat':
      //echo 'kwadrat';
      header('location:./square.php');
      break;
    case 'prostokąt':
        //echo 'prostokąt';
        header('location:./rectangle.php');
      break;
  }
}
else {
  ?>
  <script>
  history.back();
  </script>
  <?php
}
 ?>
