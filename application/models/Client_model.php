<?php

/**
 * @package	MODEL
 * @author 	FABIO WILLIAM CONCEIÇÃO
 * @since 	VERSION 1.0.0
 * @filesource
*/


defined('BASEPATH') OR exit('No direct script access allowed');

class Client_model extends CI_Model {
    
    /**
     * @access	public
     * @return  database object
     * @filesource
    */
    public function all(){
        return $this->db->get('client');
    }

    
    /**
     * @access	public
     * @param   insert array
     * @return  database object
     * @filesource
    */
    public function insert($insert= array()){
        return $this->db->insert('client',$insert);
    }
}