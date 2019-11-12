<?php

    class Core{
        Protected $currentController = 'Users';
        Protected $currentMethod = 'login';
        protected $params = [];

        public function __construct(){
            $url = $this->getUrl();
            if($_SESSION['user_id']){
                if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php' )){
                    $this->currentController = ucwords($url[0]);
                    unset($url[0]);
                }

                if(isset($url[1])){
                    require_once '../app/controllers/' . $this->currentController . '.php';
                    if(method_exists($this->currentController, $url[1])){
                        $this->currentMethod = $url[1];
                        unset($url[1]);
                    }else{
                        $this->currentController = 'Users';
                    }
                }
            }else{
                if(!(ucwords($url[0] == 'Users'))){
                    header("Location: " . URLROOT . "/Users/login");
                }elseif($url[1] == 'register'){
                    $this->currentMethod = 'register';
                }
            }

            require_once '../app/controllers/' . $this->currentController . '.php';
            $this->currentController = new $this->currentController;

            $this->params = $url ? array_values($url) : [];
            call_user_func_array([$this->currentController,$this->currentMethod], $this->params);
        }

        public function getUrl(){
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }
        }
    }
