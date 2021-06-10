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

public function user(){
  $this->form_validation->set_rules('email','Email','trim|required|valid_email');
  $this->form_validation->set_rules('password','Password','trim|required');
  if($this->form_validation->run() == false){
    $data['title']='Login Page';
    $this->load->view('templete/auth_header',$data);
    $this->load->view('loginuser');
    $this->load->view('templete/auth_footer');
  }else{
    $this->loginuser();
  }
}

public function login(){
    $post = $this->input->post(null, TRUE);
 if(isset($_POST['login'])){
  $this->load->model('login_model');
  $query = $this->login_model->login($post);
  if($query->num_rows()> 0){
    $row = $query->row();
    $params = array(
      'id' => $row->id,
      'level' => $row->level
    );
    $this->session->set_userdata($params);
    echo"<script>
    alert('Login sukses');
    window.location='".site_url('CPariwisata')."';
    </script>";
  }else{
    echo"<script>
    alert('Login Gagal , Username / Password Salah');
    window.location='".site_url('auth')."';
    </script>";
  }
 } 
}

public function loginuser(){
  $post = $this->input->post(null, TRUE);
if(isset($_POST['login'])){
$this->load->model('login_model');
$query = $this->login_model->user($post);
if($query->num_rows()> 0){
  $row = $query->row();
  $params = array(
    'id' => $row->id,
    'nama' => $row->nama
  );
  $this->session->set_userdata($params);
  echo"<script>
  alert('Login sukses');
  window.location='".site_url('CUser')."';
  </script>";
}else{
  echo"<script>
  alert('Login Gagal , Username / Password Salah');
  window.location='".site_url('beranda.php')."';
  </script>";
}
} 
}


public function logout(){
  $params = array('id','level');
  $this->session->unset_userdata($params);
  redirect('auth');
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
