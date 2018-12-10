<?php
class user
{

    public $id;
    public $name;
    public $email;

    public function __construct($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public static function getObjJSON($id)
    {
        $list = [];
        $db = Db::getInstance();
        $sql = 'SELECT * FROM USUARIO WHERE estado = 1 AND id=' . $id;
        $req = $db->query($sql);
        foreach ($req->fetchAll() as $tabla) {
            $list[] = new user($tabla['id'], $tabla['nombre'], $tabla['email']);
        }
        return $list;
    }
    public static function getObjectsJSON()
    {
        $list = [];
        $db = Db::getInstance();
        $sql = 'SELECT * FROM USUARIO WHERE estado = 1';
        $req = $db->query($sql);
        foreach ($req->fetchAll() as $tabla) {
            $list[] = new user($tabla['id'], $tabla['nombre'], $tabla['email']);
        }
        return $list;
    }


  }
?>
