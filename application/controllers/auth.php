<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct(){
        PARENT::__construct();
        $this->load->library('form_validation');
    }


public function index(){
  $this->form_validation->set_rules('email','Email','trim|required|valid_email');
  $this->form_validation->set_rules('password','Password','trim|required');
  if($this->form_validation->run() == false){
    $data['title']='Login Page';
    $this->load->view('templete/auth_header',$data);
    $this->load->view('auth/login');
    $this->load->view('templete/auth_footer');
  }else{
    $this->login();
  }
}

private function login(){
  $email = $this->input->post('email');
  $password = $this->input->post('password');

  $admin = $this->db->get_where('admin',['email'=> $email])->row_array();
  if($admin){
    if(password_verify($password,$admin['password'])){
      $data = [
        'email'=> $admin['email'],
      ];
      $this->session->set_userdata($data);
      redirect(base_url("CPariwisata"));
        }else{
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
      password salah
    </div>');
      redirect('auth');
    }
  }else{
    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
      Ga Bisa Gais Email Mu
    </div>');
      redirect('auth');
  }
}

public function registrasi(){
  $this->form_validation->set_rules('nama','Name','required|trim');
  $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[admin.email]',[
    'is_unique' => 'Email sudah digunakan'
  ]);
  $this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[
    'matches' => 'password dont match!',
    'min_length' => 'Password too short'
  ]);
  $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');
  if($this->form_validation->run()==false){
    $this->load->view('templete/auth_header');
    $this->load->view('auth/registrasi');
    $this->load->view('templete/auth_footer');
  }else{
      $data = [
        'nama' => $this->input->post('nama'),
        'email' => $this->input->post('email'),
        'image' => 'default.jpg',
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
      ];

      $this->db->insert('admin', $data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
      Registrasi Sukses! Silakan Login
    </div>');
      redirect('auth');
  }
   
}
}
