<?php 
	
	
	class DB{

		private $dbhost;
		private $$dbname;
		private $dbuser;
		private $dbpassword;

		
		function __construct($dbhost, $dbname, $dbuser, $dbpassword){
			$this->dbhost = $dbhost;.
			$this->dbname = $dbname;.
			$this->dbuser = $dbuser;.
			$this->dbpassword = $dbpassword;.
		}


		public function select($query, $params = []){
			try {
				$conn = new PDO ("mysql:host=".$this->host.";name=".$this->name,$this->dbuser, $this->dbpassword);
				$stmt = $conn->prepare($query);
				$stmt->execute($params);
				$array = array();
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					array_push($array, $row);
				}
				return $array;
			} catch (PDOException $e) {
				echo $e->getmessage();
				return array();
			}
		}


		public function query($query, $params = []){
			try {
				$conn = new PDO ("mysql:host=".$this->host.";name=".$this->name,$this->dbuser, $this->dbpassword);
				$stmt = $conn->prepare($query);
				$stmt->execute($params);
				return array("OK!");
			} catch (PDOException $e) {
				return array("ERRORE:", $e->getMessage());
			}
		}
	}

 ?>