<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		//$this->user="root";$this->pass="12345678";$this->host="localhost";$this->ddbb="asixcolar";$this->port="3316";
		$this->user="root";$this->pass="12345678";$this->host="localhost:3306";$this->ddbb="asixcolar";
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
