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

        public function getCourse($id){
            $query = "SELECT * FROM courses WHERE id = :id";

            $this->db->query($query);
            $this->db->bind(':id',$id);

            return $this->db->single();
        }

        public function update($data){
            $query = "UPDATE courses SET short_name=:short_name,full_name=:full_name WHERE id=:id";

            $this->db->query($query);
            $this->db->bind(':short_name',$data['short_name']);
            $this->db->bind(':full_name',$data['full_name']);
            $this->db->bind(':id',$data['id']);

            return $this->db->execute();
        }

        public function delete($id){
            $query = "DELETE FROM courses WHERE id = :id";
            $this->db->query($query);

            $this->db->bind(':id', $id);
            $this->db->execute();
        }

    }