<?php 
    class Students extends Controller{
        public function __construct(){
            
        }


        public function register(){
            $this->view('pages/register');
        }

        public function show(){
            $this->view('pages/viewStudents');
        }
    }