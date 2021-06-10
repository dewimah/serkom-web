<?php

class CUser extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model(array('ModelPariwisata','ModelJenis'));
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table'));
		$this->load->database();
    }
    public function index(){
        $this->load->view('user/index1');
    }
}