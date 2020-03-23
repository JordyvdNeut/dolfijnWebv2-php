<title>Gastouderopvang Dol-fijn</title>
<?php
require_once "view/navigatie/header.php";
?>
<h1 id='pageTitle'>Home</h1>

<section class='col-12 row justify-content-around'>
<div class='col-8' id='content-item'>
  <h2>Waar voor staan we</h2>
  <p>
  Gastouderopvang Dol-Fijn staat voor:<br/>
  <?php
      // var_dump($subTitles->fetch(PDO::FETCH_ASSOC));
      $html = "";
      $html .= "<ul>";
    foreach($subTitles as $subTitle) {
      $html .= "<li>".$subTitle['title'] . "</li>";
    }
      $html .= "</ul>";
      echo $html;
  ?>
  <a href='<?=ROOT?>/Staatvoor/staatvoorPage'><button class='btn btn-primary'>Bekijk meer</button></a>
  </p>
</div>
</section>