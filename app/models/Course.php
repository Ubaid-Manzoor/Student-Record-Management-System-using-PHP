<?php 
    class Course{
        public function __construct(){
            $this->db = new Database();
        }   

        public function add($data){
            $query = "INSERT INTO courses (short_name,full_name,created_at) VALUES( :short_name  , :full_name, :created_at)";
            $this->db->query($query);
            // print_r($data);

            $this->db->bind(':short_name',$data['short_name']);
            $this->db->bind(':full_name',$data['full_name']);
            $this->db->bind(':created_at',$data['created_at']);


            if($this->db->execute()){
                echo "Done";
                return true;
            }else{
                return false;
            }
        }

        public function getCourses(){
            $query = "SELECT * FROM courses";

            $this->db->query($query);

            return $this->db->resultSet();
        }
    }