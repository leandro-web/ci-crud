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
        $dados = array(
        	'acao' => 1
        );
        $this->load->view('listar_form',$dados);
	}

	public function editar(){
		if ($this->uri->segment(3) === FALSE){
            $id = NULL;
        }else{
            $id = $this->uri->segment(3);
        }

		if(isset($_POST["confirma"]) && $_POST["confirma"] == 'ok'){
			$dados = array(
			    'id' => $id,
                'nome' => $_POST["nome"],
                'idade' => $_POST["idade"]
            );
        	$this->usuarios_model->editar($dados);
        }
        $dados = array(
        	'acao' => 2,
        	'usuario' => $this->usuarios_model->item($id)
        );
        $this->load->view('listar_form',$dados);
	}

	public function deletar(){
        if ($this->uri->segment(3) === FALSE){
            $id = NULL;
        }else{
            $id = $this->uri->segment(3);
            $this->usuarios_model->deletar($id);
        }
        $this->load->view('listar');
	}
}
