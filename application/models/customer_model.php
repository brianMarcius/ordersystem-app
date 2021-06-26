<?php

class Customer_model extends CI_Model
{
    private $_table = "master_customer";

    public $customer_name;
    


    public function countCustomer(){
        $sql = "SELECT count(customer_id) customercount from master_customer";
        $customer = $this->db->query($sql)->row();
        return $customer->customercount;
    }

    public function save()
    {
        $post = $this->input->post();
        $this->customer_name = $post['customer_name'];
        $this->session->set_userdata(['customer_logged' => $this->customer_name]);
        return $this->db->insert($this->_table, $this);
    }

    public function quit(){
        return $this->session->userdata('customer_logged') === null;
    }


}
