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
    public function tampilpesan(){
        $data['datapaket']=$this->ModelPariwisata->tampil_data()->result();
        $this->load->view('user/v_pesan', $data);
    }
    public function struk($id_paket){
        $where = array ('id_paket' => $id_paket);
        $data['datapaket']=$this->ModelPariwisata->editData($where,'paket_wisata')->result();
        $this->load->view('user/struk',$data);
    }
    public function datamasuk(){
        $id_paket=$this->input->post('id');
        $jenis_paket=$this->input->post('jenis_wisata');
        $nama_paket = $this->input->post('nama');
        $harga_paket = $this->input->post('harga');
        $fasilitas_paket = $this->input->post('fasilitas');
        $tujuan = $this->input->post('tujuan');
        $email = $this->input->post('email');
       
        $data = array(
            'id_paket'=>$id_paket,
            'jenis_paket'=>$jenis_paket,
            'nama_paket'=>$nama_paket,
            'harga_paket'=>$harga_paket,
            'fasilitas_paket'=>$fasilitas_paket,
            'tujuan'=>$tujuan,
            'email'=>$email,
        );
        $where = array(
            'id_paket' => $id_paket
        );
        $this->ModelPariwisata->inputpesan($data);
        redirect('CUser/finish');
    }
    public function finish(){
        $this->load->view('user/finish');
    }
}