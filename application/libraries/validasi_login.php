<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validasi_login {

	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}
	public function login($username, $password) {
		$query = $this->CI->db->get_where('admin', array(
										'username' => $username,
										'password' => sha1($password)
										));
		if($query->num_rows() == 1) {
			$row 	= $this->CI->db->query('SELECT * FROM admin WHERE username = "'.$username.'"');
			$admin 	= $row->row();
			$id 	= $admin->admin_id;
			$nama	= $admin->nama;
			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('nama', $nama);
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('id', $id);
			redirect(base_url('home/homepage'));
		}else{
			$this->CI->session->set_flashdata('message','Maaf Username/Password salah');
			redirect(base_url().'login');
		}
		return false;
	}
	public function cek_login() {
		if($this->CI->session->userdata('username') == '' ) {
			$this->CI->session->set_flashdata('message','Oops...silakan login dulu');
			redirect(base_url('login'));
		}
	}

	public function logout($redirect) {
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('nama');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		unset($_SESSION['admin']);
		session_destroy();
		$this->CI->session->set_flashdata('message','Terimakasih, Anda berhasil logout');
		redirect(base_url().'login');
	}

}
