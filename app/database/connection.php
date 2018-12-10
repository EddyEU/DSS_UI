<?php

/**
 * Created by PhpStorm.
 * User: Eddy
 * Date: 15/4/2017
 * Time: 2:17 AM
 */

define('DB_HOST', 'localhost'); // 'your-database-host';
define('DB_NAME', 'abm_soe');   // 'your-database-name';
define('DB_USER', 'root');      // 'your-database-user';
define('DB_PASS', '');      // 'your-database-password';
/*
define('DB_HOST', 'localhost'); // 'your-database-host';
define('DB_NAME', 'id7061778_ivan');   // 'your-database-name';
define('DB_USER', 'id7061778_ivan');      // 'your-database-user';
define('DB_PASS', '12345678');      // 'your-database-password';*/
class Db
{
    private static $instance = NULL;

    private function __construct()
    {
    }

///PATRON DE DISEÑO SINGLETON
    public static function getInstance()
    {
        if (!isset(self::$instance)) {



            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $dsn = 'mysql:host=' . 'localhost' . ';dbname=' . DB_NAME . ';charset=utf8';
            self::$instance = new PDO($dsn.'', DB_USER, DB_PASS, $pdo_options);
        }
        return self::$instance;
    }
}


?>
