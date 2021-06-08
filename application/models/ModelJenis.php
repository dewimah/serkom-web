<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelJenis extends CI_Model {

    public $kode;
    public $jenis;

    public function get_all()
    {
        $query = $this->db->get('jenis_wisata');
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

