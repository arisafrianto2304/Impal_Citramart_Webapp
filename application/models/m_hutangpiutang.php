<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hutangpiutang extends CI_Model {

  function inserthp($data){
    return $this->db->insert('hutangpiutang',$data);
  }

  function view_all_hutangpiutang(){
    $this->db->order_by("kode_transaksi");
    return $this->db->get('hutangpiutang')->result();
  }

  function deletehp($id){
    $this->db->where('kode_transaksi',$id);
    $this->db->delete('hutangpiutang');
  }

  function edithp($where,$table){
    return $this->db->get_where($table,$where);
  }

  function show_hp_id($data){
    $this->db->select('*');
    $this->db->from('hutangpiutang');
    $this->db->where('kode_transaksi',$data);
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  function update_hp($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }
}
