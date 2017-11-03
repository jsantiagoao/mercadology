<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Webservice extends CI_Controller {
	function __contruct(){

		parent::__contruct();
		/*cargar helpers y models*/
       

		
	}
	function index(){

 		$this->load->helper('Santiago');
        $arreglo['string']="Santiago Aguillon Olvera";
		$this->load->view('welcome_message',$arreglo);
	}
	function post(){
$dato=$this->input->post('nombre');
if($dato){
	print_r($dato);
}else{
	print_r("error");
}


	}
	function userlogin(){
		
		$this->load->model('Users_model');
	$mail=$this->input->post('mail');
	$data['mail']=$mail;

		$datos=array(
			'email'=> $this->input->post('mail'),
			'password'=> md5('mercadology')
		);
		$login=1;
		$logout=0;
	
	$data['users']=$this->users_model->getusers($datos);

	/*$this->load->view('header');
	$this->load->view('webservice/content',$data);
	$this->load->view('footer');*/
	header('Content-Type: application/json');
	if($data['users']!=false){
		$data['login']=$login;
		echo json_encode($data);
	}else{
		$data['login']=$logout;
		echo json_encode($data);
	}
	

	}
}	
	

?>