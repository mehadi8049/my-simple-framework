<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../config/Config.php');
/**
 * 
 */
class Database extends config
{   
	private $config;
	public $con;
	function __construct()
	{
		$this->config=new Config();
		$this->con=$this->db_connect();
	}
    public function db_connect(){
    	$db_host =$this->config->db_host;
    	$db_user = $this->config->db_user;
    	$db_password = $this->config->db_password;
    	$db_name = $this->config->db_name;
    	$con = mysqli_connect( "$db_host", "$db_user", "$db_password", "$db_name" );

    	if( !$con )
    	{ 
    	    die("connection object not created: ".mysqli_error($con));
    	}

    	if(mysqli_connect_errno())
    	{ 
    	    die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    	}
        if($con==true){
           return $con;
        }
    }

    public function select($query){
         $resource=mysqli_query($this->con,$query);
         return mysqli_fetch_assoc($resource);
    }

} 


