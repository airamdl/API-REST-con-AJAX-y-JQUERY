<?php
    class Conectar{
        

/**
 * Establishes a connection to the database.
 *
 * @return resource|boolean Returns a database handle on success, or FALSE on failure.
 */

        protected $dbh;
        protected function Conexion()
        {
            try {
                // QA
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=api_rest_jquery_ajax","root","");

                return $conectar;
            } catch (Exception $e) {
                print "¡Error BD!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

/**
 * Set the names of the database to UTF-8
 *
 * @return boolean Returns TRUE on success or FALSE on failure.
 */
    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }

    }
?>