<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

  function insertadmin($data){
    return $this->db->insert('admin',$data);
  }

  function view_all_admin(){
    $this->db->order_by("username");
    return $this->db->get('admin')->result();
  }

  function deleteadmin($id){
    $this->db->where('username',$id);
    $this->db->delete('admin');
  }

  function editadmin($where,$table){
    return $this->db->get_where($table,$where);
  }

  function show_admin_id($data){
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('username',$data);
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  function update_admin($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }
}
