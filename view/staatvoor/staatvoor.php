<title>Staat voor</title>
<?php
require_once "view/navigatie/header.php";
?>
<h1 id='pageTitle'>Dol-Fijn staat voor</h1>

<section class='col-12 row justify-content-around'>
<?php
  $html = "";
  foreach($staanvoor as $staatvoor){
    $html .= "<div class='col-5' id='content-item'>";
    $html .= "<h2>$staatvoor[title]</h2>";
    $html .= "<p>$staatvoor[text]</p>";
    $html .= "</div>";
  }
  echo $html;
?>
</section>

<?php
require_once "view/navigatie/footer.php";
?>