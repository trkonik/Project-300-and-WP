<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	
	public function index()
	{
		$this->load->view('section/header');
		 $this->load->view('Pages/about');
		 $this->load->view('section/footer');
		
	}


}
