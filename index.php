<?php
$path = trim($_SERVER['REQUEST_URI'], '/');

$path = parse_url( $path, PHP_URL_PATH);

$path=explode('/', $path);
if (isset($path[1])) {
	$path=$path[1];
}else{$path='';}
require_once 'app/controllers/Controller.php';
require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/AboutController.php';
require_once 'app/controllers/TeamController.php';
require_once 'app/controllers/ItemController.php';
require_once 'app/controllers/ContactController.php';
require_once 'router/Router.php';
require_once 'routes/web.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  Router::run_post($path, $_POST);
}
if($_SERVER['REQUEST_METHOD'] == 'GET'){

  Router::run_get($path,$_GET);
}
