<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelMahasiswa extends CI_Model {

    public $username;
    public $password;
    public $nama;
    public $email;
    public $jeniskelamin;

    public function inputData($data)
    {       /*
            $this->username    = $_POST['username']; // please read the below note
            $this->content  = $_POST['content'];
            $this->date     = time();
            */
            $this->db->insert('mahasiswa', $data);
            //koma pertama nama table database
    }

    public function get_all()
    {
        $query = $this->db->get('mahasiswa');
        return $query;
          
    }

    public function get_last_ten_entries()
    {
            $query = $this->db->get('entries', 10);
            return $query->result();
    }

    

    public function update_entry()
    {
            $this->title    = $_POST['title'];
            $this->content  = $_POST['content'];
            $this->date     = time();

            $this->db->update('entries', $this, array('id' => $_POST['id']));
    }


}

