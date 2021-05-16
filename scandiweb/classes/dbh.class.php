<?php

class Dbh {
	private $host = "localhost";
	private $user = "id16823802_root";
	private $pwd = "Root-12345678";
	private $dbName = "id16823802_scandi";

	protected function connect() {
		$dsn = "mysql:host=".$this->host.";dbname=".$this->dbName;
		$pdo = new PDO($dsn, $this->user, $this->pwd);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $pdo;
	}
}