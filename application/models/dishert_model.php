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

    public function showDrinks(){
        $sql = "SELECT * from master_dish where category=2 and active=1";
        $drinks = $this->db->query($sql)->result();
        return $drinks;
    }

    public function showSnacks(){
        $sql = "SELECT * from master_dish where category=3 and active=1";
        $snacks = $this->db->query($sql)->result();
        return $snacks;
    }

    public function getDishert($id){
        $sql = "SELECT * from master_dish where dish_id='$id' and active=1";
        $dishert = $this->db->query($sql)->result();
        return $dishert;
    }

    public function getData(){
        return $this->db->get($this->_table)->result();
    }
}
