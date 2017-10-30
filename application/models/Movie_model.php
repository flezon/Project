<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movie_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function get_pelis($porpagina,$segmento){
		$this->db->select('*');
		$this->db->from('pelis');
		$consulta = $this->db->limit($porpagina,$segmento);
		$consulta = $this->db->get();
		$resultado = $consulta->result_array();	
		return $resultado;
	}
	function get_total_pelis(){
		return $this->db->count_all('pelis');
	}
	function get_id_pelis($id){
		$this->db->select('*');
		
		$this->db->from('pelis');		
		$this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result_array();
	}
	function get_id_comentario($id){
		$this->db->select('*');		
		$this->db->from('posts');
		$this->db->where('id_peli', $id);
		$query = $this->db->get();
        return $query->result_array();
	}
	function get_genero_pelis($genero){
		$this->db->select('*');
		$this->db->from('pelis');
		//$this->db->join('nuevo', 'pelis.id=nuevo.id_peli');
		$this->db->where('Genero', $genero);
		
        $query = $this->db->get();
        return $query->result_array();
	}
	function get_listar_pelis($var){
		$this->db->select('*');
		$this->db->like('Titulo', $var, 'after'); 
		$this->db->from('pelis');
		//$this->db->join('nuevo', 'pelis.id=nuevo.id_peli');
        $query = $this->db->get();
        return $query->result_array();
	}
	function get_listar_top_pelis(){
		$this->db->select('*');	
		$this->db->order_by("Titulo", "asc");
		$this->db->limit('5');
		$this->db->from('pelis');
		//$this->db->join('nuevo', 'pelis.id=nuevo.id_peli');
        $query = $this->db->get();
        return $query->result_array();
	}
	function get_pais_pelis($pais){
		$this->db->select('*');
		$this->db->where('Pais', $pais);		
		//$this->db->join('nuevo', 'pelis.id=nuevo.id_peli');
        $query = $this->db->get("pelis");
        return $query->result_array();
	}
	function get_buscar($search){
		$this->db->select('*');		
	    $this->db->like("Titulo",$search);
	    $this->db->limit(3);
	    $consulta = $this->db->get("pelis");	    
        return $consulta->result_array();
	}
	function get_buscarCriterio($search){
		$this->db->select('*');
		
		$this->db->where("id", $search);
		//$this->db->join('nuevo', 'pelis.id=nuevo.id_peli');
	    $consulta = $this->db->get("pelis");	    
        return $consulta->result_array();
	}
	function getPosts() {
			
		$this->db->from('posts');	
        $consulta = $this->db->get();
        $resultado = $consulta->result_array();	
        return $resultado;        
    }
    //insertamos los nuevos comentarios
    function insertComentarios($id,$respuesta, $fecha) {
        $data = array(
        	'id_peli' => $id,
            'entrada' => $respuesta,
            'fecha' => $fecha
        );
        //if(!empty($respuesta)) {
        	return $this->db->insert('posts', $data);
    	//}
    }
}
