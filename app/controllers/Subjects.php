<?php 

    class Subjects extends Controller{
        public function __construct(){

        }

        public function add(){
            $this->view('pages/addSubject');
        }

        public function show(){
            $this->view('pages/viewSubjects');
        }
    }