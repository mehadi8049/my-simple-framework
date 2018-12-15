<?php
/**
 * HomeController class extent by Controller class
 */

use app\controllers\Controller;
class AboutController extends Controller
{
	
	function __construct()
	{
		# code...
	}
	public function about(){
      $page = $this->view('frontEnd/about');
      include $this->main_page('frontEnd/index');
	}
}