<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plant_request_model extends CI_Model {

	public function insert($insert = array()){
		return $this->db->insert('plant_request', $insert);
	}

	public function all(){
		return $this->db->get('plant_request');
	}

}

/* End of file Plant_request_model.php */
/* Location: ./application/models/Plant_request_model.php */