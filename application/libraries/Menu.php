<?php
if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Menu{
	private $arr_menu;

	public function __construct($arr){
		$this->arr_menu =$arr;
	}

public function crear_menu(){
	$ret_menu = "<nav><ul>";
	foreach ($this->arr_menu as $opc) {
		$ret_menu .= "<div class="img-menu" >"."</div>"."<li>".$opc."</li>";
	}
	$ret_menu.="</ul></nav>"
	return $ret_menu;
}

}

?>