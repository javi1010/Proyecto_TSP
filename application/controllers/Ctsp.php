<?php
if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Ctsp extends CI_Controller {

	function _construct(){
		parent::__construct();
	$this->load->model('DBMtsp');
	$this->load->helper('form');
	$this->load->database();
	}


function index(){
	$this->load->model('DBMtsp');
	$this->load->helper('form');
	$dato['titulo']= 'Principal';
	$this->load->view('headers',$dato);
	$this->load->view('Principal');
}


function CalificarTareas(){
	$dato['titulo']= 'Calificar tarea';
	$this->load->view('headers',$dato);
	$this->load->view('CalificarTareas');
}

function prueba(){
	$dato['titulo']= 'Prueba';
	$this->load->view('headers',$dato);
	$this->load->view('pruebap');
}


function comprobarDatos(){
		$this->load->model('DBMtsp');
		$data = array('nombre' => $this->input->post('nombre'),'password' => $this->input->post('password'));
		$this->DBMtsp->validarDatos($data);
		
	}

}
?>