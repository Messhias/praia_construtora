<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @package	CONTROLLER
 * @author 	FABIO WILLIAM CONCEIÇÃO
 * @since 	VERSION 1.0.0
 * @filesource
*/


class Admin extends CI_Controller {
    
    
    /** 
     * MAIN LOGIN PAGE
     * @access	public
     * @return 	view
    */
    public function index(){
        
        $this->load->view('admin/login');
    }
    
    /** 
     * dashboard view
     * @access	public
     * @return 	view
    */
    public function dashboard(){
        
    }
       
}