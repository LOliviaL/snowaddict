<?php

    // define('HOMEPAGE_PATH', '/');
    // define('CONTACT_PATH', '/contact');

    // const HOMEPAGE_PATH = '';

    const CONTACT_PATH = 'contact';

    require_once('views/base.php');

    $requestUri = explode('/', $_SERVER['REQUEST_URI']);

    switch($requestUri[array_key_last($requestUri)]) {// $_SERVER['PATH_INFO']
        /**case HOMEPAGE_PATH:
            echo 'ACCUEIL';
            break;*/
        case CONTACT_PATH:
            $controller = 'contact';
            $action = 'contact';
            echo 'CONTACT';
            break;
        default:
            $controller = 'homepage';
            $action = 'home';
            echo 'ACCUEIL';
    }

<<<<<<< HEAD
   
=======
    try {
        if(isset($_GET['action']) && '' !== $_GET['action']) {
            $action = $_GET['action'];

            if ('figure' === $_GET['controller']) {
                if ('create' === $action) {
                    var_dump('ok');
                }
            }
        }
    } catch (\Exception $exception) {
        throw new \Exception('Erreur');
    }
>>>>>>> e56e7c754b943eb778c3a58f759faac5dd96e626

    require_once('controllers/'.$controller.'Controller.php');

    $controller = new ($controller.'Controller');

    echo $controller->{$action}('Jacques');

    /**
    if($_SERVER['REQUEST_URI'] === '/') {
        echo 'ACCUEIL';
    } elseif($_SERVER['REQUEST_URI'] === '/contact') {
        echo 'CONTACT';
    }
    **/
?>