<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	
	public function index()
	{
		$this->load->view('section/header');
		 $this->load->view('Pages/contact');
		 $this->load->view('section/footer');
		
	}


}
