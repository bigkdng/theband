<?php 
	
	
	class Tour{

		private $id;

		//costruttore dei toyr
		function __construct($name){
			$res = $GLOBALS['db']->select("select id from tours where id = ? or nome = ?", [$name, $name]);

			if (count($res)>0) {
				$this->id = $res[0]["id"];
			} else {
				$this->id = 0;
			}
		}

		//dettagli tour
		public function get_detail(){
			$res = $GLOBALS['db']->select("select * from tours where id = ? or nome = ?", [$this->id]);
			if (count($res)==0) {
				return null;
			}
			return $res[0];
		}


		public static function get_months(){
			$res = $GLOBALS['db']->select("select month(data) as mese , count(id) as tot from tours group by month(data ");
			print($res);
			return $res;

		}

	}

 ?>