<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_Model {

  function insertkaryawan($data){
    return $this->db->insert('karyawan',$data);
  }

  function view_all_karyawan(){
    $this->db->order_by("kode_karyawan");
    return $this->db->get('karyawan')->result();
  }

  function deletekaryawan($id){
    $this->db->where('kode_karyawan',$id);
    $this->db->delete('karyawan');
  }

  function editkaryawan($where,$table){
    return $this->db->get_where($table,$where);
  }

  function show_karyawan_id($data){
    $this->db->select('*');
    $this->db->from('karyawan');
    $this->db->where('kode_karyawan',$data);
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  function update_karyawan($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }
}
