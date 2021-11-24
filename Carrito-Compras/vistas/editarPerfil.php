

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
</style>




<body>



    <form action="controladores/editarPerfil.php" method="POST">
        <div class="modal fade" id="editarPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <input type="hidden" name="id" value="<?= $Id; ?>">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel">Editar Perfil</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div id="datos_ajax_register"></div>
                                <div class="form-group">
                                    <label for="codigo0" class="control-label">Nombres:</label>
                                    <input type="text" class="form-control" id="codigo0" name="nombres"  ?>
                                </div>
                                <div id="datos_ajax_register"></div>
                                <div class="form-group">
                                    <label for="codigo0" class="control-label">Apellidos:</label>
                                    <input type="text" class="form-control" id="codigo0" name="apellidos" ?>
                                </div>
                                <div id="datos_ajax_register"></div>
                                <div class="form-group">
                                    <label for="codigo0" class="control-label">Telefono</label>
                                    <input type="text" class="form-control" id="codigo0" name="telefono" ?>
                                </div>
                                <div id="datos_ajax_register"></div>
                                <div class="form-group">
                                    <label for="codigo0" class="control-label">Email:</label>
                                    <input type="text" class="form-control" id="codigo0" name="email"  ?>
                                </div>
                        <div>
                            <a href="#">Cambiar contraseña</a>
                        </div>

                            </div>


                            <div class="modal-footer">
                                <button type="submit" name="btnAgregar" class="btn prima">Editar</button>
                            </div>
                </div>
            </div>
        </div>
    </form>





</body>

</html>