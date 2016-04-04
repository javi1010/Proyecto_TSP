<?php
if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Ctsp extends CI_Controller {

	function _construct(){
		parent::__construct();
	}


function index(){
	$this->load->model('DBMtsp');
	$this->load->helper('form');
	$dato['titulo']= 'Principal';
	$this->load->view('headers',$dato);
	$this->load->view('Principal');
}


function comprobarDatos(){
		$this->load->model('DBMtsp');
		$data = array('nombre' => $this->input->post('nombre'),'password' => $this->input->post('password'));
		$this->DBMtsp->validarDatos($data);
		
	}

}
?>