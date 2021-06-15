<?php

class ModelPariwisata extends CI_Model{
    public $id;
    public $nama;
    public $jenis;
    public $harga;
    public $foto;
    public $fasilitas;

    public function tampil_data(){
       // return $this->db->get('paket');
       $this->db->select('*');
       $this->db->from('paket');
       $this->db->join('destinasi','destinasi.id_wisata=paket.destinasi','right');		
       $this->db->join('kelas', 'kelas.id_kelas=paket.kelas','right');
       $query = $this->db->get();
       return $query;
    }
    public function tampil_destinasi(){
        return $this->db->get('destinasi');
     }
     public function tampil_kelas(){
        return $this->db->get('kelas');
     }
     public function tampil_pelanggan(){
        return $this->db->get('user');
     }
     public function tampil_pesan(){
        return $this->db->get('pemesanan');
     }
     public function inputDestinasi($data){
        $this->db->insert('destinasi', $data);
     }
     public function inputKelas($data){
        $this->db->insert('kelas', $data);
     }
     public function inputPelanggan($data){
        $this->db->insert('user', $data);
     }
    public function get_all2()
    {
        $this->db->select('*');
        $this->db->from('paket');
        $this->db->join('destinasi','destinasi.id_wisata=paket.destinasi');
        $this->db->join('kelas', 'kelas.id_kelas=paket.kelas');
        $this->db->order_by('destinasi ASC');
        $query = $this->db->get();
        return $query;
          
    }
   /*public function get_all3(){
        $this->db->table('paket')
        ->join('destinasi','destinasi.id_wisata=paket.destinasi')
        ->join('kelas', 'kelas.id_kelas=paket.kelas')
    }*/
    public function inputData($data)
    {      
            $this->db->insert('paket', $data);
            //koma pertama nama table database
    }
    public function inputpesan($data)
    {      
            $this->db->insert('pesan', $data);
            //koma pertama nama table database
    }
    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function editdata($where, $table){
       return $this->db->get_where($table,$where);
    }
    public function editDestinasi($where, $table){
        return $this->db->get_where($table,$where);
     }
     public function editKelas($where, $table){
        return $this->db->get_where($table,$where);
     }
     public function editPelanggan($where, $table){
        return $this->db->get_where($table,$where);
     }
     public function updateDestinasi($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function updateKelas($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function updateData($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function updatePelanggan($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function detailData($id_paket=null){
        $query = $this->db->get_where('paket',array('id_paket'=>$id_paket))->row();
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