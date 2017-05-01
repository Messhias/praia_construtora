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

	public function test(){
		
		$ss->useSpreadsheet("My Spreadsheet");
		// if not setting worksheet, "Sheet1" is assumed
		// $ss->useWorksheet("worksheetName");
		$row = array
		(
		"name" => "John Doe"
		, "email" => "john@example.com"
		, "comments" => "Hello world"
		);
		if ($ss->addRow($row)) echo "Form data successfully stored using Google Spreadsheet";
		else echo "Error, unable to store spreadsheet data";
	}
}
