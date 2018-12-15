<?php
/**
 * controller class
 */
namespace app\controllers;
class Controller
{
	
	function __construct() {}

	public function view($file_name, $data=false){
		if($data==true){
			if(is_array($data))
			extract($data);
		}
       return 'resource/views/'.$file_name.'.php';
	}

	public function main_page($file_name){
       return 'resource/views/'.$file_name.'.php';
	}
}