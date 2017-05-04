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

		if($this->client_model->insert($insert)){
			
			?>
			<script>
				alert('Dados enviados com sucesso, em breve entraremos em contato.')
			</script>
			<?php
			redirect("/");
		}else{
			redirect('/');
		}
	}

	public function downloadPlant(){

		$message = "Olá, acesso nosso driver para fazer download / visualizar a planta:";
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
        $this->email->from('internet@praias.com');
        $this->email->to($this->input->post('email'));
        $this->email->subject('Praia Atlântica - Download das plantas');
        $this->email->message($message);
        if($this->email->send()){
			
        	if ($this->plant_request_model->insert($insert)) {
				redirect("/");
        	}

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
        $this->email->from('internet@praias.com');
        $this->email->to($this->input->post('email'));
        $this->email->subject('Praia Atlântica - Download das plantas');
        $this->email->message($this->input->post('contact-form-message'));
        $this->email->send();
        $this->contact_form_model->insert($insert);

		redirect('/','refresh');

	}
}
