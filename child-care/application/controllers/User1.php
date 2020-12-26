<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User1 extends CI_Controller {


	public function User_Signin()
	{

		$data['title']='User Sign In';

			$idata['NAME']=$this->input->post('NAME');
			$idata['EMAIL']=$this->input->post('EMAIL');
			$idata['PASSWORD']=$this->input->post('PASSWORD');
			$idata['C-PASSWORD']=$this->input->post('C-PASSWORD');
			$idata['BLOOD-GROUP']=$this->input->post('BLOOD-GROUP');
			$idata['WEIGHT']=$this->input->post('WEIGHT');
			$idata['DOB']=$this->input->post('DOB');
			$idata['TYPE']=$this->input->post('TYPE');

			$this->child_care->insert('tbl_user',$idata);

			$message='<div class="alert alert-success">Sign In Successful</div>';

			$this->session->set_flashdata('message',$message);


	
		if ($this->form_validation->run() == FALSE) {

		$this->load->view('admin/inc/header');
		$this->load->view('Pages/add-user',$data);
		$this->load->view('admin/inc/footer');

		}
		else {


			$idata['NAME']=$this->input->post('NAME');
			$idata['EMAIL']=$this->input->post('EMAIL');
			$idata['PASSWORD']=$this->input->post('PASSWORD');
			$idata['C-PASSWORD']=$this->input->post('C-PASSWORD');
			$idata['BLOOD-GROUP']=$this->input->post('BLOOD-GROUP');
			$idata['WEIGHT']=$this->input->post('WEIGHT');
			$idata['DOB']=$this->input->post('DOB');
			$idata['TYPE']=$this->input->post('TYPE');

			$this->db->insert('tbl_user',$idata);

			$message='<div class="alert alert-success">Sign In Successful</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}
		
    }
	
