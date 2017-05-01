<?php

/**
 * @package	MODEL
 * @author 	FABIO WILLIAM CONCEIÇÃO
 * @since 	VERSION 1.0.0
 * @filesource
*/


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    
    /**
     * @access	public
     * @param 	where   array
     * @return  database object
     * @filesource
    */
    public function select($where = array()){
        
        return $this->db->get_where("admin",$where);
        
    }
    
}