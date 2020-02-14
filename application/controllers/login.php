<?php

class Login extends CI_Controller {
	public function index()
	{
    $valid = $this->form_validation;
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $valid->set_rules('username','username','required');
    $valid->set_rules('password','password','required');

    if($valid->run()) {
      $this->validasi_login->login($username,$password, base_url('home'), base_url('login'));
    }
    $this->load->view('login');
	}

  public function logout(){
    $this->validasi_login->logout();
  }
}
