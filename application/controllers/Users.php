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

}
