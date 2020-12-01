<?php

class Migrates extends CI_Controller
{

	public function index()
	{
		$this->load->library('migration');

		if ( !$this->migration->latest() )
		{
			show_error($this->migration->error_string());
		}
		
	}

}