<?php

/**
 * Created by PhpStorm.
 * User: Eddy
 * Date: 3/6/2018
 * Time: 10:42 AM
 */
class user2
{
    public $id;
    public $nombre;
    public $apellido;
    public $email;

    /**
     * user constructor.
     * @param $id
     * @param $nombre
     * @param $apellido
     * @param $email
     */
    public function __construct($id, $nombre, $apellido, $email)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
    }


    public static function getTabla()
    {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM `USUARIO` WHERE estado = 1 ORDER BY id desc');
        foreach ($req->fetchAll() as $tabla) {
            $list[] = new user2($tabla['id'], $tabla['nombre'], $tabla['apellido'], $tabla['email']);
        }
        return $list;
    }


    public static function insertar($nombre, $apellido, $email, $estado)
    {
        $db = Db::getInstance();
        $sql = $db->prepare("INSERT INTO USUARIO (nombre,apellido,email,estado) VALUES (?,?,?,?)");
        $sql->bindParam(1, $nombre, PDO::PARAM_STR, 100);
        $sql->bindParam(2, $apellido, PDO::PARAM_STR, 100);
        $sql->bindParam(3, $email, PDO::PARAM_STR, 100);
        $sql->bindParam(4, $estado, PDO::PARAM_INT, 50);

        return $sql->execute() ? $db->lastInsertId('id') : null;


    }

    public static function actualizar($id, $nombre, $apellido, $email)
    {
        $db = Db::getInstance();
        $sql = "UPDATE USUARIO SET nombre=?, apellido=?, email=? WHERE id=?";
        $req = $db->prepare($sql)->execute([$nombre, $apellido, $email, $id]);
        return $req;
    }

    public static function eliminar($id)
    {
        $db = Db::getInstance();
        $sql = "UPDATE USUARIO SET estado=? WHERE id=?";
        $req = $db->prepare($sql)->execute([0, $id]);
        return $req;
    }


    public static function getCargo($id)
    {
        $list = [];
        $db = Db::getInstance();
        $sql = 'SELECT * FROM USUARIO WHERE estado = 1 AND id=' . $id;
        $req = $db->query($sql);
        foreach ($req->fetchAll() as $tabla) {
            $list[] = new user2($tabla['id'], $tabla['nombre'], $tabla['apellido'], $tabla['email']);
        }
        return $list;
    }


    public static function getOK($id)
    {
      return "ok ".$id;
    }



}
