<?php
<<<<<<< HEAD

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
=======
    require_once('controllers/homepageController.php');
>>>>>>> 3e7c21d254f16130744f06fae0a0021643cc3a57

<<<<<<< HEAD
   
=======
    try {
        if(isset($_GET['action']) && '' !== $_GET['action']) {
            $action = $_GET['action'];

            if ('figure' === $_GET['controller']) {
                $figureController = new FigureController();

                if ('create' === $action) {
                    $figureController->create();
                }
            }
        } else {
            (new HomepageController())->home();
        }
    } catch (\Exception $exception) {
        throw new \Exception($exception->getMessage());
    }
>>>>>>> e56e7c754b943eb778c3a58f759faac5dd96e626

    /**
    if($_SERVER['REQUEST_URI'] === '/') {
        echo 'ACCUEIL';
    } elseif($_SERVER['REQUEST_URI'] === '/contact') {
        echo 'CONTACT';
    }
    **/
?>