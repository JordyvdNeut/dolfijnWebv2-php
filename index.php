<!DOCTYPE html>
<html lang="nl">
<?php
require_once "config.php";
require_once "controller/router.php";
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv=" X-UA-Compatible" content="ie=edge">
  <!-- refreshed de pagina elke seconde -->
  <!-- <meta http-equiv="refresh" content="1"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <?php  $cssUrl = ROOT . "/view/styling/style.css";  ?>
  <link rel="stylesheet" type="text/css" href="<?= $cssUrl ?>">
</head>

<body>

  <?php
  $Router = new RouterController(ROOT);
  if (isset($Router->error));
  ?>

</body>

</html>