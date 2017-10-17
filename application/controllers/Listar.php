<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listar extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('usuarios_model');
    }

	public function index(){
		$dados = array(
            'usuarios' => $this->usuarios_model->itens()->result(),
        );
        $this->load->view('listar',$dados);
	}
}
