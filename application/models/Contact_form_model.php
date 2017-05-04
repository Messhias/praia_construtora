<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_form_model extends CI_Model {

	public function insert($insert = array()){
		return $this->db->insert('contact_form', $insert);
	}

	public function all(){
		return $this->db->get('contact_form');
	}

}

/* End of file Contact_form_model.php */
/* Location: ./application/models/Contact_form_model.php */