<?php

class ModelSiswa extends CI_Model{
    public $id_siswa;
	public $nomorinduk;
    public $nama;
    public $ttl;
    public $alamat;
	public $nilaimtk;
	public $nilaiindo;
	public $nilaiing;
    public $namawali;
	public $foto;
	public $status;
    public function tampil_data(){
       // return $this->db->get('paket');
       $this->db->select('*');
       $this->db->from('datasiswa');
      // $this->db->join('destinasi','destinasi.id_wisata=paket.destinasi');		
      // $this->db->join('kelas', 'kelas.id_kelas=paket.kelas');
       $query = $this->db->get();
       return $query;
    }
    public function tampil_datasiswa(){
        return $this->db->get('datasiswa');
     }
	 
	 public function tampil_dataadmin(){
        return $this->db->get('admin');
     }

	 public function tampil_datauser(){
        return $this->db->get('user');
     }

     
     public function inputdatasiswa($data){
        $this->db->insert('datasiswa', $data);
     }
    
	 public function detail($id_siswa = NULL){
        $query = $this->db->get_where('datasiswa', array ('id_siswa' => $id_siswa))->row();
		return $query;
     }
    
    
    public function hapusdatasiswa($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function editdatasiswa($where, $table){
       return $this->db->get_where($table,$where);
    }
    
     public function updatedatasiswa($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    
    public function submitpembelian($data){
        $this->db->insert('pembelian', $data);
    }
    public function find($id){
        $result = $this->db->where('id',$id)
                            ->limit(1)
                            ->get('nama_wisata');
                if($result->num_rows() > 0){
                    return $result->row();
                }else{
                    return array();
                }
    }
}
?>
