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
        $nama_paket = $this->input->post('nama');
        $jenis_paket = $this->input->post('jenis_wisata');
        $harga_paket = $this->input->post('harga');
        $foto_paket = $this->image();
        $fasilitas_paket = $this->input->post('fasilitas');
        $status_paket = $this->input->post('status');
    
        $data = array (
            'id_paket'=>$id_paket,
            'nama_paket'=>$nama_paket,
            'jenis_paket'=>$jenis_paket,
            'harga_paket'=>$harga_paket,
            'foto_paket'=>$foto_paket,
            'fasilitas_paket'=>$fasilitas_paket,
            'status_paket'=>$status_paket,
        );
        $this->ModelPariwisata->inputData($data);
        $this->load->view('admin/formsuccess', $data);
    }
    public function image(){
            
        $config['upload_path'] = './assets/foto';
        $config['file_name'] = $this->id_paket;
        $config['overwrite'] = true;
        $this->load->library('upload',$config);
      
       //$this->load->library('upload', $config);
        if($this->upload->do_upload('foto_paket')){
            //$return=array('result'=>'succes','file'=>$this->upload->data(),'error'=>'');
            return $this->upload->data("file_name");
            //echo "Foto Gagal Di Upload"; die();
            //$foto_paket="";
        }
           // $return = array('result'=>'failed','file'=>'','error'=>$this->upload->display_errors());
           return "default.jpg";
           //$foto_paket=$this->upload->file_name;
        }
    public function hapus($id_paket){
        $where = array ('id_paket'=> $id_paket);
        $this->ModelPariwisata->hapus_data($where, 'paket_wisata');
        redirect('CPariwisata/index');
    }
    public function edit($id_paket){
        $where = array ('id_paket' => $id_paket);
        $data['datapaket']=$this->ModelPariwisata->editData($where,'paket_wisata')->result();
        $this->load->view('templete/header');
        $this->load->view('templete/sidebar');
		$this->load->view('v_edit', $data);
        $this->load->view('templete/footer');
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
}
?>