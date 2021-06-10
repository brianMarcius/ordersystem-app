<?php

class Customer_model extends CI_Model
{
    private $_table = "master_customer";


    public function countCustomer(){
        $sql = "SELECT count(customer_id) customercount from master_customer";
        $customer = $this->db->query($sql)->row();
        return $customer->customercount;
    }

    public function addCustomer(){
        
    }

}
