<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package	Template
 * @author 	FABIO WILLIAM CONCEIÇÃO
 * @since 	VERSION 1.0.0
 * @filesource
*/

class Template{


	/**
	 * VARIABLES
	 *
	 * DEFINE VARIABLES PRIVATE TO TREATMENT INPUTS
	*/

	protected 	$ci;
	private 	$css 		= "";
	private 	$html 		= "";
	private 	$js 		= "";
	private 	$mix 		= "";
	private 	$params 	= "";
	private 	$bodyClass 	= "";
	private 	$title 		= "";
	private 	$menuActive = "";
	private 	$filePath 	= "";
	private 	$data 		= array();


	/**
	 * CLASS CONSTRUCTOR
	 *
	 * @return	class constructor
	 */
	public function __construct(){
		$this->ci = &get_instance();
	}


	/**
	 * ERASE AND CLEAR ALL ATRRIBUTES VALUES OF CLASS
	 *
	 * @return	void
	 */
	private function eraseAttributes(){
		$this->setCSS("");
		$this->setHTML("");
		$this->setJS("");
		$this->setMix("");
		$this->setParams("");
		$this->setBodyClass("");
		$this->setMenuActive("");
		$this->setFilePath("");
	}

	/**
	 * MENU TEMPLATE
	 *
	 * GENERATE A MENU TEMPLATE WITH RENDER VIEW RESPONSE
	 *
	 * @param	string		$title		some title to render in a view
	 * @param 	path 		$filePath 	set the view filepath WITHOUT EXTENSION, ONLY PATH 
	 * @param 	mix 		$css 		custom css to render in view (could be a file or inline)
	 * @param 	HTML 		$html 		mixed HTML to render in view
	 * @param 	javascript 	$js 		custom javascript to render in view (could be a file or inline)
	 * @param 	mixed 		$params 	custom params to render a view (could be somethin like a php scripts inline, javascript and etc)
	 * @param 	string 		$bodyClass 	class(es) to render in tag <body></body>
	 * @param 	string		$menuActive class(es) to set if is menu active or not
	 * @return	view
	 */
	public function menu($title = "", $filePath = "", $css = "", $html = "", $js = "", $mix = "", $params = "", $bodyClass = "", $menuActive = ""){

		$this->setTitle($title);
		$this->setFilePath($filePath);
		$this->setCSS($css);
		$this->setHTML($html);
		$this->setJS($js);
		$this->setMix($mix);
		$this->setParams($params);
		$this->setBodyClass($bodyClass);
		$this->setMenuActive($menuActive);

		$this->setData(
			array(
				'title' 		=> $this->getTitle(),
				'css' 			=> $this->getCSS(),
				'html' 			=> $this->getHTML(),
				'js' 			=> $this->getJS(),
				'mix' 			=> $this->getMix(),
				'params' 		=> $this->getParams(),
				'bodyClass' 	=> $this->getBodyClass(),
				'menuActive'	=> $this->getMenuActive()
			)
		);

		$this->ci->load->view($this->getFilePath(), $this->getData());

		$this->eraseAttributes();
	}

	/**
	 * HEADER TEMPLATE
	 *
	 * GENERATE A HEADER TEMPLATE WITH RENDER VIEW RESPONSE
	 *
	 * @param	string		$title		some title to render in a view
	 * @param 	path 		$filePath 	set the view filepath WITHOUT EXTENSION, ONLY PATH 
	 * @param 	mix 		$css 		custom css to render in view (could be a file or inline)
	 * @param 	HTML 		$html 		mixed HTML to render in view
	 * @param 	javascript 	$js 		custom javascript to render in view (could be a file or inline)
	 * @param 	mixed 		$params 	custom params to render a view (could be somethin like a php scripts inline, javascript and etc)
	 * @param 	string 		$bodyClass 	class(es) to render in tag <body></body>
	 * @return	view
	 */

	public function header($title = "", $filePath = "", $css = "", $html = "", $js = "", $mix = "", $params = "", $bodyClass = ""){

		$this->setTitle($title);
		$this->setFilePath($filePath);
		$this->setCSS($css);
		$this->setHTML($html);
		$this->setJS($js);
		$this->setMix($mix);
		$this->setParams($params);
		$this->setBodyClass($bodyClass);

		$this->setData(
			array(
				'title' 	=> $this->getTitle(),
				'css' 		=> $this->getCSS(),
				'html' 		=> $this->getHTML(),
				'js' 		=> $this->getJS(),
				'mix' 		=> $this->getMix(),
				'params' 	=> $this->getParams(),
				'bodyClass' => $this->getBodyClass(),
			)
		);

		$this->ci->load->view($this->getFilePath(), $this->getData());

		$this->eraseAttributes();
	}

	/**
	 * FOOTER TEMPLATE
	 *
	 * GENERATE A FOOTER TEMPLATE WITH RENDER VIEW RESPONSE
	 *
	 * @param	string		$title		some title to render in a view
	 * @param 	path 		$filePath 	set the view filepath WITHOUT EXTENSION, ONLY PATH 
	 * @param 	mix 		$css 		custom css to render in view (could be a file or inline)
	 * @param 	HTML 		$html 		mixed HTML to render in view
	 * @param 	javascript 	$js 		custom javascript to render in view (could be a file or inline)
	 * @param 	mixed 		$params 	custom params to render a view (could be somethin like a php scripts inline, javascript and etc)
	 * @param 	string 		$bodyClass 	class(es) to render in tag <body></body>
	 * @return	view
	 */
	public function footer($css = "", $filePath = "", $html = "", $js = "", $mix = "", $params = "", $bodyClass = ""){

		$this->setCSS($css);
		$this->setFilePath($filePath);
		$this->setHTML($html);
		$this->setJS($js);
		$this->setMix($mix);
		$this->setParams($params);
		$this->setBodyClass($bodyClass);

		$this->setData(
			array(
				'title' 	=> $this->getTitle(),
				'css' 		=> $this->getCSS(),
				'html' 		=> $this->getHTML(),
				'js' 		=> $this->getJS(),
				'mix' 		=> $this->getMix(),
				'params' 	=> $this->getParams(),
				'bodyClass' => $this->getBodyClass(),
			)
		);

		$this->ci->load->view($this->getFilePath(), $this->getData());

		$this->eraseAttributes();
	}

	/**
	 * VIEW TEMPLATE
	 *
	 * GENERATE A VIEW TEMPLATE WITH RENDER VIEW RESPONSE
	 *
	 * @param 	path 		$filePath 	set the view filepath WITHOUT EXTENSION, ONLY PATH
	 * @param	array		$data		array with all information to render into the view
	 * @return	view
	 */

	public function view($filePath = "", $data = array()){

		$this->setFilePath($filePath);

		$this->setData(
			$data
		);

		$this->ci->load->view($this->getFilePath(), $this->getData());

		$this->eraseAttributes();

	}

	/**
	 * SETTER FUNCTION
	 *
	 * SET CSS VARIABLE VALUE
	 *
	 * @param	string		$css
	 * @return	void
	 */

	public function setCSS(			$css = "") {
		$this->css = $css;
	}


	/**
	 * GETTER FUNCTION
	 *
	 * GET CSS VARIABLE VALUE
	 *
	 * @return	$css
 	*/
	public function getCSS() {
		return $this->css;
	}


	/**
	 * SETTER FUNCTION
	 *
	 * SET HTML VARIABLE VALUE
	 *
	 * @param	string		$html
	 * @return	void
	 */
	public function setHTML(		$html = "") {
		$this->html = $html;
	}


	/**
	 * GETTER FUNCTION
	 *
	 * GET HTML VARIABLE VALUE
	 *
	 * @return	$html
 	*/
	public function getHTML() {
		return $this->html;
	}


	/**
	 * SETTER FUNCTION
	 *
	 * SET JS VARIABLE VALUE
	 *
	 * @param	string		$js
	 * @return	void
	 */
	public function setJS(			$js = "") {
		$this->js = $js;
	}


	/**
	 * GETTER FUNCTION
	 *
	 * GET JS VARIABLE VALUE
	 *
	 * @return	$js
 	*/
	public function getJS() {
		return $this->js;
	}


	/**
	 * SETTER FUNCTION
	 *
	 * SET MIX VARIABLE VALUE
	 *
	 * @param	string		$mix
	 * @return	void
	 */
	public function setMix(			$mix = "") {
		$this->mix = $mix;
	}

	/**
	 * GETTER FUNCTION
	 *
	 * GET mix VARIABLE VALUE
	 *
	 * @return	$mix
 	*/
	public function getMix() {
		return $this->mix;
	}


	/**
	 * SETTER FUNCTION
	 *
	 * SET PARAMS VARIABLE VALUE
	 *
	 * @param	string		$params
	 * @return	void
	 */
	public function setParams(		$params = "") {
		$this->params = $params;
	}


	/**
	 * GETTER FUNCTION
	 *
	 * GET PARAMS VARIABLE VALUE
	 *
	 * @return	$params
 	*/
	public function getParams() {
		return $this->params;
	}


	/**
	 * SETTER FUNCTION
	 *
	 * SET BODYCLASS VARIABLE VALUE
	 *
	 * @param	string		$bodyClass
	 * @return	void
 	*/
	public function setBodyClass(	$bodyClass = "") {
		$this->bodyClass = $bodyClass;
	}

	/**
	 * GETTER FUNCTION
	 *
	 * GET BODYCLASS VARIABLE VALUE
	 *
	 * @return	$bodyClass
 	*/
	public function getBodyClass() {
		return $this->bodyClass;
	}

	/**
	 * SETTER FUNCTION
	 *
	 * SET DATA VARIABLE VALUE
	 *
	 * @param	array		$data
	 * @return	void
 	*/
	public function setData(		$data = array()) {
		$this->data = array_merge($this->data, $data);
	}

	/**
	 * GETTER FUNCTION
	 *
	 * GET DATA VARIABLE VALUE
	 *
	 * @return	$data
 	*/
	public function getData() {
		return $this->data;
	}

	/**
	 * SETTER FUNCTION
	 *
	 * SET TITLE VARIABLE VALUE
	 *
	 * @param	string		$title
	 * @return	void
 	*/
	public function setTitle(		$title = ""	) {
		$this->title = $title;
	}

	/**
	 * GETTER FUNCTION
	 *
	 * GET TITLE VARIABLE VALUE
	 *
	 * @return	$title
 	*/
	public function getTitle() {
		return $this->title;
	}

	/**
	 * SETTER FUNCTION
	 *
	 * SET MENUACTIVE VARIABLE VALUE
	 *
	 * @param	string		$data
	 * @return	void
 	*/
	public function setMenuActive(	$menuActive = "") {
		$this->menuActive = $menuActive;
	}


	/**
	 * GETTER FUNCTION
	 *
	 * GET MENUACTIVE VARIABLE VALUE
	 *
	 * @return	$menuActive
 	*/
	public function getMenuActive() {
		return $this->menuActive;
	}


	/**
	 * SETTER FUNCTION
	 *
	 * SET DATA VARIABLE VALUE
	 *
	 * @param 	path	$filePath
	 * @return	file
 	*/
	public function setFilePath(	$filePath = ""){
		$this->filePath 	=	$filePath;
	}


	/**
	 * GETTER FUNCTION
	 *
	 * GET FILEPATH VARIABLE VALUE
	 *
	 * @return	$filePath
 	*/
	public function getFilePath(){
		return	$this->filePath;
	}

}

/* End of file Template.php */
/* Location: ./application/libraries/Template.php */