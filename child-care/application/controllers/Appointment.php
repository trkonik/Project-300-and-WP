<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller {

	
	public function index()
	{
		$this->load->view('section/header');
		 $this->load->view('Pages/appointment');
		 $this->load->view('section/footer');
		
	}


}
