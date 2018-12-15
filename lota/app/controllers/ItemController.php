<?php
/**
 * ItemController class extent by Controller class
 */

use app\controllers\Controller;
class ItemController extends Controller
{
	
	function __construct()
	{
		# code...
	}
	public function item(){
      $page = $this->view('frontEnd/item');
      include $this->main_page('frontEnd/index');
	}
}