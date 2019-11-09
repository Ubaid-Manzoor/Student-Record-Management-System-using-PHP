<?php
    class User{
        /**
         * @var Database
         */
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function register($data){
            $this->db->query("INSERT INTO users (name, email, pass) VALUES (:name, :email, :pass)");

            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':pass', $data['pwd']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }

        }

        public function login($email, $password){
            $this->db->query("SELECT * FROM users WHERE email = :email");
            $this->db->bind(':email', $email);
            $this->db->execute();

            $user = $this->db->single();

            $hashed_password = $user->pass;
            if(password_verify($password, $hashed_password)){
                return $user;
            }else{
                return false;
            }
        }

        public function findUserByEmail($email){
            $query = "SELECT * FROM users WHERE email=:email";

            $this->db->query($query);
            $this->db->bind(':email',$email);
            $this->db->execute();

            $row = $this->db->single();
            if($this->db->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }
    }