<?php
/**
 * Created by PhpStorm.
 * User: Eddy
 * Date: 3/6/2018
 * Time: 10:39 AM
 */

?>

<?php
require_once('../app/views/template/header.php');
?>


<!-- Main content -->
<div class="main-content">
    <h1 class="page-title">Gestionar Usuarios</h1>

    <h4>
      <?php if (isset($json)) {
          echo $json;
      }else{
        echo ".";
      }?>
    </h1>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title">Datos del usuario</h3>
                    <ul class="panel-tool-options">
                        <li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
                        <li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
                        <li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="?controller=users&action=guardar">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nombre</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-10"><input required="required" type="text" id="nombre" name="nombre"
                                                                     class="form-control" placeholder="Nombre"
                                                                     value="<?php if (isset($nombre)) {
                                                                         echo $nombre;
                                                                     } ?>">
                                            <input type="text" hidden="hidden" id="ide" name="ide" <?php if (isset($id)) {?>
                                                   value=" <?php echo $id;} ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Apellido</label>
                                <div class="col-sm-10">
                                    <input type="text" required="required" placeholder="Apellido" id="apellido" name="apellido"
                                           class="form-control" value="<?php if (isset($apellido)) {
                                        echo $apellido;
                                    } ?>">
                                </div>
                            </div>
                            <div class="line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" required="required" placeholder="Email" id="email" name="email"
                                       class="form-control" value="<?php if (isset($email)) {
                                    echo $email;
                                } ?>">
                            </div>
                        </div>
                        <div class="line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                </div>
                                <input class="btn btn-success" type="submit" value="Guardar">
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title">Tabla de usuarios</h3>
                    <ul class="panel-tool-options">
                        <li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
                        <li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
                        <li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($objeto_modelo as $obj) { ?>
                                <tr class="gradeX">
                                    <td>
                                        <?php echo $obj->id; ?>
                                    </td>
                                    <td>
                                        <?php echo $obj->nombre; ?>
                                    </td>
                                    <td>
                                        <?php echo $obj->apellido; ?>
                                    </td>
                                    <td>
                                        <?php echo $obj->email; ?>
                                    </td>
                                    <td class="size-80 text-center">
                                        <div class="dropdown">
                                            <a class="more-link" data-toggle="dropdown" href="#/"><i
                                                        class="icon-dot-3 ellipsis-icon"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="?controller=users&action=actualizar&id=<?php echo $obj->id; ?>">Editar</a>
                                                </li>
                                                <li>
                                                    <a href="?controller=users&action=eliminar&id=<?php echo $obj->id; ?>">Eliminar</a>
                                                </li>
                                                <li>
                                                    <a href="?controller=users&action=enviar&id=<?php echo $obj->id; ?>">Enviar</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>


                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Opciones</th>
                            </tr>
                            </tfoot>
                        </table>
                        <script type="text/javascript">
                            function update(dato) {
                                window.locationf = "?controller=users&action=actualizar&id=" + dato;
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    require_once('../app/views/template/footer.php');
    ?>
