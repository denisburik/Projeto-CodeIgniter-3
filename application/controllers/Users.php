<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

	public function __construct(){

		parent::__construct();

	}

	public function index(){

		$data['view'] = 'users/index';

		$this->load->view('layouts/default', $data);

	}
	public function register(){
		$data['view'] = 'users/register';

		$this->load->view('layouts/default', $data);	
	}

	public function register_post(){
		$data = array(
			'name' => $_POST['name'],
			'email'	=> $_POST['email'],
			'password' => 'password',
			'view' => 'dashbord/home'
		);

		$this->load->view('layouts/default', $data);
		
	}

}
