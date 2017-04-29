<?php

/**
 * @package	library
 * @author 	FABIO WILLIAM CONCEIÇÃO
 * @since 	VERSION 1.0.0
 * @filesource
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Curl{

	protected 	$ci;
	public 		$ch;
	public 		$content;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	/**
	*	FUNCTION TO SET NFE ORDER PAYMAXX AND INSERT ADDRESS ON WIFIMAXX
	*
	*	@access 			public
	*
	*	@param 		array 	$header
	*	@param 		array 	$dataPost
	*	@param 		string 	$url
	*	@param 		int 	$isPost
	*	@param 		int 	$sslVerify
	*	@param 		int 	$sslVeryPeer
	*	@return 	json 	array
	**/
	public function execute( $header = array(), $isPost = 1, $sslVerify = 0, 
		$sslVeryPeer = 1, $dataPost = array(), $url = ""){

		try {
			

			$ch = curl_init();

			if ($isPost) {
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			}

			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $sslVerify);

			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $sslVeryPeer);

			if ($isPost) {

	    		$dataPost = json_encode($dataPost,true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $dataPost);
			}

			curl_setopt($ch, CURLOPT_URL, $url);

			curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

			$content = curl_exec($ch);

			curl_close($ch);

			return json_decode($content);


		} catch (Exception $e) {

			return $e;

		}
	}	

	public function read( $url = "",$headers = array() ){

		ini_set("max_execution_time", 300);

		$ch = curl_init();

		$timeout = 500000;

		curl_setopt($ch, CURLOPT_URL, $url);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

		curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);

		$data = curl_exec($ch);

		curl_close($ch);

		return json_decode($data,true);
	}

}

/* End of file Curl.php */
/* Location: ./application/libraries/Curl.php */
