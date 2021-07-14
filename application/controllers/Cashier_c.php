<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cashier_c extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->model("dishert_model");
        $this->load->model("order_model");
        $this->load->model("customer_model");
        $this->load->library('form_validation');

        if($this->user_model->isNotLogin()) redirect(site_url('login'));

    }

    public function index()
    {

        // tampilkan halaman kitchen
        $user = $this->user_model->countUser();
        $dishert = $this->dishert_model->getData();
        $dishert2 = $this->dishert_model->countDishert();
        $order = $this->order_model->countOrder();
        $customer = $this->customer_model->countCustomer();
        $data  = array(
            'user' => $user,
            'dishert' => $dishert,
            'dishert2' => $dishert2,
            'order' => $order,
            'customer' => $customer,
        );

        $this->load->view("admin/header.php");
        $this->load->view("admin/sidebar.php");
        $this->load->view("admin/cashier.php", $data);
        $this->load->view("admin/footer.php");
        
    }

}

