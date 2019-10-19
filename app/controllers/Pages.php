<?php 

    class Pages extends Controller{
        public function __construct(){
        }

        public function index(){
            $this->view('pages/index');
        }

        public function session(){  
            $this->view('pages/session');
        }

        public function logout(){

        }

    }