<?php

    session_start();

    function flash($name="" , $message="" , $className="alert alert-success"){
        if(!empty($name)){
            if(!empty($message) and empty($_SESSION[$name])){
                unset($_SESSION[$name]);
                unset($_SESSION[$name]);

                $_SESSION[$name] = $message;
                $_SESSION[$name . '_class'] = $className;
            }elseif(!empty($_SESSION[$name])){
                $class = $_SESSION[$name . '_class'];
                echo '<div class=" '. $class . '">' . $_SESSION[$name]. '</div> ';
                unset($_SESSION[$name]);
                unset($_SESSION[$name. '_class']);
            }
        }
    }