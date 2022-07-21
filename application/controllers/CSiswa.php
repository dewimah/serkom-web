<?php

class CSiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model(array('ModelSiswa'));
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table'));
		$this->load->database();
    }
    public function index(){
       $data['datasiswa']=$this->ModelSiswa->tampil_data()->result();
       //$this->load->view('admin/v_paket', $data); 
 
        $this->load->view('templete/header');
        $this->load->view('templete/sidebar');
		$this->load->view('v_paket', $data);
        $this->load->view('templete/footer');
    }
   
    public function hapus($id_siswa){
        $where = array ('id_siswa'=> $id_siswa);
        $this->ModelSiswa->hapusdatasiswa($where, 'datasiswa');
        redirect('CSiswa/index');
    }
   
    public function edit($id_siswa){
        $where = array ('id_siswa' => $id_siswa);
        $data['datasiswa']=$this->ModelSiswa->editdatasiswa($where,'datasiswa')->result();
        $this->load->view('templete/header');
        $this->load->view('templete/sidebar');
		$this->load->view('v_edit', $data);
        $this->load->view('templete/footer');
    }

    public function update(){
        $id_siswa=$this->input->post('id');
        $nomorinduk=$this->input->post('noin');
        $nama = $this->input->post('nama');
		$ttl=$this->input->post('ttl');
        $alamat = $this->input->post('alamat');
		$nilaimtk = $this->input->post('mtk');
		$nilaiindo = $this->input->post('indo');
		$nilaiing = $this->input->post('ing');
        $namawali = $this->input->post('wali');
		$status = $this->input->post('status');

        $data = array(
            'id_siswa'=>$id_siswa,
            'nomorinduk'=>$nomorinduk,
            'nama'=>$nama,
			'ttl'=>$ttl,
			'alamat'=>$alamat,
			'nilaimtk'=>$nilaimtk,
			'nilaiindo'=>$nilaiindo,
			'nilaiing'=>$nilaiing,
			'namawali'=>$namawali,
			'status'=>$status,
        );
        $where = array(
            'id_siswa' => $id_siswa
        );
        $this->ModelSiswa->updatedatasiswa($where, $data, 'datasiswa');
        redirect('CSiswa/index');
    }
    
    public function detail($id_siswa){
        $this->load->model('ModelSiswa');
        $detail = $this->ModelSiswa->detail($id_siswa);
        $data['detail']=$detail;

        $this->load->view('templete/header');
        $this->load->view('templete/sidebar');
		$this->load->view('detail', $data);
        $this->load->view('templete/footer');
    }
	public function dataadmin(){
        $data['admin']=$this->ModelSiswa->tampil_dataadmin()->result();
        //$this->load->view('admin/v_paket', $data); 
  
         $this->load->view('templete/header');
         $this->load->view('templete/sidebar');
         $this->load->view('dataadmin', $data);
         $this->load->view('templete/footer');
    }
	public function datasiswa(){
        $data['user']=$this->ModelSiswa->tampil_datauser()->result();
        //$this->load->view('admin/v_paket', $data); 
  
         $this->load->view('templete/header');
         $this->load->view('templete/sidebar');
         $this->load->view('datasiswa', $data);
         $this->load->view('templete/footer');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('beranda');
    }
}
?>
