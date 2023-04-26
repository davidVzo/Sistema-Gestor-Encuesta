<?php
require '../controllers/conexion.php';
require '../controllers/funcionesUsuario.php';
// include ('');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/login.png">
    <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> -->


    <title>Registrar Usuario</title>

</head>

<body>

    <!-- Top content -->
    <div class="top-content">

        <div class="inner-bg">
            <div class="container">

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <!-- <h1><strong>Bootstrap</strong> Login &amp; Register Forms</h1> -->
                        <!-- <div class="description">
                            <p>
                                This is a free responsive <strong>"login and register forms"</strong> template made with
                                Bootstrap.
                                Download it on <a href="http://azmind.com" target="_blank"><strong>AZMIND</strong></a>,
                                customize and use it as you like!
                            </p>
                        </div> -->
                    </div>
                </div>

                <div class="row">


                    <div class="col-sm-6 col-sm-offset-3 text">

                        <div class="form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Registro</h3>
                                    <!-- <p>Fill in the form below to get instant access:</p> -->
                                </div>
                                <div class="form-top-right">
                                    <!-- <i class="fa fa-pencil"></i> -->
                                    <img src="imagenes/userDefault.png">
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="" method="Post" class="registration-form"
                                    enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">Nombre</label>
                                        <input type="text" name="nombre" placeholder="Nombre"
                                            class="form-first-name form-control" id="form-first-name">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">Apellido</label>
                                        <input type="text" name="apellido" placeholder="Apellido"
                                            class="form-first-name form-control" id="form-first-name">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">Teléfono</label>
                                        <input type="text" name="telefono" placeholder="Teléfono"
                                            class="form-first-name form-control" id="form-first-name">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">Cédula</label>
                                        <input type="text" name="cedula" placeholder="cedula"
                                            class="form-first-name form-control" id="form-first-name">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-email">Correo</label>
                                        <input type="text" name="correo" placeholder="Correo"
                                            class="form-first-email form-control" id="form-email">
                                    </div>

                                  

                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">Dirección</label>
                                        <input type="text" name="direccion" placeholder="Dirección"
                                            class="form-first-name form-control" id="form-first-name">
                                    </div>





                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">Usuario</label>
                                        <input type="text" name="usuario" placeholder="Usuario"
                                            class="form-first-name form-control" id="form-first-name">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">Contraseña</label>
                                        <input type="text" name="contrasena" placeholder="Contraseña"
                                            class="form-first-name form-control" id="form-first-name">
                                    </div>

                                    <div class="form-group">
                                        <label style="color: #969693;" for="my-input">Seleccione una Imagen</label>
                                        <input style="color: red;" id="my-input" type="file" name="imagen" accept="image/*" >
                                    </div>





                                    <!-- <div class="form-group">
                                        <label class="sr-only" for="form-last-name">Last name</label>
                                        <input type="text" name="form-last-name" placeholder="Last name..."
                                            class="form-last-name form-control" id="form-last-name">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-email">Email</label>
                                        <input type="text" name="form-email" placeholder="Email..."
                                            class="form-email form-control" id="form-email">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-about-yourself">About yourself</label>
                                        <textarea name="form-about-yourself" placeholder="About yourself..."
                                            class="form-about-yourself form-control"
                                            id="form-about-yourself"></textarea>
                                    </div> -->
                                    <button type="submit" name="guardo" class="btn">Enviar</button>

                                    <div class="form-group">
                                        <p> <i class="fa fa-love"></i><a href="../index.php">¿Ya tengo cuenta?</a>
                                        </p>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-sm-8 col-sm-offset-2">
                    <div class="footer-border"></div>
                    <p>Shared by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">BootstrapThemes</a></p>
                </div>

            </div>
        </div>
    </footer>

    <!-- Javascript -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/scripts.js"></script>

    <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->






</body>

</html>

<?php
if (isset($_POST['guardo'])) {
    $Id = " ";
    $Usuario = $_REQUEST['usuario'];
    $Contrasena = $_REQUEST['contrasena'];
    $Nombre = $_POST['nombre'];
    $Apellido = $_POST['apellido'];
    $Direccion = $_POST['direccion'];
    $Telefono = $_POST['telefono'];
    $Correo = $_POST['correo'];
    $Cedula = $_POST['cedula'];

    $Imagen = $_FILES['imagen']['name'];

    if (isset($Imagen) && $Imagen != "") {

        $tipo = $_FILES['imagen']['type'];
        $temp = $_FILES['imagen']['tmp_name'];
        
        $explode = explode('.', $Imagen);
        $extension_foto = array_pop($explode);
        $newNameFoto = $Usuario.'.'.$extension_foto;



        if (!((strpos($tipo, 'gif') || strpos($tipo, 'jpeg') || strpos($tipo, 'webp') || strpos($tipo, 'png')))) {
            echo '<script language="javascript"> alert("Formato de imagen no soportado !!");'
                . ' window.location="registroUsuario.php" </script>';


        } else {

            // move_uploaded_file($temp, 'imagenes/'.$Usuario."-".  $Imagen);
             move_uploaded_file($temp, 'imagenes/'.  $newNameFoto);

            $Imagen = $newNameFoto;

        }

    } else {
        $Imagen = " ";
    }

    if (insertarUsuario($con, $Id, $Usuario, $Contrasena, $Nombre, $Apellido, $Direccion, $Telefono, $Correo, $Imagen, $Cedula)) {

        echo '<script language="javascript"> alert("Registrado !!");'
            . ' window.location="../index.php" </script>';
    } else {

        echo '<script language="javascript"> alert("Registro no ingresado !!");'
            . ' window.location="registroUsuario.php" </script>';

    }



}
?>