<?php

class UnLoggedUsers{
private $ci;
private $allowedControlers;
private $allowedMethods;

public function __construct(){
	$this->ci = & get_instance();
	$class = $this->ci->router->class;
	$method = $this->ci->router->method;
	$allowedControlers= array('Ctsp');
	$allowedMethods= array('index');
}

public function validarAcceso(){
	


}




}

?>