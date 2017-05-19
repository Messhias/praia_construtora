<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @package	CONTROLLER
 * @author 	FABIO WILLIAM CONCEIÇÃO
 * @since 	VERSION 1.0.0
 * @filesource
*/

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view("sections/slider");
		$this->load->view('sections/why-choose');
		$this->load->view("sections/want-more");
		$this->load->view("sections/contact");
		$this->load->view('template/footer');
	}

	public function sendInformation(){
		$insert = array(
			'name'			=>	$this->input->post('name'),
			'telphone'		=>	$this->input->post('phone'),
			'email'			=>	$this->input->post('email'),
			'observation'	=>	$this->input->post('obs'),
		);

		$message = "Contanto de interesse através do site: " . site_url();
		$message .= "\n";
			$message .= "Nome: " . $insert['name']. "\n";
			$message .= "Telefone: " . $insert['telphone']. "\n";
			$message .= "E-mail: " . $insert['email']. "\n";
			$message .= "Observação: \n" . $insert['observation']. "\n";
		$message.= "";

		$this->load->library('email');
        $this->email->clear();
        $this->email->set_newline("\r\n");
        $this->email->from($this->input->post('email'));
        $this->email->to("praias@praias.com");
        $this->email->cc("enzo@praias.com");
        $this->email->subject('Praia Atlântica - Download das plantas');
        $this->email->message($message);
		if($this->email->send()){

			$this->client_model->insert($insert);

			$this->conversion();

		}
	}

	public function downloadPlant(){

		$message = "Olá, acesse nosso driver para fazer download / visualizar a planta:";
		$message .="\n https://drive.google.com/open?id=0B-yTn1Lu6L40TnVfRW5NZjFKaDA";
		$message .= "\n Agradecemos o contato";

		$insert = array(
			'email'			=>	$this->input->post('email'),
			'plant_link'	=>	"https://drive.google.com/open?id=0B-yTn1Lu6L40TnVfRW5NZjFKaDA",
			'data'			=>  date("Y-m-d"),
		);

		$this->load->library('email');
        $this->email->clear();
        $this->email->set_newline("\r\n");
        $this->email->from("praias@praias.com");
        $this->email->to($this->input->post('email'));
        $this->email->cc("enzo@praias.com");
        $this->email->subject('Praia Atlântica - Download das plantas');
        $this->email->message($message);
        if($this->email->send()){
			
        	$this->plant_request_model->insert($insert);

			$this->conversion();
		}
	}

	public function contact(){

		$insert = array(
			'name'			=>	$this->input->post('contact-form-name'),
			'email'			=>	$this->input->post('contact-form-email'),
			'message'		=>	$this->input->post('contact-form-message'),
			'date'			=>  date("Y-m-d"),
		);

		$this->load->library('email');
        $this->email->clear();
        $this->email->set_newline("\r\n");
        $this->email->from($this->input->post('email'));
        $this->email->to("praias@praias.com");
        $this->email->cc("enzo@praias.com");
        $this->email->subject('Praia Atlântica - Formulário de contato');
        $this->email->message($this->input->post('contact-form-message'));
        if($this->email->send()){
	        $this->contact_form_model->insert($insert);

			$this->conversion();
        }

	}

	public function conversion(){
		?>
			
			<h1>Obrigado pelo contato e visita!</h1>
			<p>
				<a href="<?=site_url('/'); ?>">Voltar ao site</a>
			</p>
	

			<!-- Google Code for Atl&acirc;ntica Conversion Page -->
			<script type="text/javascript">
			/* <![CDATA[ */
			var google_conversion_id = 855513986;
			var google_conversion_language = "en";
			var google_conversion_format = "3";
			var google_conversion_color = "ffffff";
			var google_conversion_label = "tnldCMHBlXEQgrf4lwM";
			var google_remarketing_only = false;
			/* ]]> */
			</script>
			<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
			</script>
			<noscript>
			<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/855513986/?label=tnldCMHBlXEQgrf4lwM&amp;guid=ON&amp;script=0"/>
			</div>
			</noscript>

		<?php
	}
}
