<?php

class Dishert_model extends CI_Model
{
    private $_table = "master_dish";


    public function countDishert(){
        $sql = "SELECT count(dish_id) dish from master_dish where active=1";
        $user = $this->db->query($sql)->row();
        return $user->dish;
    }

}
