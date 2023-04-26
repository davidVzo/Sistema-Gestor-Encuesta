<button type="button" class="btn btn-primary" data-toggle="modal"
    data-target="#exampleModal<?php echo $fila['id']; ?>">Ver</button>

<?php include('editarUsuarios.php'); ?>

<div class="modal fade" id="exampleModal<?php echo $fila['id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <img src="imagenes/<?php if ($fila['imagen'] != " ") {
                    echo $fila['imagen'];
                } else {
                    echo "userDefault.png";
                } ?>" style="width: 45px;">
                <h5 class="modal-title" id="exampleModalLabel">Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="funEditarUsuario.php" method="Post">
                    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">




                    <div class="form-group">
                        <label class="col-form-label" for="form-first-name">Nombre</label>
                        <input type="text" name="nombre" placeholder="Nombre" class="form-first-name form-control"
                            id="form-first-name" value="<?php echo $fila['nombre'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="form-first-name">Apellido</label>
                        <input type="text" name="apellido" placeholder="Apellido" class="form-first-name form-control"
                            id="form-first-name" value="<?= $fila['apellido'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="form-first-name">Teléfono</label>
                        <input type="text" name="telefono" placeholder="Teléfono" class="form-first-name form-control"
                            id="form-first-name" value="<?= $fila['telefono'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="form-email">Correo</label>
                        <input type="text" name="correo" placeholder="Correo" class="form-first-email form-control"
                            id="form-email" value="<?= $fila['correo'] ?>">
                    </div>



                    <div class="form-group">
                        <label class="col-form-label" for="form-first-name">Dirección</label>
                        <input type="text" name="direccion" placeholder="Dirección" class="form-first-name form-control"
                            id="form-first-name" value="<?= $fila['direccion'] ?>">
                    </div>




                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="checkBoxs" id="checkBoxs">
                        <label class="form-check-label" for="flexCheckDefault">
                            Editar usuario
                        </label>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="form-first-name">Usuario</label>
                        <input type="text" name="usuario" placeholder="Usuario" class="form-first-name form-control"
                            id="usuario" value="<?= $fila['usuario'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="form-first-name">Contraseña</label>
                        <input type="text" name="contrasena" placeholder="Contraseña"
                            class="form-first-name form-control" id="contrasena" value="<?= $fila['contrasena'] ?>">
                    </div>



                    <!-- <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div> -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" name="editar" class="btn btn-primary">Editar</button>
                    </div>



                </form>

            </div>



        </div>
    </div>

</div>