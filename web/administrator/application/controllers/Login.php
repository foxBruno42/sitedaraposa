<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->load->view('login');
	}

	public function logar(){
		var_dump("expression");
		if($this->input->post()){
			$data['usuario'] = $this->input->post('username');
			$data['senha'] = $this->input->post('password');
			redirect(base_url('dashboard'));
		} else {
			$message = array('message_heading' => 'Ops algo deu errado, por favor verifique!','class_result' => 'danger');
			$this->session->set_flashdata('result', $this->parser->parse('template/result_message.php', $message));
			redirect(base_url('login'));
		}
	}
}
?>