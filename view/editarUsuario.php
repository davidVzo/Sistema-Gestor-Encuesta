<?php
# Si no entiendes el código, primero mira a login.php
# Iniciar sesión para usar $_SESSION
session_start();
# Y ahora leer si NO hay algo llamado usuario en la sesión,
# usando empty (vacío, ¿está vacío?)
# Recomiendo: https://parzibyte.me/blog/2018/08/09/isset-vs-empty-en-php/
if (empty($_SESSION["usuario"])) {
    # Lo redireccionamos al formulario de inicio de sesión
    header("Location: ../index.php");
    # Y salimos del script
    exit();
}
# No hace falta un else, pues si el usuario no se loguea, todo lo de abajo no se ejecuta
//echo "Soy un mensaje secreto";
//echo $_SESSION["usuario"];



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>login</title>

    <!-- Custom fonts for this template-->
    <link href="bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="bootstrap/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="principal.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">
                    <?php echo $_SESSION["usuario"] ?> <sup>.</sup>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="principal.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="../pruebas/cuestionario.php">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="listadoUsuarios.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Usuarios</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php echo $_SESSION["usuario"] ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="imagenes/<?php echo $_SESSION['usuario'] ?>.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configuración
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Actividad
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php
                    require_once '../controllers/conexion.php';
                    require_once '../controllers/funcionesUsuario.php';
                    $idUsuario = $_GET['id'];

                    $resultado = consultarUsuario($con, $idUsuario);
                    if ($fila = mysqli_fetch_assoc($resultado)) {
                        ?>
                        <div class="container rounded bg-white mt-5 mb-5">
                            <form action="funEditarUsuario.php" method="Post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                                <div class="row">
                                    <div class="col-md-3 border-right">
                                        <div class="d-flex flex-column align-items-center text-center "><img
                                                class="rounded-circle mt-5" width="150px" height="150px" src="imagenes/<?php if ($fila['imagen'] != " ") {
                                                    echo $fila['imagen'];
                                                } else {
                                                    echo "userDefault.png";
                                                } ?>"><span class="font-weight-bold">
                                                <?php echo $fila['usuario']; ?>
                                            </span><span class="text-black-50">
                                                <?php echo $fila['correo']; ?>
                                            </span><span>
                                            </span></div>
                                    </div>
                                    <div class="col-md-8 border-right">
                                        <div class="p-3 py-5">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h4 class="text-right">Información</h4>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-6"><label class="labels">Nombre</label><input
                                                        name="nombre" type="text" class="form-control" placeholder="Nombre"
                                                        value="<?php echo $fila['nombre']; ?>"></div>
                                                <div class="col-md-6"><label class="labels">Apellido</label><input
                                                        name="apellido" type="text" class="form-control"
                                                        value="<?php echo $fila['apellido']; ?>" placeholder="Apellido">
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-12"><label class="labels">Dirección</label><input
                                                        name="direccion" type="text" class="form-control"
                                                        placeholder="Ingrese dirección"
                                                        value="<?php echo $fila['direccion'] ?>"></div>

                                                <div class="col-md-12"><label class="labels">Teléfono</label><input
                                                        name="telefono" type="text" class="form-control"
                                                        placeholder="Ingrese Teléfono"
                                                        value="<?php echo $fila['telefono']; ?>"></div>

                                                <div class="col-md-12"><label class="labels">Correo</label><input
                                                        name="correo" type="text" class="form-control"
                                                        placeholder="Ingrese correo" value="<?php echo $fila['correo']; ?>">
                                                </div>


                                            </div>
                                            <hr />
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h4 class="text-right">Perfil</h4>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="editarPerfil"
                                                        name="checkBox" id="checkBox">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Editar perfil
                                                    </label>
                                                </div>

                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-8"><label class="labels">Usuario</label><input
                                                        id="usuario" name="usuario" type="text" class="form-control"
                                                        placeholder="Ingrese usuario"
                                                        value="<?php echo $fila['usuario']; ?>">
                                                </div>
                                                <div class="col-md-8"><label class="labels">Contraseña</label><input
                                                        id="contrasena" name="contrasena" type="text" class="form-control"
                                                        value="<?php echo $fila['contrasena']; ?>"
                                                        placeholder="Ingrese contraseña">
                                                </div>
                                                <div class="col-md-8"><label class="labels">Confirmar
                                                        contraseña</label><input id="confiContrasena" type="text"
                                                        class="form-control" value="" placeholder="Contraseña"></div>
                                                <input type="hidden" name="inpImagen" id="inpImagen"
                                                    value="<?php echo $fila['imagen']; ?>">
                                                <div class="col-md-8">
                                                    <label class="labels">Seleccione una Imagen </label>
                                                    <input class="btn btn-light" id="imagen" type="file" name="imagen"
                                                        accept="image/*">
                                                </div>



                                            </div>
                                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                                    name="editar" type="submit">Editar</button></div>
                                        </div>
                                    </div>

                                </div>


                            </form>

                        </div>
                    <?php } ?>



                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; By David 2023</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Seguro de Salir?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Seleccione "Salir" si esta seguro .</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="cerrarSesion.php">Salir</a>
                    </div>
                </div>
            </div>
        </div>
       
</body>

</html>