<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departments extends CI_Controller {

	
	public function index()
	{
		$this->load->view('section/header');
		 $this->load->view('Pages/departments');
		 $this->load->view('section/footer');
		
	}


}
