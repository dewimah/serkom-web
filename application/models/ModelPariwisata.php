<?php

class ModelPariwisata extends CI_Model{
    public $id;
    public $nama;
    public $jenis;
    public $harga;
    public $foto;
    public $fasilitas;

    public function tampil_data(){
        return $this->db->get('paket_wisata');
    }
    public function get_all2()
    {
        $this->db->select('*');
        $this->db->from('paket_wisata');
        $this->db->join('jenis_wisata','paket_wisata.jenis_paket = jenis_wisata.kode');
        $this->db->order_by('nama_paket ASC');
        $query = $this->db->get();
        return $query;
          
    }
    public function inputData($data)
    {      
            $this->db->insert('paket_wisata', $data);
            //koma pertama nama table database
    }
    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function editdata($where, $table){
       return $this->db->get_where($table,$where);
    }
    public function updateData($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function detailData($id_paket=null){
        $query = $this->db->get_where('paket_wisata',array('id_paket'=>$id_paket))->row();
        return $query;
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
    public function rule(){
        return[
            ['field'=>'nama',
            'label'=>'Nama',
            'rules'=>'required']
        ];
    }
}
?>