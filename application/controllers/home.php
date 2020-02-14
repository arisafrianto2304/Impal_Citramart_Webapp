<?php defined('BASEPATH') OR exit('No direct script access allowed');
  class Home extends CI_Controller{

    function __construct(){
      parent:: __construct();
    }

    public function index(){
      $this->homepage();
    }

    public function homepage(){
      $tittle = array(
        'title' => 'Home'
      );
      $this->load->view('admin/homepage',$tittle);

    }

    // function barang(){
    //   $this->load->view('admin/barang');
    // }
    //
    // function keuangan(){
    //   $this->load->view('admin/keuangan');
    // }
    //
    // function administrasi_karyawan(){
    //   $this->load->view('admin/administrasi_karyawan');
    // }
    //
    // function administrasi_admin(){
    //   $this->load->view('admin/administrasi_admin');
    // }
    //
    // function backup(){
    //   $this->load->view('admin/backup');
    // }

  }
?>
