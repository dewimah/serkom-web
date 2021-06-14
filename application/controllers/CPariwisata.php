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
            //$validation = $this->form_validation;
            //$validation->set_rules($product->rule());
               // if ($validation->run())
                {
                   // $this->tambah_aksi();
                       // $this->session->set_flashdata('success','berhasil disimpan');
                }
               // $this->load->view->v_paket;
            
                
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
        $product=$this->ModelPariwisata;
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
    /*public function image(){
        if($this->input->post('upload') != NULL ){ 
            $data = array(); 
            if(!empty($_FILES['file']['name'])){ 
               // Set preference 
                $config['upload_path']          = '/assets/img/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                //$config['max_size']             = 100;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;
                $config['file_name']            = $_FILES['file']['name'];

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file'))
                {
                    //$uploaddata = array('upload_data' => $this->upload->data());
                    $uploaddata = $this->upload->data();
                    $filename = $uploaddata['file_name'];
                    $this->load->view('admin/formsucces', $data);   
                    // $error = array('error' => $this->upload->display_errors());

                      //echo "Gambar gagal di upload";
                }
                else
                {
                       
                }
        }
    }
}*/
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
        $this->ModelPariwisata->hapus_data($where, 'destinasi');
        redirect('CPariwisata/datakkelas');
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
    public function update(){
        $id_paket=$this->input->post('id');
        $jenis_paket=$this->input->post('jenis_wisata');
        $nama_paket = $this->input->post('nama');
        $harga_paket = $this->input->post('harga');
        $foto_paket = $this->input->post('foto');
        $fasilitas_paket = $this->input->post('fasilitas');
        $status_paket = $this->input->post('status');

        $data = array(
            'id_paket'=>$id_paket,
            'jenis_paket'=>$jenis_paket,
            'nama_paket'=>$nama_paket,
            'harga_paket'=>$harga_paket,
            'foto_paket'=>$foto_paket,
            'fasilitas_paket'=>$fasilitas_paket,
            'status_paket'=>$status_paket,
        );
        $where = array(
            'id_paket' => $id_paket
        );
        $this->ModelPariwisata->updateData($where, $data, 'paket_wisata');
        redirect('CPariwisata/index');
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