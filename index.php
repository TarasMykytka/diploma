<?php session_start();
require_once('vendor/autoload.php');

use Phpml\Classification\KNearestNeighbors;

$classifier = new KNearestNeighbors();
use Controller\controller;
use Model\database;

$controller = new controller();

if(isset($_GET['lab']) && $_GET['lab'] !='' && $_GET['lab'] != NULL)
{
  $id = $_GET['lab'];
  $data = $controller->get_labs_data($id);
  echo $controller->get_body($data,'lab');

}else{
  $data = $controller->get_labs_data(null);
  echo $controller->get_body($data,'main');
}
