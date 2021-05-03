<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('ModelMahasiswa');
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->load->database();
    }

	public function index()
	{
		//$this->load->view('welcome_message');
		$data['query']=$this->ModelMahasiswa->get_all();
		$this->load->view('mahasiswa/listmhs', $data); 
	}

	public function hello()
	{
		echo "Hello World Asik</br>";
	}
	// localhost/CIview/index.php/Mahasiswa/hello
	public function cetakID($nim,$nama)
	{
		echo "NIM: $nim </br>";
		echo "Nama: $nama </br>";
	}
	// localhost/CIview/index.php/Mahasiswa/cetakID/M31190XX/Saburo
	
	public function process_hello() //aktifkan method _remap
	{
		echo "Hello Kamu</br>";
	}
	// localhost/CIview/index.php/Mahasiswa/hello
	

	public function cetakIDview($nim,$nama)
	{
		$tahun=2021;
		$data['nim']=$nim;
		$data['nama']=$nama;
		$data['tahun']=$tahun;
		$this->load->view('Mahasiswa/detailmhs',$data);
	}// localhost/CIview/index.php/Mahasiswa/cetakIDview/M31190XX/Saburo

	public function blog()
	{
			$data = array(
			'title' => 'My Title',
			'heading' => 'My Heading',
			'message' => 'My Message'
			);

			$this->load->view('blogview', $data);
	}
	// http://localhost/CIview2/index.php/mahasiswa/blog/
	public function blog2()
        {
                $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');

                $data['title'] = "My Real Title";
                $data['heading'] = "My Real Heading";

                $this->load->view('blogview2', $data);
        }
	public function blog3()
        {
                $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
                $data['title'] = "My Real Title";
                $data['heading'] = "My Real Heading";
                $data2['cetak']=$this->load->view('blogview2', $data, TRUE);
				$this->load->view('blogview3', $data2, TRUE);
        }
	public function inputForm()
        {
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
			$this->form_validation->set_rules(
					'username', 'Username',
					'required|min_length[5]|max_length[12]',
					array(
							'required'      => 'Username Kosong'
					)
			);
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
			$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('Gender', 'Jenis Kelamin', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('mahasiswa/myform');
                }
                else
                {
						$data['username']=$_POST['username'];
						$data['password']=$_POST['password'];
						$data['nama']=$_POST['nama'];
						$data['email']=$_POST['email'];
						$data['jeniskelamin']=$_POST['jeniskelamin'];
                        $this->ModelMahasiswa->inputData($data);
						$this->load->view('mahasiswa/formsuccess', $data);
                }
        }
}
