<?php

class Order_model extends CI_Model
{
    private $_table = "order_transaction";


    public function countOrder(){
        $sql = "SELECT count(order_id) ordercount from order_transaction where deleted_at is null";
        $order = $this->db->query($sql)->row();
        return $order->ordercount;
    }

}
