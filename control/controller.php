<?php
namespace control;
class controller
{
  public function get_body($data,$file)
  {
    ob_start();
    require_once $file.'.php';
    return ob_get_clean();
  }


  public function registration($login,$password,$name)
  {
    $db = new database('localhost','root','','diploma');
    $db->registration($login,$password,$name);
  }
  public function login($login)
  {
    $db = new database('localhost','root','','diploma');
    $password = $db->login($login);
    if (!$password['pass']) {
      echo 'Error!!';
    }
    return $password['pass'];

  }

  public function get_labs_data($id)
  {
    $db = new database('localhost','root','','diploma');
    $data = $db->get_labs($id);
    return $data;
  }

  public function save_lab($title,$code,$file){
    $db = new database('localhost','root','','diploma');
    $data = $db->save_lab($title,$code,$file);
    return $data;

  }
  public function update_lab($old_id,$id,$title,$code,$file){
    $db = new database('localhost','root','','diploma');
    $data = $db->update_lab($old_id,$id,$title,$code,$file);
    return $data;

  }

  public function delete_lab($id){
    $db = new database('localhost','root','','diploma');
    $data = $db->delete_lab($id);
    return $data;

  }

  public function get_lab_data($lab_id){
    $db = new database('localhost','root','','diploma');
    $data = $db->get_lab_data($lab_id);
    return $data;
  }

  public function code($code){
    $symb = array("'" => "\'", '"' => '\"');
    $result = strtr($code,$symb);
    return $result;
  }

  public function decode($code){
    $symb = array(";" => ";<br><br>", "{" => "{<br>", "}" => "}<br>");
    $result = strtr($code,$symb);
    return $result;
  }

  // public function get_single($table,$id)
  // {
  //   $db = new database('localhost','root','','diploma');
  //   $data = $db->get_single($table,$id);
  //   return $data;
  // }
  // public function get_categories()
  // {
  //   $db = new database('localhost','Tonny','12345','blog');
  //   $data = $db->get_categories();
  //   return $data;
  // }
}
