<?php defined('BASEPATH') OR exit('No direct script access allowed');
  class Admin extends CI_Controller{

    function __construct(){
  	   parent::__construct();
  	   $this->load->model('m_admin');
    }

    public function index(){
      $this->add_data_admin();
    }

    public function add_data_admin(){
      $tittle['title']='Admin';
      $tittle['vall_admin']=$this->m_admin->view_all_admin();
      $this->load->view('admin/adm/admin',$tittle);

    }

    public function insert_admin(){
      $data = array(
        'username'   => $this->input->post('username'),
        'password'   => sha1($this->input->post('password')),
        'admin_id'   => $this->input->post('admin_id')
      );
      $re = $this->m_admin->insertadmin($data);
      redirect('admin/add_data_admin');
  	}

    function delete_admin(){
      $id = $this->uri->segment(3);
      $this->m_admin->deleteadmin($id);
      $this->add_data_admin();
    }

    function show_admin_id(){
      $id = $this->uri->segment(3);
      $data['title'] = 'Edit Admin';
      $data['show_edit'] = $this->m_admin->show_admin_id($id);
      $this->load->view('admin/adm/vedit_admin',$data);
    }

    function update_admin(){
      $id = $this->input->post('admin_id');
      $username =  $this->input->post('username');
      $password = sha1($this->input->post('password'));

      $data = array(
        'username'   => $username,
        'password'   => $password
      );
      $where = array(
        'admin_id' => $id
      );
      $this->m_admin->update_admin($where,$data,'admin');
      redirect('admin/index');
    }
  }
?>
