<?php
class Login extends CI_Controller {
  
    // public function __construct()
    // {
    //     parent::__construct();
    //     //$this->load->model('news_model');
    // }

    public function index($info = '') {
		$this->load->view('login/header2');
		$this->load->view('login/Registro');
		$this->load->view('login/footer');
    }
}