<?php

/**
 * Created by PhpStorm.
 * User: Eddy
 * Date: 3/6/2018
 * Time: 10:45 AM
 */
class cargoController
{
    public function index()
    {

        $objeto_modelo = user2::getTabla();

        $user = user::getObjJSON(12);
        $json = json_encode($user);

        require_once('../app/views/user/index.php');
    }

    public function guardar()
    {
        if (isset($_POST)) {
            if (empty($_POST['ide'])) {
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $email = $_POST['email'];
                $user_id = user2::insertar($nombre, $apellido, $email, 1);
                if ($user_id) {

                  $user = user::getObjJSON($user_id);
                  $url="http://192.168.1.116:9001/email";


                      $json = json_encode($user);
                      $data = array('users' =>$json);

                      // use key 'http' even if you send the request to https://...
                      $options = array(
                          'http' => array(
                              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                              'method'  => 'POST',
                              'content' => http_build_query($data)
                          )
                      );
                      $context  = stream_context_create($options);
                      $result = file_get_contents($url, false, $context);



                    $objeto_modelo = user2::getTabla();

                    header("Location: ?controller=users&action=index");///buscar su alternativa
                } else {
                    require_once('../app/views/error500.php');
                }
            } else {
                $id = $_POST['ide'];
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $email = $_POST['email'];
                $okay = user2::actualizar($id, $nombre, $apellido, $email);
                if ($okay) {
                    $objeto_modelo = user2::getTabla();
                    header("Location: ?controller=users&action=index");
                } else {
                    require_once('../app/views/error500.php');
                }
            }
        } else {
            require_once('../app/views/user/index.php');
        }
    }

        public static function enviar()
        {
          if (isset($_GET)) {
              $id = $_GET['id'];
              $user = user::getObjJSON($id);
              $url="http://192.168.1.116:9001/email";


                  $json = json_encode($user);
                  $data = array('users' =>$json);

                  // use key 'http' even if you send the request to https://...
                  $options = array(
                      'http' => array(
                          'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                          'method'  => 'POST',
                          'content' => http_build_query($data)
                      )
                  );
                  $context  = stream_context_create($options);
                  $result = file_get_contents($url, false, $context);



                $objeto_modelo = user2::getTabla();

                header("Location: ?controller=users&action=index");///buscar su alternativa
          } else {
              // require_once('../app/views/user/index.php');
          }

        }
    public static function actualizar()
    {
        if (isset($_GET)) {
            $id = $_GET['id'];
            $objeto_user = user2::getCargo($id);
            foreach ($objeto_user as $user) {
                $id = $user->id;
                $nombre = $user->nombre;
                $apellido = $user->apellido;
                $email = $user->email;
            }
            $objeto_modelo = user2::getTabla();
            require_once('../app/views/user/index.php');
        } else {
            // require_once('../app/views/user/index.php');
        }
    }

    public static function eliminar()
    {
        if (isset($_GET)) {
            $id = $_GET['id'];
            $okay = user2::eliminar($id);
            if ($okay) {
                $objeto_modelo = user2::getTabla();
                header("Location: ?controller=users&action=index");
            } else {
                require_once('../app/views/error500.php');
            }
        } else {
            // require_once('../app/views/user/index.php');
        }
    }

        public static function servicioJSON()
        {

        }
}
