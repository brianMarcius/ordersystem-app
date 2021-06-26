<?php

class Dishert_model extends CI_Model
{
    private $_table = "master_dish";


    public function countDishert(){
        $sql = "SELECT count(dish_id) dish from master_dish where active=1";
        $user = $this->db->query($sql)->row();
        return $user->dish;
    }

    public function showFoods(){
        $sql = "SELECT * from master_dish where category=1 and active=1";
        $foods = $this->db->query($sql)->result();
        return $foods;
    }

}
