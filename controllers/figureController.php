<?php

require_once('models/figure.php');
require_once('lib/database.php');
require_once('repositories/figureRepository.php');

final class FigureController
{
    function create(): void
    {
        $isSent = false;

        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $isSent = true;

            $figure = new Figure();
            $figure->setName($_POST['name']);
            $figure->setDescription($_POST['description']);
            $figure->setPicturePath($_POST['picture']);
            $figure->setVideoPath($_POST['video']);

            $figureRepository = new FigureRepository();
            $figureRepository->setConnection((new DatabaseConnection())->getConnection());

            $figureRepository->create($figure);
        }

        require_once('views/pages/figure/create.php');

    }

    function read()
    {


    }

    function update()
    {

    }

    function delete()
    {

    }

    function list(): void
    {
        $figureRepository = new FigureRepository();
        $figureRepository->setConnection((new DatabaseConnection())->getConnection());
<<<<<<< HEAD

        $figureList=$figureRepository->list();

        require_once('views/pages/figure/liste.php');
=======
>>>>>>> 959df8667db97efef9f899e90d32bc00043cc173

        $figures = $figureRepository->list();

        require_once('views/pages/figure/list.php');
    }
}