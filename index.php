<?php session_start();
require_once('vendor/autoload.php');

use Phpml\Classification\KNearestNeighbors;

$classifier = new KNearestNeighbors();
use Controller\controller;
use Model\database;

$controller = new controller();


define("LABS" , $_SERVER['DOCUMENT_ROOT'] . '/labs/',true) ;
if(isset($_POST['registration_submit']))
{
  $login = $_POST['login'];
  $password = md5($_POST['password']);
  $controller->registration($login,$password);
}
if(isset($_POST['login_submit']))
{
  $login = $_POST['login'];
  $password = md5($_POST['password']);
  if ($password == ($controller->login($login)))
  {
    $_SESSION['login'] = $login;
  }
}
if (isset($_POST['update_btn'])) {
  $old_id = $_POST['old_id'];
  $id = $_POST['id'];
  $title = $_POST['title'];
  $code_pv = strval($_POST['code']);
  $symb = array("'" => "\'", '"' => '\"',"<" => "&lt",">" => "&gt");
  $code = strtr($code_pv,$symb);
  //file
  $target_File = LABS . basename($_FILES['lab_doc']['name']);
  $file = 0;
  $file_path = LABS . '/lab' .$key['id'].'.docx';
  if (move_uploaded_file($_FILES['lab_doc']['tmp_name'], $target_File) || file_exists($file_path)) {
    $file = 1;
  }
  $controller->update_lab($old_id,$id,$title,$code,$file);
}
if (isset($_POST['delete_btn'])) {
  $id = $_POST['id'];
  $controller->delete_lab($id);
  unset($_POST);
}
if (isset($_POST['save_btn'])) {
  $title = $_POST['title'];
  $code_pv = strval($_POST['code']);
  $symb = array("'" => "\'", '"' => '\"',"<" => "&lt",">" => "&gt");
  $code = strtr($code_pv,$symb);
  $controller->save_lab($title,$code,$file);
}



if(isset($_GET['lab']) && $_GET['lab'] !='' && $_GET['lab'] != NULL){
  $id = $_GET['lab'];
  $data = $controller->get_labs_data($id);
  echo $controller->get_body($data,'view/lab');

}elseif(isset($_GET['ins'])){

  if (isset($_SESSION['login'])) {
    if(isset($_POST['logOut'])){
      unset($_SESSION['login']);
      echo $controller->get_body(NULL,'view/login');
    }

    $id = $_GET['ins'];
    $data = $controller->get_labs_data($id);
    echo $controller->get_body($data,'view/db');
}else{
  echo $controller->get_body(NULL,'view/login');

}

}else{
  $data = $controller->get_labs_data(null);
  echo $controller->get_body($data,'view/main');
//  echo $controller->get_body(null,'view/main');
}
