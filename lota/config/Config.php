<?php

/**
 * 
 */
class Config
{
public $db_host;
public $db_user;
public $db_password;
public $db_name;

function __construct()
{
	$this->db_host='localhost';
	$this->db_user='root';
	$this->db_password='';
	$this->db_name='test';
}
}