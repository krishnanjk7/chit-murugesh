<?php

class chit_model extends CI_Model
{
	function __construct() {  
		parent::__construct();  
		$this->load->database();
		
	} 
	
	
	
	function addChitAmount($amount,$description){
	  
		$sql='INSERT INTO `chit_amounts`(`amount`, `description`) Values("'.$amount.'", "'.$description.'")';
		$this->db->query($sql);
		
	}
	
	public function getChitAmount($id){
		$sql="SELECT * FROM `chit_amounts` where id='".$id."'";
		$result=$this->db->query($sql);
		$data=array();
		if($result->num_rows()>0){
			foreach($result->result_array() as $row){
				$data=$row;
			}
		}
		return $data;
	}
	
	function updateChitAmount($amount,$description,$id){
		
		$sql='UPDATE `chit_amounts` SET `name`="'.$amount.'",`father_name`="'.$description.'" WHERE id="'.$id.'"';
		$this->db->query($sql);
		
	}
	
	function getChitAmountList(){
		$sql="SELECT * FROM `chit_amounts`";
		$result=$this->db->query($sql);
		$data=array();
		if($result->num_rows()>0){
			foreach($result->result_array() as $row){
				$data[]=$row;
			}
		}
		
		return $data;
	}
	
	
	//*******************************************************************************************************************************************************************///
	
	
	
	function addChit($chit_amount_id,$chit_start_date,$chit_end_date,$customer_count,$chit_count,$commission,$description){
	  
		$sql='INSERT INTO `chit_list`( `chit_amount_id`, `chit_start_date`, `chit_end_date`, `customer_count`, `chit_count`, `commission`, `description`) Values("'.$chit_amount_id.'", "'.$chit_start_date.'", "'.$chit_end_date.'", "'.$customer_count.'", "'.$chit_count.'", "'.$commission.'", "'.$description.'" )';
		$this->db->query($sql);
		
	}
	
	public function getChit($id){
		$sql="SELECT ch.`id`, ch.`chit_id`, ca.`amount`, ch.`chit_start_date`, ch.`chit_end_date`, ch.`customer_count`, ch.`chit_count`, ch.`commission`, ch.`status`, ch.`description` FROM `chit_list` ch ";
		$sql.="Left join `chit_amounts` ca on ch.chit_amount_id=ca.id ";
		$sql.="where id='".$id."'";
		$result=$this->db->query($sql);
		$data=array();
		if($result->num_rows()>0){
			foreach($result->result_array() as $row){
				$data=$row;
			}
		}
		return $data;
	}
	
	function updateChit($chit_amount_id,$chit_start_date,$chit_end_date,$customer_count,$chit_count,$commission,$description,$id){
		
		$sql='UPDATE `chit_list` SET `chit_amount_id`="'.$chit_amount_id.'",`chit_start_date`="'.$chit_start_date.'",`chit_end_date`="'.$chit_end_date.'",`customer_count`="'.$customer_count.'",`chit_count`="'.$chit_count.'", `commission`="'.$commission.'", `description`="'.$description.'" WHERE id="'.$id.'"';
		$this->db->query($sql);
		
	}
	
	function getChitList(){
		$sql="SELECT ch.`id`, ch.`chit_id`, ca.`amount`, ch.`chit_start_date`, ch.`chit_end_date`, ch.`customer_count`, ch.`chit_count`, ch.`commission`, ch.`status`, ch.`description` FROM `chit_list` ch ";
		$sql.="Left join `chit_amounts` ca on ch.chit_amount_id=ca.id ";
		$result=$this->db->query($sql);
		$data=array();
		if($result->num_rows()>0){
			foreach($result->result_array() as $row){
				$data[]=$row;
			}
		}
		
		return $data;
	}

//*******************************************************************************************************************************************************************///	
}
?>
