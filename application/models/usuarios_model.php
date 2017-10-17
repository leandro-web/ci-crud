<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
 
    function __construct(){
        parent::__construct();
    }   
  
    public function cadastrar($dados = NULL){ 
        if($dados!=NULL){
            $this->db->insert('usuarios', $dados);
            redirect('listar');
        }
    }

    public function itens(){    
        $query = $this->db->get('usuarios');  
        return $query;
    }

    public function item($id){
        $this->db->where('id', $id);
        $query = $this->db->get('usuarios');    
        return $query->row_array(); 
    }
    
    public function editar($dados = NULL){ 
        if($dados!=NULL){
            $id = $dados['id'];            
            $this->db->where('id', $id);
            $this->db->update('usuarios', $dados); 
            redirect('listar');
        }
    }

    public function deletar($id = NULL){
        if($id!=NULL){
            $this->db->where('id', $id);
            $this->db->delete('usuarios');
            redirect('listar');
        }
    }
}