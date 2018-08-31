<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
		$this->load->model('chit_model');
		$this->load->model('customer_model');
	}

	public function index(){
		//redirect('Chit/chitamount_list');
	}
	
	public function chitamount_list(){
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		$data['chits']=$this->chit_model->getChitAmountList();
		$this->load->view('chitamount_list',$data);
	}
	
	public function chitamount_add(){
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		
		if(isset($_POST['submit'])){
			
			$amount=$this->input->post('amount');
			$description=$this->input->post('description');
			
			$this->chit_model->addChitAmount($amount,$description);
			
			redirect('Chit/chitamount_list');
		}else{
			
			$this->load->view('chitamount_add');
			
		}
	}
	
	public function chitamount_update(){
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		
		if(isset($_POST['submit'])){
			
			$id=$this->input->post('id');
			$amount=$this->input->post('amount');
			$description=$this->input->post('description');
			
			$this->chit_model->updateChitAmount($amount,$description,$id);
			
			redirect('Chit/chitamount_list');
		}elseif(isset($_GET['id'])){
			
			$result=$this->chit_model->getChitAmount($_GET['id']);
			if(empty($result))
				redirect('Chit/chitamount_list');
			else
				$this->load->view('chitamount_update',$result);
			
		}else{
			redirect('Chit/chitamount_list');
		}
	}
	
	
	public function chit_list(){
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		$data['chits']=$this->chit_model->getChitList();
		$this->load->view('chit_list',$data);
	}
	
	public function chit_add(){
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		
		if(isset($_POST['submit'])){
			
			$chit_amount_id=$this->input->post('chit_amount_id');
			$chit_start_date=$this->input->post('chit_start_date');
			$chit_end_date=$this->input->post('chit_end_date');
			$customer_count=$this->input->post('customer_count');
			$chit_count=$this->input->post('chit_count');
			$commission=$this->input->post('commission');
			$description=$this->input->post('description');
			
			$this->chit_model->addChit($chit_amount_id,$chit_start_date,$chit_end_date,$customer_count,$chit_count,$commission,$description);
			
			redirect('Chit/chit_list');
		}else{
			$data['customers']=$this->customer_model->getCustomerList();
			$data['chit_amounts']=$this->chit_model->getChitAmountList();
			$this->load->view('chit_add',$data);
			
		}
	}
	
	public function chit_update(){
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		
		if(isset($_POST['submit'])){
			
			$id=$this->input->post('id');
			$chit_amount_id=$this->input->post('chit_amount_id');
			$chit_start_date=$this->input->post('chit_start_date');
			$chit_end_date=$this->input->post('chit_end_date');
			$customer_count=$this->input->post('customer_count');
			$chit_count=$this->input->post('chit_count');
			$commission=$this->input->post('commission');
			$description=$this->input->post('description');
			
			$this->chit_model->updateChit($chit_amount_id,$chit_start_date,$chit_end_date,$customer_count,$chit_count,$commission,$description,$id);
			
			redirect('Chit/chit_list');
		}elseif(isset($_GET['id'])){
			
			$data['results']=$this->chit_model->getChit($_GET['id']);
			$data['chit_amounts']=$this->chit_model->getChitAmountList();
			$data['customers']=$this->customer_model->getCustomerList();
			if(empty($data['results']))
				redirect('Chit/chit_list');
			else
				$this->load->view('chit_update',$data);
			
		}else{
			redirect('Chit/chit_list');
		}
	}
	
}
