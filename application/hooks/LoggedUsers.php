<?php

class LoggedUsers{
private $ci;


public function __construct(){
	$ci =& get_instance();
	$class = $this->ci->router->class;
	$method = $this->ci->router->method;
	//$this->ci->load->database();
}


public function validarAcceso(){	
	$query = $this->db->get('accesos');
	foreach ($query->result() as $row){
		 	$rol =$this->row->Rol;
		 	}
	if($rol=='Profesor'){
	$query = $this->db->get('accesoprof');
	foreach ($query->result() as $row){
		 	if($row->controlador==$class){
		 		foreach ($query->result() as $row) {
		 			if($row->metodos==$method){
		 				break;
		 			}
		 		}
		 	}
		 }
	//ci->redirect(base_url());
	
	}else{
		$query = $this->db->get('accesoalum');
	foreach ($query->result() as $row){
		 	if($row->controlador==$class){
		 		foreach ($query->result() as $row) {
		 			if($row->metodos==$method){
		 				break;
		 			}
		 		}
		 	}
		 }
		//$ci->redirect(base_url());
	}	 	
}




	
}

?>