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

	public function cadastrar(){
		if(isset($_POST["confirma"]) && $_POST["confirma"] == 'ok'){	
			$dados = array(
                    'nome' => $_POST["nome"],
                    'idade' => $_POST["idade"]
            );
        	$this->usuarios_model->cadastrar($dados);
        }	
        $this->load->view('listar_form');
	}

	public function editar(){		
        $this->load->view('listar_form');
	}

	public function deletar(){		
	}
}
