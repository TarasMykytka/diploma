<?php
namespace model;
class database
{
  public $db;

  public function get_labs($id)
  {
    $file = file('./labs.data');
    $data = [];
    foreach ($file as $line) {
      $data[] = str_getcsv($line);
    }
    if(isset($id) && $id !='' && $id != NULL)
    {
        $result = $data[$id-1];
    }
    else
    {
         $result = $data;
    }
    return $result;
  }
}
