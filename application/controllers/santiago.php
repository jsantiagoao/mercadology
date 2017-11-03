<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Santiago extends CI_Controller {
function __contruct(){

	parent::__contruct();
}
function index(){
	$this->load->view('santiago/santiago');
}
	
	
}

?>