<?php

/**
 * Created by PhpStorm.
 * User: Eddy
 * Date: 15/4/2017
 * Time: 2:22 AM
 */
class PagesController
{
    public function home()
    {
        $first_name = 'Maestria en Ingenieria de Software';
        $last_name = 'Modulo 11';

        require_once('../app/views/pages/home.php');
    }

    public function error404()
    {
        require_once('../app/views/pages/error404.php');
    }


    public function error500()
    {
        require_once('../app/views/pages/error500.php');
    }
}

?>