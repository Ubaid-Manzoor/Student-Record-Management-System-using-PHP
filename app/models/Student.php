<?php
    class Student{
        /**
         * @var Database
         */
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function add($data){
            $query = "INSERT INTO students (
                        first_name,
                        middle_name,
                        last_name,
                        gender,
                        guardian_name,
                        course_name,
                        occupation,
                        family_income,
                        category,
                        nationality,
                        disability,
                        session_
            ) VALUES (
                :first_name,
                :middle_name,
                :last_name,
                :gender,
                :guardian_name,
                :course_name,
                :occupation,
                :family_income,
                :category,
                :nationality,
                :disability,
                :session_               
            )";

            $this->db->query($query);

            $this->db->bind(':first_name' ,$data['first_name'] );
            $this->db->bind(':middle_name' ,$data['middle_name'] );
            $this->db->bind(':last_name' ,$data['last_name'] );
            $this->db->bind(':gender' ,$data['gender'] );
            $this->db->bind(':guardian_name' ,$data['guardian_name'] );
            $this->db->bind(':course_name' ,$data['course_name'] );
            $this->db->bind(':occupation' ,$data['occupation'] );
            $this->db->bind(':family_income' ,$data['income'] );
            $this->db->bind(':category' ,$data['category'] );
            $this->db->bind(':nationality' ,$data['nationality'] );
            $this->db->bind(':disability' ,$data['disability'] );
            $this->db->bind(':session_' ,$data['session'] );

            if($this->db->execute()){
                echo "Done";
                return true;
            }else{
                return false;
            }


        }



    }