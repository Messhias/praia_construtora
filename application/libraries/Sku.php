<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @package	Template
 * @author 	FABIO WILLIAM CONCEIÇÃO
 * @since 	VERSION 1.0.0
 * @filesource
*/

class Sku{

	protected $ci;

	/**
	*	CLASS CONSTRUCTOR
	*	
	*	@return 	class constructor
	**/
	public function __construct(){
		
        $this->ci =& get_instance();
	}

	/**
	*	FUNCTION TO GENERATE A CUSTOM SKU
	*	@param 	int 					store
	*	@param 	array 					player
	*	@param 	double / int			product
	*	@param 	text 					ic
	*	@param 	double 					order_value
	*
	*	@return string  				sku -> uppercase string
	**/
	public function generate($store, $storeBranch = "", $product = "",$ic = '',$order_value='',$hotspot = '',$user = '', $date = ''){

		$sku = "";

		$sku = "M".$store;

		if (!empty($player)) {

			$sku .= "L".$storeBranch;

		}

		if (!empty($product)) {

			$sku .= "ID".$product;

		}

		$sku .= "R" . $hotspot . 'UID'.$user . 'D'. $date;

		if (!empty($ic)) {

			// $sku .= "IC".$ic;

		}

		$sku .= "#ORD".rand(0,99999);

		if($this->ci->order_model->selectWithArray(array('cd_sku' =>$sku))['num_rows'] > 0) {

			$this->generate($store, $player, $product,$ic);

		}else if ( count( $sku ) > 45 ) {

			$this->generate($store, $player, $product,$ic);

		}else{

			return strtoupper($sku);

		}

	}	

}

/* End of file Sku.php */
/* Location: ./application/libraries/Sku.php */
