<?php

/**
 * @package	Template
 * @author 	FABIO WILLIAM CONCEIÇÃO
 * @since 	VERSION 1.0.0
 * @filesource
*/


defined('BASEPATH') OR exit('No direct script access allowed');

class Str{

	protected $ci;

	/**
	 * CLASS CONSTRUCTOR
	 *
	 * @return	class constructor
	*/
	public function __construct()
	{
        $this->ci =& get_instance();
	}


	/**
	 * REPLACE FUNCTION
	 * @param 	string $string
	 * @param 	array  $search
	 * @param 	array  $replace
	 * @return	string
	*/
	public function replace(	$string = "",	$search 	=	array() , $replace 	=	array()){
		return str_replace($search, $replace, $string);
	}



	/**
	 * FORMAT CELPHONE NUMBER FUNCTION
	 *
	 * @param 	string  $mobile
	 * @return	string
	*/
	public function formatMobile($mobile = ""){

        if(!empty($mobile) ){
            $countryCode = substr($mobile, 0, 2);
            $areaCode = substr($mobile, 2, 2);
            $formattedMobile = substr($mobile, 4);
            $formattedMobile = strlen($formattedMobile) == 8 ? str_split($formattedMobile, 4) : str_split($formattedMobile, 5);
            $formattedMobile = "+".$countryCode." (".$areaCode.") ".$formattedMobile[0]."-".$formattedMobile[1];
            return $formattedMobile;
        }

    }




}

/* End of file Replace.php */
/* Location: ./application/libraries/Replace.php */
