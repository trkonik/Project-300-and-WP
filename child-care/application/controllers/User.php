<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function index()
	{
		if($this->session->userdata('admin_uid'))
		{
		$this->load->view('user/inc/header');
		$this->load->view('user/dashboard');
		$this->load->view('user/inc/footer');
	}
	
	else{
		if($this->input->post('submit')){
			$result=$this->db->where("EMAIL",$this->input->post('EMAIL'))->where("PASSWORD",$this->input->post('PASSWORD'))->get("tbl_user")->result_array();
		
			if($result){

				$sdata['admin_uid']=$result[0]['ID'];
				$sdata['TYPE']=$result[0]['TYPE'];
				$this->session->set_userdata($sdata);
	
				if($this->session->userdata('TYPE')=='Admin'){
	
					redirect('Admin');
				}else if($this->session->userdata('TYPE')=='user'){
					redirect('User');
				}
				
	
			}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger">Invalid Login</div>');
			redirect('Admin');
		}
		}

		$data['title']='Log In';
		

		

			//$this->load->view('user/inc/header');//
			$this->load->view('user/logiin',$data);
			//$this->load->view('user/inc/footer');//
		}
			
	}
	

	
	public function logout(){
		$this->session->sess_destroy();
		redirect('Admin');
	}

	 
	


	public function view_detail()
	{
		$data['title']='View detail';
		$data['detail']=$this->db->select('*')->from('tbl_detail,tbl_vitamin,tbl_organ,tbl_symptoms')->where('tbl_detail.VITAMIN_ID=tbl_vitamin.V_ID')->where('tbl_detail.ORGAN_ID=tbl_organ.O_ID')->where('tbl_detail.SYMPTOM_ID=tbl_symptoms.SYM_ID')->get()->result_array();
		
			$this->load->view('user/inc/header');
			$this->load->view('user/view-detail',$data);
			$this->load->view('user/inc/footer');
	
			
	}
 

	 
	
	 

		public function view_alert()
	{
		$data['title']='View alert';
		$data['alert']=$this->db->select('*')->from("tbl_alert,tbl_user")->where("tbl_alert.USER_ID=tbl_user.ID")->where("tbl_alert.USER_ID",$this->session->userdata('admin_uid'))->get()->result_array();
		
			$this->load->view('user/inc/header');
			$this->load->view('user/view-alert',$data);
			$this->load->view('user/inc/footer');
	
			
	}
 
 	public function delete_alert($ID)
	{
			  
		$this->db->where('A_ID',$ID)->where("tbl_alert.USER_ID",$this->session->userdata('admin_uid'))->delete('tbl_alert');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}
	public function User_Signin()
	{

		$data['title']='User Sign In';

		$this->form_validation->set_rules('NAME', 'NAME', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('EMAIL', 'EMAIL', 'required|valid_email|is_unique[tbl_user.email]');
		$this->form_validation->set_rules('PASSWORD', 'PASSWORD', 'required|min_length[5]|max_length[10]');
		$this->form_validation->set_rules('C-PASSWORD', 'CONFIRM', 'required|matches[PASSWORD]');
		$this->form_validation->set_rules('BLOOD-GROUP', 'BLOOD-GROUP', 'required|validate_blood');
		$this->form_validation->set_rules('WEIGHT', 'WEIGHT', 'required');
		$this->form_validation->set_rules('DOB', 'DOB', 'required');
		$this->form_validation->set_rules('TYPE', 'TYPE', 'required');
		$this->form_validation->set_message('validate_blood', 'The %s is Invalid');
	
		function validate_blood($var){

			if($var=='O+'||$var=='A+'||$var=='B+'||$var=='AB+'||$var=='O-'||$var=='B-'||$var=='AB-'||$var=='A-'){
					return true;
			    }else{

			    	return false;
			    }


		}

			//$this->db->insert('tbl_user',$idata);

			//$message='<div class="alert alert-success">Sign In Successful</div>';

			//$this->session->set_flashdata('message',$message);


	
		if ($this->form_validation->run() == FALSE) {

		$this->load->view('user/sec/header');
		$this->load->view('user/user-signin',$data);
		$this->load->view('user/sec/footer');

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