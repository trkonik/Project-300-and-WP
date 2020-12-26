<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blog extends CI_Controller {
	public function index()
	{
		$this->load->view('admin/inc/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/inc/footer');
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
		$data['alert']=$this->db->get("tbl_alert")->result_array();
		
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

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}



}
 	public function delete_alert($ID)
	{
			  
		$this->db->where('A_ID',$ID)->delete('tbl_alert');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}
	 
	