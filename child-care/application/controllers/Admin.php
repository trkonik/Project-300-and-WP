<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
		if($this->session->userdata('admin_uid'))
		{
		$this->load->view('admin/inc/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/inc/footer');
	}
	
	else{
		if($this->input->post('submit')){
			$result=$this->db->where("EMAIL",$this->input->post('EMAIL'))->where("TYPE",'Admin')->where("PASSWORD",$this->input->post('PASSWORD'))->get("tbl_user")->result_array();
		
		if($result){

			$sdata['admin_uid']=$result[0]['ID'];
				$sdata['TYPE']=$result[0]['TYPE'];
				$this->session->set_userdata($sdata);
	
				if($this->session->userdata('TYPE')=='Admin'){
	
					redirect('Admin');
				}else if($this->session->userdata('TYPE')=='User'){
					redirect('User');
				}
			

		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger">Invalid Login</div>');
			redirect('Admin');
		}
		}

		$data['title']='Log In';
		

		

			//$this->load->view('admin/inc/header');//
			$this->load->view('admin/logiin',$data);
			//$this->load->view('admin/inc/footer');//
		}
			
	}
	

	
	public function logout(){
		$this->session->sess_destroy();
		redirect('Admin');
	}


	

	public function add_user()
	{	

		$data['title']='Add User';

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
		
		
		
 
		if ($this->form_validation->run() == FALSE)
		{

		$this->load->view('admin/inc/header');
		$this->load->view('admin/add-user',$data);
		$this->load->view('admin/inc/footer');

		}
		else
		{

			$idata['NAME']=$this->input->post('NAME');
			$idata['EMAIL']=$this->input->post('EMAIL');
			$idata['PASSWORD']=$this->input->post('PASSWORD');
			$idata['C-PASSWORD']=$this->input->post('C-PASSWORD');
			$idata['BLOOD-GROUP']=$this->input->post('BLOOD-GROUP');
			$idata['WEIGHT']=$this->input->post('WEIGHT');
			$idata['DOB']=$this->input->post('DOB');
			$idata['TYPE']=$this->input->post('TYPE');

			$this->db->insert('tbl_user',$idata);


			$last_insert_id=$this->db->insert_id();

			$dob=strtotime($idata['DOB']);


			$idata2['ALERT_DATE']=date('Y-m-d',strtotime('+1 Year',$dob));
			$idata2['ALERT_DETAIL']='Have Vitamin A Capsule PHASE 1';
			$idata2['USER_ID']=$last_insert_id;

			$this->db->insert('tbl_alert',$idata2);

			$idata3['ALERT_DATE']=date('Y-m-d',strtotime('+2 Year',$dob));
			$idata3['ALERT_DETAIL']='Have Vitamin A Capsule PHASE 2';
			$idata3['USER_ID']=$last_insert_id;

			$this->db->insert('tbl_alert',$idata3);


			$idata4['ALERT_DATE']=date('Y-m-d',strtotime('+3 Year',$dob));
			$idata4['ALERT_DETAIL']='Have Vitamin A Capsule PHASE 3';
			$idata4['USER_ID']=$last_insert_id;

			$this->db->insert('tbl_alert',$idata4);
			 


		 

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}


		public function view_user()
	{
		$data['title']='View User';
		$data['user']=$this->db->get("tbl_user")->result_array();

		

			$this->load->view('admin/inc/header');
			$this->load->view('admin/view-user',$data);
			$this->load->view('admin/inc/footer');
	
			
	}
		public function edit_user($ID)
	{
		$data['title']='Edit User';

		$this->form_validation->set_rules('NAME', 'NAME', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('EMAIL', 'EMAIL', 'required|valid_email[tbl_user.email]');
		$this->form_validation->set_rules('PASSWORD', 'PASSWORD', 'required|min_length[5]|max_length[10]');
		$this->form_validation->set_rules('C-PASSWORD', 'Confirm', 'required|matches[PASSWORD]');
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
		
		if ($this->form_validation->run() == FALSE) {
			
			
			$data['user']=$this->db->where('ID',$ID)->get('tbl_user')->result_array();


			$this->load->view('admin/inc/header');
			$this->load->view('admin/edit-user',$data);
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

			$this->db->where('ID',$ID)->update('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}



}
 	public function delete_user($ID)
	{


		$old_image=$this->db->where('ID',$ID)->get('tbl_user')->result_array();

		if(!empty($old_image[0]['user_image'])){

		unlink('img_saver/'.$old_image[0]['user_image'].'');
		}

			  
		$this->db->where('ID',$ID)->delete('tbl_user');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}

	public function add_vitamin()
	{	

		$data['title']='Add Vitamin';

		$this->form_validation->set_rules('VITAMIN_NAME', 'VITAMIN_NAME', 'required');
		

		if ($this->form_validation->run() == FALSE)
		{

		$this->load->view('admin/inc/header');
		$this->load->view('admin/add-vitamin',$data);
		$this->load->view('admin/inc/footer');

		}
		else
		{

			$idata['VITAMIN_NAME']=$this->input->post('VITAMIN_NAME');
			
			$this->db->insert('tbl_vitamin',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}


		public function view_vitamin()
	{
		$data['title']='View vitamin';
		$data['vitamin']=$this->db->get("tbl_vitamin")->result_array();
		
			$this->load->view('admin/inc/header');
			$this->load->view('admin/view-vitamin',$data);
			$this->load->view('admin/inc/footer');
	
			
	}
	public function edit_vitamin($ID)
	{
		$data['title']='Edit vitamin';

		$this->form_validation->set_rules('VITAMIN_NAME', 'VITAMIN_NAME', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			
			
			$data['vitamin']=$this->db->where('V_ID',$ID)->get('tbl_vitamin')->result_array();


			$this->load->view('admin/inc/header');
			$this->load->view('admin/edit-vitamin',$data);
			$this->load->view('admin/inc/footer');


		}
		else {


			$idata['VITAMIN_NAME']=$this->input->post('VITAMIN_NAME');
		

			$this->db->where('V_ID',$ID)->update('tbl_vitamin',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}



}
 	public function delete_vitamin($ID)
	{
			  
		$this->db->where('V_ID',$ID)->delete('tbl_vitamin');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}
	 
	

	public function add_symptoms()
	{	

		$data['title']='Add symptoms';

		$this->form_validation->set_rules('SYM_NAME', 'SYM_NAME', 'required|regex_match[/^[a-zA-Z ]*$/]');
		
		if ($this->form_validation->run() == FALSE)
		{

		$this->load->view('admin/inc/header');
		$this->load->view('admin/add-symptoms',$data);
		$this->load->view('admin/inc/footer');

		}
		else
		{

			$idata['SYM_NAME']=$this->input->post('SYM_NAME');
			
		

			$this->db->insert('tbl_symptoms',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}


		public function view_symptoms()
	{
		$data['title']='View symptoms';
		$data['symptoms']=$this->db->get("tbl_symptoms")->result_array();

		

			$this->load->view('admin/inc/header');
			$this->load->view('admin/view-symptoms',$data);
			$this->load->view('admin/inc/footer');
	
			
	}
		
	
	public function edit_symptoms($ID)
	{
		$data['title']='Edit symptoms';

		$this->form_validation->set_rules('SYM_NAME', 'SYM_NAME', 'required|regex_match[/^[a-zA-Z ]*$/]');
		
		if ($this->form_validation->run() == FALSE) {
			
			
			$data['symptoms']=$this->db->where('SYM_ID',$ID)->get('tbl_symptoms')->result_array();


			$this->load->view('admin/inc/header');
			$this->load->view('admin/edit-symptoms',$data);
			$this->load->view('admin/inc/footer');


		}
		else {


			$idata['SYM_NAME']=$this->input->post('SYM_NAME');
		
		

			$this->db->where('SYM_ID',$ID)->update('tbl_symptoms',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}



}
 	public function delete_symptoms($ID)
	{
			  
		$this->db->where('SYM_ID',$ID)->delete('tbl_symptoms');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}
	 
	

	public function add_organ()
	{

		$data['title']='Add Organ';


		$this->form_validation->set_rules('ORGAN_NAME', 'ORGAN_NAME', 'required|regex_match[/^[a-zA-Z ]*$/]');
		
 
 
		if ($this->form_validation->run() == FALSE) {

		$this->load->view('admin/inc/header');
		$this->load->view('admin/add-organ',$data);
		$this->load->view('admin/inc/footer');

		}

		else {


			$idata['ORGAN_NAME']=$this->input->post('ORGAN_NAME');
			
		

			$this->db->insert('tbl_organ',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function edit_organ($ID)
	{

		$data['title']='Edit Organ';


		
		$this->form_validation->set_rules('ORGAN_NAME','ORGAN_NAME','required|regex_match[/^[a-zA-Z ]*$/]');
		
		if ($this->form_validation->run() == FALSE)
		{
			
			$data['organ']=$this->db->where('O_ID',$ID)->get('tbl_organ')->result_array();
			
			$this->load->view('admin/inc/header');
			$this->load->view('admin/edit-organ',$data);
			$this->load->view('admin/inc/footer');


		} else {


			$idata['ORGAN_NAME']=$this->input->post('ORGAN_NAME');
			
			$this->db->where('O_ID',$ID)->update('tbl_organ',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}
	public function view_organ()
	{

		$data['title']='View Organ';
		
		$data['organ']=$this->db->get('tbl_organ')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view-organ',$data);
		$this->load->view('admin/inc/footer');

	}
	public function delete_organ($ID)
	{


			  
		$this->db->where('O_ID',$ID)->delete('tbl_organ');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}

	public function add_blog()
	{	

		$data['title']='Add blog';

		$this->form_validation->set_rules('B_TITLE', 'B_TITLE', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('DESCRIPTION', 'DESCRIPTION', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('IMAGE', 'IMAGE','required');
		
		if ($this->form_validation->run() == FALSE)
		{

		$this->load->view('admin/inc/header');
		$this->load->view('admin/add-blog',$data);
		$this->load->view('admin/inc/footer');

		}
		else
		{

			$idata['B_TITLE']=$this->input->post('B_TITLE');
			$idata['DESCRIPTION']=$this->input->post('DESCRIPTION');
			$idata['IMAGE']=$this->input->post('IMAGE');

			$this->db->insert('tbl_blog',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}


		public function view_blog()
	{
		$data['title']='View blog';
		$data['blog']=$this->db->get("tbl_blog")->result_array();

		

			$this->load->view('admin/inc/header');
			$this->load->view('admin/view-blog',$data);
			$this->load->view('admin/inc/footer');
	
			
	}
	public function edit_blog($ID)
	{
		$data['title']='Edit blog';

		$this->form_validation->set_rules('B_TITLE', 'B_TITLE', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('DESCRIPTION', 'DESCRIPTION', 'required');
		$this->form_validation->set_rules('IMAGE', 'IMAGE');
		
		if ($this->form_validation->run() == FALSE) {
			
			
			$data['blog']=$this->db->where('B_ID',$ID)->get('tbl_blog')->result_array();


			$this->load->view('admin/inc/header');
			$this->load->view('admin/edit-blog',$data);
			$this->load->view('admin/inc/footer');


		}
		else {


			$idata['B_TITLE']=$this->input->post('B_TITLE');
			$idata['DESCRIPTION']=$this->input->post('DESCRIPTION');
			$idata['IMAGE']=$this->input->post('IMAGE');

			$this->db->where('B_ID',$ID)->update('tbl_blog',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}



}
 	public function delete_blog($ID)
	{
			  
		$this->db->where('B_ID',$ID)->delete('tbl_blog');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}
	public function add_detail()
	{	

		$data['title']='Add detail';

		$this->form_validation->set_rules('VITAMIN_ID', 'VITAMIN_ID', 'required');
		$this->form_validation->set_rules('ORGAN_ID', 'ORGAN_ID', 'required');
		$this->form_validation->set_rules('SYMPTOM_ID', 'SYMPTOM_ID', 'required');
		$this->form_validation->set_rules('DESCRIPTION', 'DESCRIPTION', 'required');
		$this->form_validation->set_rules('NUTRITION', 'NUTRITION', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			
		$data['vitamins']=$this->db->get('tbl_vitamin')->result_array();
		$data['organs']=$this->db->get('tbl_organ')->result_array();
		$data['symptoms']=$this->db->get('tbl_symptoms')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/add-detail',$data);
		$this->load->view('admin/inc/footer');

		}
		else
		{

			$idata['VITAMIN_ID']=$this->input->post('VITAMIN_ID');
			$idata['ORGAN_ID']=$this->input->post('ORGAN_ID');
			$idata['SYMPTOM_ID']=$this->input->post('SYMPTOM_ID');
			$idata['DESCRIPTION']=$this->input->post('DESCRIPTION');
			$idata['NUTRITION']=$this->input->post('DESCRIPTION');
		

			$this->db->insert('tbl_detail',$idata);

			$message='<div class="detail detail-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}


		public function view_detail()
	{
		$data['title']='View detail';
		$data['detail']=$this->db->select('*')->from('tbl_detail,tbl_vitamin,tbl_organ,tbl_symptoms')->where('tbl_detail.VITAMIN_ID=tbl_vitamin.V_ID')->where('tbl_detail.ORGAN_ID=tbl_organ.O_ID')->where('tbl_detail.SYMPTOM_ID=tbl_symptoms.SYM_ID')->get()->result_array();
		
			$this->load->view('admin/inc/header');
			$this->load->view('admin/view-detail',$data);
			$this->load->view('admin/inc/footer');
	
			
	}
	public function edit_detail($ID)
	{
		$data['title']='Edit detail';

		$idata['VITAMIN_ID']=$this->input->post('VITAMIN_ID');
		$idata['ORGAN_ID']=$this->input->post('ORGAN_ID');
		$idata['SYMPTOM_ID']=$this->input->post('SYMPTOM_ID');
		$idata['DESCRIPTION']=$this->input->post('DESCRIPTION');
		$idata['NUTRITION']=$this->input->post('DESCRIPTION');
		
		
		if ($this->form_validation->run() == FALSE) {
			
			
			$data['detail']=$this->db->where('D_ID',$ID)->get('tbl_detail')->result_array();
			$data['vitamins']=$this->db->get('tbl_vitamin')->result_array();
			$data['organs']=$this->db->get('tbl_organ')->result_array();
			$data['symptoms']=$this->db->get('tbl_symptoms')->result_array();

			$this->load->view('admin/inc/header');
			$this->load->view('admin/edit-detail',$data);
			$this->load->view('admin/inc/footer');


		}
		else {


			$idata['VITAMIN_ID']=$this->input->post('VITAMIN_ID');
			$idata['ORGAN_ID']=$this->input->post('ORGAN_ID');
			$idata['SYMPTOM_ID']=$this->input->post('SYMPTOM_ID');
			$idata['DESCRIPTION']=$this->input->post('DESCRIPTION');
			$idata['NUTRITION']=$this->input->post('DESCRIPTION');
		

			$this->db->where('D_ID',$ID)->update('tbl_detail',$idata);

			$message='<div class="detail detail-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}



}
 	public function delete_detail($ID)
	{
			  
		$this->db->where('D_ID',$ID)->delete('tbl_detail');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}
	 
	
	public function add_alert()
	{	

		$data['title']='Add alert';

		$this->form_validation->set_rules('A_DETAIL', 'A_DETAIL', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('DATE_FROM', 'DATE_FROM', 'required');
		$this->form_validation->set_rules('DATE_TO', 'DATE_TO', 'required');
		$this->form_validation->set_rules('STATUS', 'STATUS', 'required');

		if ($this->form_validation->run() == FALSE)
		{

		$this->load->view('admin/inc/header');
		$this->load->view('admin/add-alert',$data);
		$this->load->view('admin/inc/footer');

		}
		else
		{

			$idata['A_DATAIL']=$this->input->post('A_DATAIL');
			$idata['DATE_FROM']=$this->input->post('DATE_FROM');
			$idata['DATE_TO']=$this->input->post('DATE_TO');
			$idata['STATUS']=$this->input->post('STATUS');
		

			$this->db->insert('tbl_alert',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}


		public function view_alert()
	{
		$data['title']='View alert';
		$data['alert']=$this->db->select('*')->from("tbl_alert,tbl_user")->where("tbl_alert.USER_ID=tbl_user.ID")->get()->result_array();
		
			$this->load->view('admin/inc/header');
			$this->load->view('admin/view-alert',$data);
			$this->load->view('admin/inc/footer');
	
			
	}
	public function edit_alert($ID)
	{
		$data['title']='Edit alert';

		$this->form_validation->set_rules('A_DETAIL', 'A_DETAIL', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('DATE_FROM', 'DATE_FROM', 'required');
		$this->form_validation->set_rules('DATE_TO', 'DATE_TO', 'required');
		$this->form_validation->set_rules('STATUS', 'STATUS', 'required');

		
		
		if ($this->form_validation->run() == FALSE) {
			
			
			$data['alert']=$this->db->where('A_ID',$ID)->get('tbl_alert')->result_array();


			$this->load->view('admin/inc/header');
			$this->load->view('admin/edit-alert',$data);
			$this->load->view('admin/inc/footer');


		}
		else {


			$idata['A_DATAIL']=$this->input->post('A_DATAIL');
			$idata['DATE_FROM']=$this->input->post('DATE_FROM');
			$idata['DATE_TO']=$this->input->post('DATE_TO');
			$idata['STATUS']=$this->input->post('STATUS');
		

			$this->db->where('A_ID',$ID)->update('tbl_alert',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}



}
 	public function delete_alert($ID)
	{
			  
		$this->db->where('A_ID',$ID)->delete('tbl_alert');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}

	
	 
	



}