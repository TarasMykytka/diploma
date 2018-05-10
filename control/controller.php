<?php
namespace control;

use Model\database;

class controller
{
    public function get_body($data, $file)
    {
        ob_start();
        require_once 'view/'.$file.'.php';
        return ob_get_clean();
    }

    public function get_labs($id = NULL)
    {
        $db = new database();
        $data = $db->get_labs($id);
        return $data;
    }
}