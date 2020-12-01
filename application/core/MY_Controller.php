<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct(){
        
        parent::__construct();

        $this->id = $this->session->userdata('id');

        
    }

}

class MY_session extends MY_Controller{

    public function __construct(){

        parent::__construct();

        if($this->id <= 0)
            redirect(base_url('user/logout'));

    }

}
