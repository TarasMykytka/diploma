<?php session_start();
require_once('vendor/autoload.php');

use Control\controller;
//use Model\database;

$controller = new controller();

if(isset($_GET['lab']) && $_GET['lab'] !='' && $_GET['lab'] != NULL)
{
  $id = $_GET['lab'];
  $data = $controller->get_labs($id);
  echo $controller->get_body($data,'lab');

}else{
  $data = $controller->get_labs();
  echo $controller->get_body($data,'main');
}
