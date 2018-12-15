<?php
/**
 * TeamController class extent by Controller class
 */

use app\controllers\Controller;
class TeamController extends Controller
{
	
	function __construct()
	{
		# code...
	}
	public function team(){
      $page = $this->view('frontEnd/team');
      include $this->main_page('frontEnd/index');
	}
}