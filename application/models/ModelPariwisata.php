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
       $this->db->join('destinasi','destinasi.id_wisata=paket.destinasi');		
       $this->db->join('kelas', 'kelas.id_kelas=paket.kelas');
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
            $this->db->insert('pemesanan', $data);
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