<?php
if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class DBMtsp extends CI_Model{
	function __construct(){
		parent::__construct();
	}

function validarDatos($data){
		$this->load->database();
		$query = $this->db->get('lista_alumno');
		if($query->num_rows()>0){
		 foreach ($query->result() as $row){
		 	if(($row->Matricula == $data['nombre']) && ($row->Password == $data['password'])){
		 		redirect(base_url()."Datos");
		 	}
		 }
  	
		redirect(base_url()."Ctsp");
		}

	}

}

?>	