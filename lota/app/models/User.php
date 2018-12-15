<?php 
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../../database/Database.php');

class User extends Database
{   
    public function get(){
    	$query="select * from tbl_user";
    	return $this->select($query);
    }
}


