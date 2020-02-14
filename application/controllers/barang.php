<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

  function __construct(){
	   parent::__construct();
	   $this->load->model('m_barang');
  }

  public function add_data_barang(){

    $tittle['title']='Barang';
    $tittle['vall_barang']=$this->m_barang->view_all_barang();
    $this->load->view('admin/barang/vin_barang',$tittle);
  }

	public function insert_barang(){
    $data = array(
      'kode_barang'   => $this->input->post('kode_barang'),
      'nama_barang'   => $this->input->post('nama_barang'),
      'stock_barang'   => $this->input->post('stock_barang'),
      'tanggal_pembelian'  => $this->input->post('tanggal_pembelian'),
      'total_pembelian'        => $this->input->post('total_pembelian'),
      'jumlah_barang' => $this->input->post('jumlah_barang')
    );
    $re = $this->m_barang->insertbarang($data);
    redirect('barang/add_data_barang');
	}

  public function view_list(){
    $tittle['title']='Barang';
    $tittle['vall_barang']=$this->m_barang->view_all_barang();
    $this->load->view('admin/barang/view_barang',$tittle);
  }

  function delete_barang(){
    $id = $this->uri->segment(3);
    $this->m_barang->deletebarang($id);
    $this->add_data_barang();
  }

  function show_barang_id(){
    $id = $this->uri->segment(3);
    $data['title'] = 'Edit Barang';
    $data['show_edit'] = $this->m_barang->show_barang_id($id);
    $this->load->view('admin/barang/vedit_barang',$data);
  }

  function update_barang(){
    $kode_barang = $this->input->post('kode_barang');
    $nama_barang = $this->input->post('nama_barang');
    $stock_barang = $this->input->post('stock_barang');
    $tanggal_pembelian = $this->input->post('tanggal_pembelian');
    $total_pembelian = $this->input->post('total_pembelian');
    $jumlah_barang = $this->input->post('jumlah_barang');



    $data = array(
      'nama_barang'   => $nama_barang,
      'stock_barang'   => $stock_barang,
      'tanggal_pembelian'  => $tanggal_pembelian,
      'total_pembelian' => $total_pembelian,
      'jumlah_barang' => $jumlah_barang
    );

    $where = array(
      'kode_barang' => $kode_barang
    );

    $this->m_barang->update_barang($where,$data,'barang');
    redirect('barang/add_data_barang');
  }

}
