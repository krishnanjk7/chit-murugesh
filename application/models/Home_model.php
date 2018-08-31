<?php

class customer_model extends CI_Model
{
	function __construct() {  
		parent::__construct();  
		$this->load->database();
		
	} 
	
	function addCustomer($name,$father_name,$address,$mobile,$phone){
	  
		$sql='INSERT INTO `customers`(`name`, `father_name`, `address`, `mobile`, `phone`) ("'.$name.'", "'.$father_name.'", "'.$address.'", "'.$mobile.'", "'.$phone.'" )';
		$this->db->query($sql);
		
	}
	
	public function getCustomer($id){
		$sql="SELECT * FROM `customers` where id='".$id."'";
		$result=$this->db->query($sql);
		$data=array();
		if($result->num_rows()>0){
			foreach($result->result_array() as $row){
				$data=$row;
			}
		}
		return $data;
	}
	
	function updateCustomer($name,$father_name,$address,$mobile,$phone,$customer_id){
		
		$sql='UPDATE `customers` SET `name`="'.$name.'",`father_name`="'.$father_name.'",`address`="'.$address.'",`mobile`="'.$mobile.'",`phone`="'.$phone.'" WHERE id="'.$customer_id.'"';
		$this->db->query($sql);
		
	}
	
	function getCustomerList(){
		$sql="SELECT * FROM `customers`";
		$result=$this->db->query($sql);
		$data=array();
		if($result->num_rows()>0){
			foreach($result->result_array() as $row){
				$data[]=$row;
			}
		}
		
		return $data;
	}
	
}
?>
