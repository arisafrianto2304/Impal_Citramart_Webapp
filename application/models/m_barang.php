<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

  function insertbarang($data){
    return $this->db->insert('barang',$data);
  }

  function view_all_barang(){
    $this->db->order_by("kode_barang");
    return $this->db->get('barang')->result();
  }

  function deletebarang($id){
    $this->db->where('kode_barang',$id);
    $this->db->delete('barang');
  }

  function editbarang($where,$table){
    return $this->db->get_where($table,$where);
  }

  function show_barang_id($data){
    $this->db->select('*');
    $this->db->from('barang');
    $this->db->where('kode_barang',$data);
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  function update_barang($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }
}
