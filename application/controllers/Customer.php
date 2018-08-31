<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
		$this->load->model('customer_model');
	}

	public function index(){
		redirect('Customer/customer_list');
	}
	
	public function customer_list(){
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		$data['customers']=$this->customer_model->getCustomerList();
		$this->load->view('customer_list',$data);
	}
	
	public function customer_add(){
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		
		if(isset($_POST['submit'])){
			
			$name=$this->input->post('name');
			$father_name=$this->input->post('father_name');
			$address=$this->input->post('address');
			$mobile=$this->input->post('mobile');
			$phone=$this->input->post('phone');
			
			$this->customer_model->addCustomer($name,$father_name,$address,$mobile,$phone);
			
			redirect('Customer/customer_list');
		}else{
			
			$this->load->view('customer_add');
			
		}
	}
	
	public function customer_update(){
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		
		if(isset($_POST['submit'])){
			
			$customer_id=$this->input->post('customer_id');
			$name=$this->input->post('name');
			$father_name=$this->input->post('father_name');
			$address=$this->input->post('address');
			$mobile=$this->input->post('mobile');
			$phone=$this->input->post('phone');
			
			$this->customer_model->updateCustomer($name,$father_name,$address,$mobile,$phone,$customer_id);
			
			redirect('Customer/customer_list');
		}elseif(isset($_GET['id'])){
			
			$result=$this->customer_model->getCustomer($_GET['id']);
			if(empty($result))
				redirect('Customer/customer_list');
			else
				$this->load->view('customer_update',$result);
			
		}else{
			redirect('Customer/customer_list');
		}
	}
}
