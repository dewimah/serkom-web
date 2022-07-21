<?php

class CAdmin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model(array('ModelSiswa'));
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table','session'));
		$this->load->database();
    }
    public function index(){
		$this->load->view('inputdata');
		 }

	public function tambah_aksi(){
		$this->load->library('form_validation');
		$siswa=$this->ModelSiswa;
		$this->form_validation->set_rules(
			'nama', 'nama',
			
			array(
					'required'      => 'Username Kosong'
			)
	);
		
			$id_siswa = $this->input->post('id');
			$nomorinduk = $this->input->post('noin');
			$nama = $this->input->post('nama');
			$ttl = $this->input->post('ttl');
			$alamat = $this->input->post ('alamat');
			$nilaimtk = $this->input->post('mtk');
			$nilaiindo = $this->input->post('indo');
			$nilaiing = $this->input->post('ing');
			$namawali = $this->input->post('wali');
			$status = $this->input->post('status');
			$foto = $_FILES['foto'];
			if ($foto=''){}else{
			$config['upload_path']          = 'assets/serkom';
			$config['allowed_types']        = 'png';

			$this->load->library('upload');
			$this->upload->initialize ($config);
			if ( !$this->upload->do_upload('foto')){
				echo "upload gagal";die();
			}else{
				$foto=$this->upload->data('file_name');
			}
		}
			
			$data = array (
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
				'foto'=>$foto,
			);
			$this->ModelSiswa->inputdatasiswa($data);
			return 'auth/user';
			//$this->load->view('auth/loginser');
			}

		
    public function detail($id_paket){
        $this->load->model('ModelPariwisata');
        $detail = $this->ModelPariwisata->detailData($id_paket);
        $data['detail']=$detail;

        $this->load->view('templete/header');
        $this->load->view('templete/sidebar');
		$this->load->view('detail', $data);
        $this->load->view('templete/footer');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('beranda');
    }
}
?>
