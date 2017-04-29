<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Json{

    /**
     * DIEJSON
     *
     * FUNCTION TO RETURNS A JSON API SYSTEM
     *
     * @param   string  $response       
     * @param   string  $password 
     * @param   string  $charset
     * @param   string  $allow
     * @return  json
     */
	 public function dieJSON($response, $charset = "utf-8", $allow = "*"){
        
        header("Content-Type: application/json; charset={$charset}; Access-Control-Allow-Origin:{$allow}");
        die(
            json_encode(
                    $response
                )
            );
    }
    

    /**
     * RESPONSEJSON
     *
     * SET RESPONSE OF @diejson function status
     *
     * @param   string  $output 
     * @return  void
     */
    private function responseJSON($output){
        
        $this->response
        ->body(
            json_encode(
                    $output
                )
            )->headers(
                array(
                    "content-type"                  =>  "application/json",
                    "Access-Control-Allow-Origin"   =>  "*",
                    "charset"                       =>  "utf-8"
            )
        );
    }
	
}

?>