<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
	function __contruct(){
		parent::__contruct();
		$this->load->database();
	}

	function getusers($datos){
		
		$this->db->where('user_email',$datos['email']);
		$this->db->where('user_pass',$datos['password']);
		$query = $this->db->get('wp_users');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
}
?>