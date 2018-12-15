

<?php
	Router::get('', 'HomeController@home');
	Router::get('home', 'HomeController@home');
	Router::get('about', 'AboutController@about');
	Router::get('team', 'TeamController@team');
	Router::get('item', 'ItemController@item');
	Router::get('contact', 'ContactController@contact');

