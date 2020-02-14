<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

  function __construct(){
	   parent::__construct();
	   $this->load->model('m_karyawan');
  }

  public function add_data_karyawan(){

    $tittle['title']='Karyawan';
    $tittle['vall_karyawan']=$this->m_karyawan->view_all_karyawan();
    $this->load->view('admin/karyawan/karyawan',$tittle);
  }

	public function insert_karyawan(){
    $data = array(
      'kode_karyawan'   => $this->input->post('kode_karyawan'),
      'username'   => $this->input->post('username'),
      'password'   => sha1($this->input->post('password')),
      'nama'  => $this->input->post('nama'),
      'bagian'        => $this->input->post('bagian'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'alamat'   => $this->input->post('alamat'),
      'no_telepon'   => $this->input->post('no_telepon')
    );
    $re = $this->m_karyawan->insertkaryawan($data);
    redirect('karyawan/add_data_karyawan');
	}

  public function view_list(){
    $tittle['title']='Karyawan';
    $tittle['vall_karyawan']=$this->m_karyawan->view_all_karyawan();
    $this->load->view('admin/karyawan/view_karyawan',$tittle);
  }

  function delete_karyawan(){
    $id = $this->uri->segment(3);
    $this->m_karyawan->deletekaryawan($id);
    $this->add_data_karyawan();
  }

  function show_karyawan_id(){
    $id = $this->uri->segment(3);
    $data['title'] = 'Edit Karyawan';
    $data['show_edit'] = $this->m_karyawan->show_karyawan_id($id);
    $this->load->view('admin/karyawan/edit_karyawan',$data);
  }

  function update_karyawan(){
    $data = array(
      'username'   => $this->input->post('username'),
      'password'   => sha1($this->input->post('password')),
      'nama'  => $this->input->post('nama'),
      'bagian'        => $this->input->post('bagian'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'alamat'   => $this->input->post('alamat'),
      'no_telepon'   => $this->input->post('no_telepon')
    );
    $where = array(
      'kode_karyawan' => $this->input->post('kode_karyawan')
    );
    $this->m_karyawan->update_karyawan($where,$data,'karyawan');
    redirect('karyawan/add_data_karyawan');
  }

}
