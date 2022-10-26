<?php

<<<<<<< HEAD
final class FigureController {
    function create() :void 
    {
        
        require_once('views/figure/create.php');
        
=======
final class FigureController
{
    function create(): void
    {
        $isSent = false;

        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $isSent = true;
        }

        require_once('views/pages/figure/create.php');
>>>>>>> 78fb4fda4c31322cef6283f0d126bd4ad21cbb25
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

    function list()
    {

    }
}