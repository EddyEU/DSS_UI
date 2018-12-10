<?php
/**
 * Created by PhpStorm.
 * User: Eddy
 * Date: 15/4/2017
 * Time: 2:21 AM
 */

function call($controller, $action) {
    $file_controller = 'controllers/' . $controller . '_controller.php';
    ///echo $file_controller;
    require_once($file_controller);///aqui se hace existencia de las CLASS
    switch($controller) {
        case 'pages'://principal
            $controller = new PagesController();
            break;
        case 'users':
            require_once('models/user.php');
            require_once('models/user2.php');
            $controller = new cargoController();///ultilizando el Modelo
            break;
    }

    $controller->{ $action }();
}

// agregar la entrada para el nuevo controlador y sus acciones
$controllers = array(
    'pages' => ['home', 'error'],
    'users' => ['index','guardar','actualizar','update','eliminar','enviar']
    ///agragar los cu y sus acciones
    );

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);//ok
    } else {
        call('pages', 'error500');//no existe la action 500
    }
} else {
    call('pages', 'error404');//no existe el controller 404
}
?>
