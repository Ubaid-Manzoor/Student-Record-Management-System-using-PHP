<?php 

    class Subject{
        /**
         * @var Database
         */
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function add($subjects){
            $query = "INSERT INTO subjects (cshort,cfull,sub1,sub2,sub3) VALUES(:short_name,:full_name,:sub1,:sub2,:sub3)";

            $this->db->query($query);

            $this->db->bind(':short_name',$subjects['short_name']);
            $this->db->bind(':full_name',$subjects['full_name']);
            $this->db->bind(':sub1',$subjects['sub1']);
            $this->db->bind(':sub2',$subjects['sub2']);
            $this->db->bind(':sub3',$subjects['sub3']);

            $this->db->execute();
        }

        public function getSubjects(){
            $query = "SELECT * FROM subjects";

            $this->db->query($query);

            return $this->db->resultSet();
        }

        public function getSubject($id){
            $query = "SELECT * FROM subjects WHERE id = :id ";
            
            $this->db->query($query);
            $this->db->bind(':id',$id);

            return $this->db->single();
        }

        public function update($data){
            $query = "UPDATE subjects SET sub1=:sub1,sub2=:sub2,sub3=:sub3 WHERE id=:id";

            $this->db->query($query);
            $this->db->bind(':sub1',$data['sub1']);
            $this->db->bind(':sub2',$data['sub2']);
            $this->db->bind(':sub3',$data['sub3']);
            $this->db->bind(':id',$data['id']);

            return $this->db->execute();
        }

        public function delete($id){
            $query = "DELETE FROM subjects WHERE id = :id";
            $this->db->query($query);

            $this->db->bind(':id', $id);
            $this->db->execute();
        }
    }