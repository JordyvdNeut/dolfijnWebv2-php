<?php
class RouterController
{
  public $error;
  public function __construct($rootUrl)
  {
    $uriOffset = count(explode("/", $rootUrl));
    $uriOffset += -2;
    $uri = $_SERVER["REQUEST_URI"];
    $uriArray = explode("/", $uri);
    $filteredUriArray = array_slice($uriArray, $uriOffset);
    $this->determineDestination($filteredUriArray);
  }

  private function determineDestination($filteredUriArray)
  {
    $controller = array_shift($filteredUriArray);
    $ctrlName = $controller . "Controller";
    $ctrlPath = "controller/c.$ctrlName.php";
    $method = array_shift($filteredUriArray);
    $params = $filteredUriArray;
    if (file_exists($ctrlPath)) {
      $this->sendToDestination($ctrlName, $ctrlPath, $method, $params);
    } else {
      $this->sendToDestination('HomeController', 'controller/c.HomeController.php', 'homePage', ['']);
    }
  }

  public function sendToDestination($ctrlName, $ctrlPath, $method, array $params)
  {
    try {
      require_once "$ctrlPath";
      $controller = new $ctrlName();
      $controller->$method($params);
    } catch (Error $e) {
      $this->error = $e->getMessage();
    }
  }

  public function __destruct()
  {
  }
}
