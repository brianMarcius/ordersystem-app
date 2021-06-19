<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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

        // tampilkan halaman login
        $user = $this->user_model->countUser();
        $dishert = $this->dishert_model->countDishert();
        $order = $this->order_model->countOrder();
        $customer = $this->customer_model->countCustomer();
        $data  = array(
            'user' => $user,
            'dishert' => $dishert,
            'order' => $order,
            'customer' => $customer,
        );
        $this->load->view("template/header.php");
        $this->load->view("template/sidebar.php");
        $this->load->view("admin/index.php", $data);
        $this->load->view("template/footer.php");
    }

}
