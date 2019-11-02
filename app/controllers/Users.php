<?php


    class Users extends Controller{
        /**
         * @var bool
         */
        private $hasError;

        public function __construct(){
            $this->hasError = false;
        }

        public function register(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

                $data = [
                    'name' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'pwd' => trim($_POST['pwd']),
                    'confirm_pwd' => trim($_POST['confirm_pwd']),
                    'name_err' => '',
                    'email_err' => '',
                    'pwd_err' => '',
                    'confirm_pwd_err' => ''
                ];

                if(empty($data['name'])){
                    $data['name_err'] = "Enter the UserName";
                    $this->hasError = true;
                }

                if(empty($data['email'])){
                    $data['email_err'] = "Enter the Email";
                    $this->hasError = true;
                }

                if(empty($data['pwd'])){
                    $data['pwd_err'] = "Enter the Password";
                    $this->hasError = true;
                }

                if(empty($data['confirm_pwd'])){
                    $data['confirm_pwd_err'] = "Enter the Confirm Password";
                    $this->hasError = true;
                }elseif($data['pwd'] != $data['confirm_pwd']){
                    $data['confirm_pwd_err'] = "Password does not match";
                    $this->hasError = true;
                }

                if(!$this->hasError){


                    header("Location: " . URLROOT . "/Users/login");
                }else{
                    $this->view('user/register',$data);
                }

            }else{
                $this->view('user/register');
            }
        }

        public function login(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

            }else{
                $this->view('user/login');
            }
        }
    }