<?php

class dbConnection {
	protected $link;
	private $server, $un, $pw, $db;

	public function __construct($server, $un, $pw, $db)
	  {
	    $this->server = $server;
	    $this->un = $un;
	    $this->pw = $pw;
	    $this->db = $db;
	    $this->connect();

	private function connect()
	  {
	    $this->link = msyqli_connect($this->server, $this->username, $this->password);
	    mysqli_select_db($this->db, $this->link);
	  }

	public function __sleep() {
	
	  return array('server','un','pw','db');
	}

	public function __wakeup() {

	  $this->connect();
	}
}

?>
	
