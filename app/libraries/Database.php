<?php 

    class Database{
        private $name = DB_NAME;
        private $host = DB_HOST;
        private $pass = DB_PASS; 
        private $user = DB_USER;

        private $dbh;
        private $error;
        private $stmt;

        public function __construct(){
            $dsn = "mysql:host=?;dbname=?";
            $dsn = inputString($dsn , '?' , [$this->host, $this->name]);
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            try{
                $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
            }catch(PDOException $e){
                $this->error = $e->getMessage();
                echo spaces($this->error, 1);
            }
        }

        public function query($sql){
            $this->stmt = $this->dbh->prepare($sql);
        }

        public function bind($param, $value, $type=null){

            if(is_null($type)){
                switch(true){
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                }
            }

            $this->stmt->bindParam($param, $value, $type);
        }

        public function execute(){
//            echo $this->stmt->debugDumpParams();
            return $this->stmt->execute();
        }

        public function resultSet(){
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function single(){
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }

        public function rowCount(){
            return $this->stmt->rowCount();
        }
    }