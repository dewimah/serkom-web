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
    public function tampildatapaket(){
        $data['datapaket']=$this->ModelPariwisata->tampil_data()->result();
        $this->load->view('user/paketdata', $data);
    }
    public function formpemesanan(){
        $this->load->view('user/v_formpesan');
    }
    public function tampilpesan(){
        $data['datapaket']=$this->ModelPariwisata->tampil_data()->result();
        $this->load->view('user/v_pesan', $data);
    }
    public function tambahpesanan(){
        $tgl_pesan = $this->input->post('pesen');
        $jml_penumpang = $this->input->post('orang');
        $tgl_berangkat = $this->input->post('mangkat');
        $tgl_kembali = $this->input->post('bali');
    
        $data = array (
            'tanggal_pemesanan'=>$tgl_pesan,
            'jml_penumpang'=>$jml_penumpang,
            'tgl_berangkat'=>$tgl_berangkat,
            'tgl_kembali'=>$tgl_kembali
        );
        $this->ModelPariwisata->inputpesan($data);
        $this->load->view('admin/formsuccess', $data);
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
    public function logout(){
        $this->session->sess_destroy();
        redirect('beranda');
    }
}