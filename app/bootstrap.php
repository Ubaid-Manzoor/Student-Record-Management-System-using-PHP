<?php 

    require_once '../app/config/config.php';
    require_once '../app/helpers/inputString.php';

    spl_autoload_register(function($className){
        require_once 'models/' .$className. '.php';
    });

    // spl_autoload_register(function($className){
    //     require_once 'libraries/' .$className. '.php';
    // });

    require_once 'libraries/Controller.php';
    require_once 'libraries/Core.php';
    require_once 'libraries/Database.php';
