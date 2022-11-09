<?php
    require_once('controllers/homepageController.php');
    require_once('controllers/figureController.php');


    try {
        if(isset($_GET['action']) && '' !== $_GET['action']) {
            $action = $_GET['action'];

            if ('figure' === $_GET['controller']) {
                $figureController = new FigureController();

                if ('create' === $action) {
                    $figureController->create();
                }
<<<<<<< HEAD
                if ('liste' === $action){
                    $figureController ->list();
=======

                if ('list' === $action) {
                    $figureController->list();
>>>>>>> 959df8667db97efef9f899e90d32bc00043cc173
                }

                if ('update' === $action) {
                    if (!array_key_exists('id', $_GET)) {
                        throw new \Exception('Id parameter is mandatory');
                    }

                    $figureController->update($_GET['id']);
                }
            }
        } else {
            (new HomepageController())->home();
        }
    } catch (\Exception $exception) {
        throw new \Exception($exception->getMessage());
    }

?>