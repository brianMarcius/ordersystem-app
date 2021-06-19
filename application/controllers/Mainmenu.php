<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainmenu extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->model("dishert_model");
        $this->load->model("order_model");
        $this->load->model("customer_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view("mainmenu/lockscreen.php");

        
        
    }

    public function bestSeller(){
        
        // $this->customer_model->save();

        $this->load->view("mainmenu/header.php");
        $this->load->view("mainmenu/sidebar.php");
        $this->load->view("mainmenu/bestseller.php");
        $this->load->view("mainmenu/footer.php");
    }

    public function foods(){
        
        // $this->customer_model->save();

        $this->load->view("mainmenu/header.php");
        $this->load->view("mainmenu/sidebar.php");
        $this->load->view("mainmenu/foods.php");
        $this->load->view("mainmenu/footer.php");
    }

    public function drinks(){
        
        // $this->customer_model->save();

        $this->load->view("mainmenu/header.php");
        $this->load->view("mainmenu/sidebar.php");
        $this->load->view("mainmenu/drinks.php");
        $this->load->view("mainmenu/footer.php");
    }

    public function snacks(){
        
        // $this->customer_model->save();

        $this->load->view("mainmenu/header.php");
        $this->load->view("mainmenu/sidebar.php");
        $this->load->view("mainmenu/snacks.php");
        $this->load->view("mainmenu/footer.php");
    }

}
