<?php
    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
                //QA
				$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=api_rest_jquery_ajax","root","");
                
				return $conectar;
			} catch (Exception $e) {
				print "¡Error BD!: " . $e->getMessage() . "<br/>";
				die();
			}
        }

        public function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
        }
    }
?>