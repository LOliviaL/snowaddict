<?php
    require_once('controllers/homepageController.php');
    require_once('controllers/figureController.php');
<<<<<<< HEAD

=======
>>>>>>> 78fb4fda4c31322cef6283f0d126bd4ad21cbb25

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

?>