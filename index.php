<?php
/**
 * Created by PhpStorm.
 * User: Eddy
 * Date: 7/5/2018
 * Time: 9:11 AM
 */


/*
 * Si la carpeta public no es el directorio raíz
 * el usuario accedera a la carpeta del proyecto, redirija a la carpeta public.
 */

header('Location: public/');

die();