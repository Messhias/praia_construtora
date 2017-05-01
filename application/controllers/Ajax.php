<?php


/**
 * @package	CONTROLLER
 * @author 	FABIO WILLIAM CONCEIÇÃO
 * @since 	VERSION 1.0.0
 * @filesource
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
    
    public function sendContact(){
        
    }

    public function loginAdmin(){

        if($_POST){

           $result = $this->admin_model->select(
                array(
                    'username'  => $this->input->post('username'),
                    'pass'      => $this->input->post('pass'),
                )
            );

            if($result->num_rows() > 0){

                $this->session->set_userdata('admin',$result->result());
            
                return $this->json->dieJSON(
                    array(
                        'code'  =>  200,
                        'message'   =>  'Login sucessuful'
                    )
                );

            }else{
                return $this->json->dieJSON(
                    array(
                        'code'  =>  500,
                        'message'   =>  'Login failed'
                    )
                );
            }
            
        }else{
            return 0;
        }
        
    }

}

/* End of file Base.php */
/* Location: ./application/controllers/Base.php */