<?php
class login_model extends CI_Model{

public function login($post){
  $this->db->select('*');
  $this->db->from('admin');//as user
  $this->db->where('email',$post['email']);
  $this->db->where('password',$post['password']);
  $query = $this->db->get();
  return $query;
}
public function user($post){
  $this->db->select('*');
  $this->db->from('user');//as admin
  $this->db->where('email',$post['email']);
  $this->db->where('password',$post['password']);
  $query = $this->db->get();
  return $query;
}
}
