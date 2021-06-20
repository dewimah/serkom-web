<?php

class CPariwisata extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model(array('ModelPariwisata','ModelJenis'));
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table'));
		$this->load->database();
    }
    public function index(){
       $data['datapaket']=$this->ModelPariwisata->tampil_data()->result();
       //$this->load->view('admin/v_paket', $data); 
 
        $this->load->view('templete/header');
        $this->load->view('templete/sidebar');
		$this->load->view('v_paket', $data);
        $this->load->view('templete/footer');
    }
    public function dataKelas(){
        $data['destinasi']=$this->ModelPariwisata->tampil_destinasi()->result();
        //$this->load->view('admin/v_paket', $data); 
  
         $this->load->view('templete/header');
         $this->load->view('templete/sidebar');
         $this->load->view('admin/dataKelas', $data);
         $this->load->view('templete/footer');
    }
    public function datakkelas(){
        $data['kelas']=$this->ModelPariwisata->tampil_kelas()->result();
        //$this->load->view('admin/v_paket', $data); 
  
         $this->load->view('templete/header');
         $this->load->view('templete/sidebar');
         $this->load->view('admin/datakkelas', $data);
         $this->load->view('templete/footer');
    }
    public function datapelanggan(){
        $data['pelanggan']=$this->ModelPariwisata->tampil_pelanggan()->result();
        //$this->load->view('admin/v_paket', $data); 
  
         $this->load->view('templete/header');
         $this->load->view('templete/sidebar');
         $this->load->view('user/pelanggan', $data);
         $this->load->view('templete/footer');
    }
    public function datapesanan(){
        $data['pesan']=$this->ModelPariwisata->tampil_pesan()->result();
        //$this->load->view('admin/v_paket', $data); 
  
         $this->load->view('templete/header');
         $this->load->view('templete/sidebar');
         $this->load->view('admin/pesanan', $data);
         $this->load->view('templete/footer');
    }
    public function tambah_aksi(){
                $this->load->library('form_validation');
                $product=$this->ModelPariwisata;
                $this->form_validation->set_rules(
					'nama', 'nama',
					
					array(
							'required'      => 'Username Kosong'
					)
			);
			$this->form_validation->set_rules('harga', 'harga', 'required');
			$this->form_validation->set_rules('fasilitas', 'fasilitas', 'required');
                
        $id_paket = $this->input->post('id');
        $destinasi = $this->input->post('destinasi');
        $kelas = $this->input->post('kelas');
    
        $data = array (
            'id_paket'=>$id_paket,
            'destinasi'=>$destinasi,
            'kelas'=>$kelas,
        );
        $this->ModelPariwisata->inputData($data);
        $this->load->view('admin/formsuccess', $data);
    }

    public function tambahDestinasi(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
    
        $data = array (
            'id_wisata'=>$id,
            'nama_wisata'=>$nama,
            'alamat_wisata'=>$alamat,
        );
        $this->ModelPariwisata->inputDestinasi($data);
        $this->load->view('admin/formsuccess', $data);
    }
    public function tambahKelas(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $fasilitas = $this->input->post('fasilitas');
    
        $data = array (
            'id_kelas'=>$id,
            'nama_kelas'=>$nama,
            'harga_kelas'=>$harga,
            'fasilitas'=>$fasilitas,
        );
        $this->ModelPariwisata->inputKelas($data);
        $this->load->view('admin/formsuccess', $data);
    }
    public function tambahPelanggan(){
        $id = $this->input->post('id');
        $email = $this->input->post('email');
        $nama = $this->input->post('nama');
        $no = $this->input->post('no');

        $data = array (
            'id'=>$id,
            'email'=>$email,
            'nama'=>$nama,
            'no'=>$no,
        );
        $this->ModelPariwisata->inputPelanggan($data);
        $this->load->view('admin/formsuccess', $data);
    }
    public function hapus($id_paket){
        $where = array ('id_paket'=> $id_paket);
        $this->ModelPariwisata->hapus_data($where, 'paket');
        redirect('CPariwisata/index');
    }
    public function hapusDestinasi($id_wisata){
        $where = array ('id_wisata'=> $id_wisata);
        $this->ModelPariwisata->hapus_data($where, 'destinasi');
        redirect('CPariwisata/dataKelas');
    }
    public function hapuskelas($id_kelas){
        $where = array ('id_kelas'=> $id_kelas);
        $this->ModelPariwisata->hapus_data($where, 'kelas');
        redirect('CPariwisata/datakkelas');
    }
    public function hapuspelanggan($id){
        $where = array ('id'=> $id);
        $this->ModelPariwisata->hapus_data($where, 'user');
        redirect('CPariwisata/datapelanggan');
    }
    public function edit($id_paket){
        $where = array ('id_paket' => $id_paket);
        $data['datapaket']=$this->ModelPariwisata->editData($where,'paket')->result();
        $this->load->view('templete/header');
        $this->load->view('templete/sidebar');
		$this->load->view('v_edit', $data);
        $this->load->view('templete/footer');
    }
    public function editDestinasi($id_wisata){
        $where = array ('id_wisata' => $id_wisata);
        $data['destinasi']=$this->ModelPariwisata->editDestinasi($where,'destinasi')->result();
        $this->load->view('templete/header');
        $this->load->view('templete/sidebar');
		$this->load->view('edit_destinasi', $data);
        $this->load->view('templete/footer');
    }
    public function editKelas($id_kelas){
        $where = array ('id_kelas' => $id_kelas);
        $data['kelas']=$this->ModelPariwisata->editKelas($where,'kelas')->result();
        $this->load->view('templete/header');
        $this->load->view('templete/sidebar');
		$this->load->view('edit_kelas', $data);
        $this->load->view('templete/footer');
    }
    public function editpelanggan($id){
        $where = array ('id' => $id);
        $data['pelanggan']=$this->ModelPariwisata->editpelanggan($where,'user')->result();
        $this->load->view('templete/header');
        $this->load->view('templete/sidebar');
		$this->load->view('edit_pelanggan', $data);
        $this->load->view('templete/footer');
    }
    public function update(){
        $id_paket = $this->input->post('id');
        $destinasi = $this->input->post('destinasi');
        $kelas = $this->input->post('kelas');
    
        $data = array (
            'id_paket'=>$id_paket,
            'destinasi'=>$destinasi,
            'kelas'=>$kelas,
        );
        $where = array(
            'id_paket' => $id_paket
        );
        $this->ModelPariwisata->updateData($where, $data, 'paket');
        redirect('CPariwisata/index');
    }
    public function updateDestinasi(){
        $id_wisata=$this->input->post('id');
        $nama_wisata=$this->input->post('nama');
        $alamat_wisata = $this->input->post('alamat');

        $data = array(
            'id_wisata'=>$id_wisata,
            'nama_wisata'=>$nama_wisata,
            'alamat_wisata'=>$alamat_wisata,
        );
        $where = array(
            'id_wisata' => $id_wisata
        );
        $this->ModelPariwisata->updateDestinasi($where, $data, 'destinasi');
        redirect('CPariwisata/dataKelas');
    }
    public function updateKelas(){
        $id_kelas=$this->input->post('id');
        $nama_kelas=$this->input->post('nama');
        $harga_kelas= $this->input->post('harga');
        $fasilitas= $this->input->post('fasilitas');

        $data = array(
            'id_kelas'=>$id_kelas,
            'nama_kelas'=>$nama_kelas,
            'harga_kelas'=>$harga_kelas,
            'fasilitas'=>$fasilitas,
        );
        $where = array(
            'id_kelas' => $id_kelas
        );
        $this->ModelPariwisata->updateKelas($where, $data, 'kelas');
        redirect('CPariwisata/datakkelas');
    }
    public function updatePelanggan(){
        $id=$this->input->post('id');
        $email=$this->input->post('email');
        $nama= $this->input->post('nama');
        $no= $this->input->post('no');

        $data = array(
            'id'=>$id,
            'email'=>$email,
            'nama'=>$nama,
            'no_telp'=>$no,
        );
        $where = array(
            'id' => $id
        );
        $this->ModelPariwisata->updatePelanggan($where, $data, 'user');
        redirect('CPariwisata/datapelanggan');
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