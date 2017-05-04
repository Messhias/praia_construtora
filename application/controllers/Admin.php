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
        $this->session->sess_destroy();
        $this->load->view('admin/login');
    }
    
    /** 
     * dashboard view
     * @access	public
     * @return 	view
    */
    public function dashboard(){

        $this->load->view('admin/dashboard',array(
                'clients'       =>  $this->client_model->all(),
                'plant_request' =>  $this->plant_request_model->all(),
                'contact_form'  =>  $this->contact_form_model->all(),
            )
        );

    }
       
}