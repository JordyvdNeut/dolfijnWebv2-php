<title>Agenda Dol-fijn</title>
<?php
require_once "view/navigatie/header.php";
?>
<h1 id="pageTitle">Agenda</h1>

<section class="col-12 row justify-content-around">
  <table class="table col-5">
    <?php
    foreach ($datums as $datum) {
      echo "<tr><th>" . $datum['d'] . "</th><td>" . $datum['open'] . "</td><td>" . $datum['dicht'] . "</td></tr>";
    }
    ?>
  </table>
  <div class="col-5">
    <?php var_dump($info);
    ?> <?= $info ?>
  </div>
</section>