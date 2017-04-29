<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MultiDB{

	protected $ci;
	protected $nfe;

	public function __construct(){

        $this->ci =& get_instance();

        $this->nfe = $this->ci->load->database("nfe");
        
	}

}

/* End of file MultiDB.php */
/* Location: ./application/libraries/MultiDB.php */
