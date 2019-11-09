<?php


    class Users extends Controller{
        /**
         * @var bool
         */
        private $hasError;
        private $userModel;

        public function __construct(){
            $this->hasError = false;
            $this->userModel = new User();
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
                } elseif($this->userModel->findUserByEmail($data['email'])){
                    $data['email_err'] = "Email already exists";
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
                    $data['pwd'] = password_hash($data['pwd'], PASSWORD_DEFAULT);
                    if($this->userModel->register($data)){
                        flash('register_success' , "You are registered Sucessfully");
                        header("Location: " . URLROOT . "/Users/login");
                    }else{
                        die("Something went wrong");
                    }

                }else{
                    $this->view('user/register',$data);
                }

            }else{
                $this->view('user/register');
            }
        }

        public function login(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

                $data = [
                    'email' => trim($_POST['email']),
                    'pwd' => trim($_POST['pwd']),
                    'email_err' => '',
                    'pwd_err' => '',
                ];

                if(empty($data['email'])){
                    $data['email_err'] = "Enter the Email";
                    $this->hasError = true;
                }elseif(!$this->userModel->findUserByEmail($data['email'])){
                    $data['email_err'] = "User does not Exist";
                }

                if(empty($data['pwd'])){
                    $data['pwd_err'] = "Enter the Password";
                    $this->hasError = true;
                }

                if(!$this->hasError){
                    $loggedInUser = $this->userModel->login($data['email'], $data['pwd']);
                    if($loggedInUser){
                        $this->createUserSession($loggedInUser);
                    }else{
                        $data['pwd_err'] = "Password is incorrect";
                        $this->view('user/login',$data);
                    }
                }else{
                    $this->view('user/login',$data);
                }

            }else{
                $this->view('user/login');
            }
        }

        public function logout(){
            unset($_SESSION['user_id']);
            unset($_SESSION['username']);
            unset($_SESSION['email']);
            header("Location: " . URLROOT . "/Users/login");
        }

        public function createUserSession($user){
            $_SESSION['user_id'] = $user->id;
            $_SESSION['username'] = $user->name;
            $_SESSION['email'] = $user->email;
            header("Location: " . URLROOT . "/Pages/index");
        }
    }