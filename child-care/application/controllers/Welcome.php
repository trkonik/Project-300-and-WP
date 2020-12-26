<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{	
		$this->load->view('section/header');
		$this->load->view('Pages/home');
		$this->load->view('section/footer');
	}
}