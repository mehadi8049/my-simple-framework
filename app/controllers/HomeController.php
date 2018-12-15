<?php
/**
 * HomeController class extent by Controller class
 */

use app\controllers\Controller;
use app\models\User;
class HomeController extends Controller
{
	
	function __construct()
	{
		# code...
	}
	public function home($_get){
      $page = $this->view('frontEnd/home',compact('_get'));
      include $this->main_page('frontEnd/index');
	}
}