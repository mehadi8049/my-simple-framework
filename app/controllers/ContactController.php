<?php

use app\controllers\Controller;
class ContactController extends Controller
{
	
	function __construct()
	{
		# code...
	}
	public function contact(){
       $page=$this->view('frontEnd/contact');
       include $this->main_page('frontEnd/index');
	}
}