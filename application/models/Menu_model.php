<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`. `menu` 
                    FROM `user_sub_menu`
                    JOIN `user_menu`
                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
        ";

        return $this->db->query($query)->result_array();
    }
    public function keluhan()
    {
        return $this->db->get('keluhan')->result_array();
    }
    public function getKeluhan()
    {
        $query = "SELECT `user`.*, `keluhan`.* 
                  FROM `user` JOIN `keluhan`
                  ON `user`.`keluhan` = `keluhan`.`id_keluhan`
                ";
        return $this->db->query($query)->result_array();
    }
    public function akun()
    {
        $query = "SELECT `user`.*, `keluhan`.* 
        FROM `user` JOIN `keluhan`
        ON `user`.`keluhan` = `keluhan`.`id_keluhan`
      ";
        return $this->db->query($query)->result_array();
    }
}
