<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @package	CONTROLLER
 * @author 	FABIO WILLIAM CONCEIÇÃO
 * @since 	VERSION 1.0.0
 * @filesource
*/

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view("sections/slider");
		$this->load->view('sections/why-choose');
		$this->load->view("sections/want-more");
		$this->load->view("sections/contact");
		$this->load->view('template/footer');
	}

	public function sendInformation(){
		$insert = array(
			'name'			=>	$this->input->post('name'),
			'telphone'		=>	$this->input->post('phone'),
			'email'			=>	$this->input->post('email'),
			'observation'	=>	$this->input->post('obs'),
		);

		if($this->client_model->insert($insert)){
			redirect("/");
		}else{
			redirect('/');
		}
	}
}
