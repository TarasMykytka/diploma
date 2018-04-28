<?php
namespace model;
class database
{
  public $db;
  public function __construct($host,$login,$pass,$db)
  {
    $this->db = mysqli_connect($host,$login,$pass,$db);
    return $this->db;
  }

  public function get_labs($id)
  {
    if(isset($id) && $id !='' && $id != NULL){
      $sql = "SELECT * FROM `labs` WHERE `id`=$id";
      $data = mysqli_query($this->db,$sql);
      if (!$data)
      {
        echo "error!!!";
      }
      else
      {
        $result[0] = mysqli_fetch_assoc($data);
      }
    }else{
      $sql = "SELECT * FROM `labs` ";
      $data = mysqli_query($this->db,$sql);
      if (!$data)
      {
        echo "error!!!";
      }
      else
      {
//        for($i=0;$i<mysqli_num_rows($data);$i++){
//            $result[] = mysqli_fetch_assoc($data);
//        }
         return $result = mysqli_fetch_all($data,MYSQLI_ASSOC);
      }
    }
    return $result;
  }

  public function get_lab_data($lab_id)
  {
    $sql = "SELECT * FROM `labs` WHERE id=$lab_id";
    $data = mysqli_query($this->db,$sql);
    return mysqli_fetch_assoc($data);
  }

  public function save_lab($title,$code,$file){
      $sql = "INSERT INTO labs(title,code,file) VALUES('$title','$code','$file')";
      $data = mysqli_query($this->db,$sql);
      if (!$data)
      {
          echo "Error!!!";
      } else {
          return true;
      }
    }
  public function delete_lab($id){
      $sql = "DELETE FROM labs WHERE id='$id'";
      $data = mysqli_query($this->db,$sql);
      if (!$data)
      {
          echo "Error!!!";
      } else {
          return true;
      }
    }
  public function update_lab($old_id,$id,$title,$code,$file){
      if ($old_id != $id) {
        $sql = "UPDATE labs SET title='$title', code='$code' , id='$id',file='$file' WHERE id='$old_id'";
      } else {
        $sql = "UPDATE labs SET title='$title', code='$code',file='$file' WHERE id='$id'";
      }
      $data = mysqli_query($this->db,$sql);

      if (!$data)
      {
          echo "Error!!!";
      } else {
          return true;
      }
    }

    public function registration($login,$pass)
    {
      $sql = "INSERT INTO users VALUES ('','$login','$pass')";
      mysqli_query($this->db, $sql);
    }

    public function login($login)
    {
      $sql = "SELECT pass FROM users WHERE login = '$login'";
      $data = mysqli_query($this->db, $sql);
      $result = mysqli_fetch_array($data,MYSQLI_ASSOC);
      return $result;
    }

  // public function get_single($table,$id)
  // {
  //   $sql = "SELECT * FROM $table WHERE id = '$id'";
  //   $data = mysqli_query($this->db,$sql);
  //   if (!$data)
  //   {
  //     return false;
  //   }
  //   else
  //   {
  //     return mysqli_fetch_all($data,MYSQLI_ASSOC);
  //   }
  // }
  // public function get_categories()
  // {
  //     $sql = "SELECT * FROM `categories`";
  //     $data = mysqli_query($this->db;$sql);
  //     if (!$data) {
  //       echo "Error!";
  //     } else {
  //       return $data;
  //     }
  // }
  // public function get_post_by_category($category_id)
  // {
  //   $sql = "SELECT * FROM `posts` WHERE `category_id` = '$category_id'";
  //   $data = mysqli_query($this->db;$sql);
  //   if (!$data) {
  //     echo "Error!";
  //   } else {
  //     return $data;
  //   }
  // }
}
