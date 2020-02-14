<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hutangpiutang extends CI_Controller {

  function __construct(){
	   parent::__construct();
	   $this->load->model('m_hutangpiutang');
  }

  public function add_data_hutangpiutang(){

    $tittle['title']='Hutang Piutang';
    $tittle['vall_hut']=$this->m_hutangpiutang->view_all_hutangpiutang();
    $this->load->view('admin/vinsert_hutangpiutang',$tittle);
  }

	public function insert_hutangpiutang(){
    $data = array(
      'kode_transaksi'   => $this->input->post('kode_transaksi'),
      'nama_vendor'   => $this->input->post('nama_vendor'),
      'nama_barang'   => $this->input->post('nama_barang'),
      'harga_satuan'  => $this->input->post('harga_satuan'),
      'jumlah'        => $this->input->post('jumlah'),
      'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
      'total_bayar'   => $this->input->post('total_bayar')
    );
    $re = $this->m_hutangpiutang->inserthp($data);
    redirect('hutangpiutang/add_data_hutangpiutang');
	}

  public function view_list(){
    $tittle['title']='Hutang Piutang';
    $tittle['vall_hut']=$this->m_hutangpiutang->view_all_hutangpiutang();
    $this->load->view('admin/view_hutangpiutang',$tittle);
  }

  function delete_ht(){
    $id = $this->uri->segment(3);
    $this->m_hutangpiutang->deletehp($id);
    $this->add_data_hutangpiutang();
  }

  function show_hp_id(){
    $id = $this->uri->segment(3);
    $data['title'] = 'Edit Hutang Piutang';
    $data['show_edit'] = $this->m_hutangpiutang->show_hp_id($id);
    $this->load->view('admin/vedit_hutangpiutang',$data);
  }

  function update_hp(){
    $data = array(
      'nama_vendor'   => $this->input->post('nama_vendor'),
      'nama_barang'   => $this->input->post('nama_barang'),
      'harga_satuan'  => $this->input->post('harga_satuan'),
      'jumlah'        => $this->input->post('jumlah'),
      'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
      'total_bayar'   => $this->input->post('total_bayar')
    );
    $where = array(
      'kode_transaksi' => $this->input->post('kode_transaksi')
    );
    $this->m_hutangpiutang->update_hp($where,$data,'hutangpiutang');
    redirect('hutangpiutang/add_data_hutangpiutang');
  }

}
