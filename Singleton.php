<?php
/**
* New class. Say, a Database class.
*the goal of the singleton pattern in things like a database is to help your code come off as efficient (because it allows your app *connect only once to the DB)
*/

class SingletonDB
{
	private static $_instance;
	private $_pdo;
	
	private function __construct(){
		try{
			$this->_pdo = new PDO('mysql:host=127.0.0.1;dbname=foo','root','');
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
	//getInstance method to instantiate the method
	
	public function getInstance(){
		if(!isset(self::$_instance)){
			self::$_instance = new SingletonDB;
		}
		return self::$_instance;
	}
}
