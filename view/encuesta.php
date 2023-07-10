<?php
require '../controllers/conexion.php';
require '../controllers/FuncionesCliente.php';
require '../controllers/FuncionesEncuesta.php';
// include ('');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        label {
            display: inline-block;
            padding: 0;
            cursor: pointer;
            vertical-align: middle;
        }

        /* label.reset {
            font-size: 10px;
            border: 1px solid #000;
            border-radius: 5px;
            margin: 10px 5px;
            padding: 2px 3px;
        } */

        label.number {
            width: 33px;
            height: 33px;
            border-radius: 25%;
            background-color: #eee;

            text-align: center;
            line-height: 40px;
        }

        label.number:hover {
            background-color: #ccc;
        }

        /* ocultamos los radiobuttons */
        input[name=ratingAtencion],
        input[name=ratingSabor],
        input[name=ratingPresentacion],
        input[name=ratingDisponibilidad],

        input[name=ratingLimpiezaLocal],
        input[name=ratingLimpiezaPersonal] {
            display: none;
        }





        /* estilos para la selección de número */
        input[type=radio]+label.number {
            color: #000;
        }

        /* estilos para la selección de número en hover */
        input[type=radio]:hover+label.number {
            background-color: #ccc;
        }

        /* estilos para la selección de número checked */
        input[type=radio]:checked+label.number {
            background-color: #fe0;
            color: #0a0a0a;
        }

        /*Ajuste de colores  */
        input[type="radio"][value="1"]:checked+label.number,
        input[type="radio"][value="2"]:checked+label.number,
        input[type="radio"][value="3"]:checked+label.number,
        input[type="radio"][value="4"]:checked+label.number,
        input[type="radio"][value="5"]:checked+label.number {
            background-color: #f00;
            color: #fff;
        }

        /*verde*/
        input[type="radio"][value="9"]:checked+label.number,
        input[type="radio"][value="10"]:checked+label.number {
            background-color: #00913f;
            color: #fff;
        }
    </style>



    <!-- Custom fonts for this template-->
    <link href="bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="sources2/styles.css" rel="stylesheet">


</head>

<body>


    <div class="container">
        <div class="text-center">
            <img src="sources2/img/logo.png" class="img-fluid" width="450px">
        </div>

        <!-- <form method="post" onsubmit="return validarSeleccion()">-->
        <form method="Post" action="">
            <div class="row">
                <div class="col">

                </div>
                <div class="col-sm-7 ">

                    <div class="card">
                        <div class="card-header text-dark bg-warning mb-3" style>
                            <strong style="font-family:Calibri;"> Datos del Cliente </strong>

                        </div>
                        <div class="card-body">

                            <div class="row g-3">
                                <div class="col-12">
                                    <label style="font-family:Calibri;" for="inputCedula"
                                        class="form-label">Cédula</label>
                                    <input type="text" class="form-control" id="inputCedula" placeholder=""
                                        name="inputCedula" required>
                                </div>
                                <div class="col-md-6">
                                    <label style="font-family:Calibri;" for="inputNombre"
                                        class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="inputNombre" name="inputNombre"
                                        placeholder="" required>
                                </div>
                                <div class="col-md-6">
                                    <label style="font-family:Calibri;" for="inputApellido"
                                        class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="inputApellido" placeholder=""
                                        name="inputApellido" required>
                                </div>
                                <div class="col-12">
                                    <label style="font-family:Calibri;" for="inputTelefono"
                                        class="form-label">Teléfono</label>
                                    <input type="text" class="form-control" id="inputTelefono" placeholder=""
                                        name="inputTelefono" required>
                                </div>
                                <div class="col-12">
                                    <label style="font-family:Calibri;" for="inputFechaNacimineto"
                                        class="form-label">Fecha de Nacimineto</label>
                                    <input type="date" class="form-control" id="inputFechaNacimiento"
                                        name="inputFechaNacimiento" placeholder="" required>
                                </div>

                                <div class="col-12">
                                    <label style="font-family:Calibri;" for="inputAddress"
                                        class="form-label">Dirección</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder=" "
                                        name="inputAddress" required>
                                </div>

                                <!-- <div class="col-md-4">
                                    <label for="inputState" class="form-label">Local</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Elige...</option>
                                        <option>...</option>
                                    </select>
                                </div> -->


                            </div>



                        </div>
                    </div>
                    <br>

                    <div class="card ">
                        <div class="card-header">
                            <strong style="font-family:Calibri;"> Encuesta de satisfacción del cliente </strong>

                        </div>
                        <!-- style=" margin-left: -10px; " -->
                        <div class="card-body">
                            <h6 style="font-family:Calibri;"> Ayudanos llenando la encuesta. </h6>

                            <div class="d-flex justify-content-center align-items-center ">
                                <div class="d-flex flex-column">
                                    <div class="form-check">

                                        <label style="font-family:Calibri;" class="form-check-label" for="tiempoRadio1">
                                            Siendo 1 Poco Aceptable
                                        </label>
                                    </div>
                                    <div class="form-check">

                                        <label style="font-family:Calibri;" class="form-check-label" for="tiempoRadio2">
                                            10 Excelente
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <br>

                            <h6 style="font-family:Calibri;" class=" card-title text-left">1. ¿La atención del personal
                                fue?</h6>
                            <div class="col-md- text-center">
                                <input type="radio" name="ratingAtencion" value="1" id="rating1_1">
                                <label class="number" for="rating1_1">1</label>

                                <input type="radio" name="ratingAtencion" value="2" id="rating1_2">
                                <label class="number" for="rating1_2">2</label>

                                <input type="radio" name="ratingAtencion" value="3" id="rating1_3">
                                <label class="number" for="rating1_3">3</label>

                                <input type="radio" name="ratingAtencion" value="4" id="rating1_4">
                                <label class="number" for="rating1_4">4</label>

                                <input type="radio" name="ratingAtencion" value="5" id="rating1_5">
                                <label class="number" for="rating1_5">5</label>

                                <input type="radio" name="ratingAtencion" value="6" id="rating1_6">
                                <label class="number" for="rating1_6">6</label>

                                <input type="radio" name="ratingAtencion" value="7" id="rating1_7">
                                <label class="number" for="rating1_7">7</label>

                                <input type="radio" name="ratingAtencion" value="8" id="rating1_8">
                                <label class="number" for="rating1_8">8</label>
                                <!-- ... -->
                                <input type="radio" name="ratingAtencion" value="9" id="rating1_9">
                                <label class="number" for="rating1_9">9</label>

                                <input type="radio" name="ratingAtencion" value="10" id="rating1_10">
                                <label class="number" for="rating1_10">10</label>

                            </div>
                            <br>

                            <h6 style="font-family:Calibri;" class="card-title text-left">2. ¿El sabor del producto
                                estuvo ?</h6>
                            <div class="col-md- text-center">
                                <input type="radio" name="ratingSabor" value="1" id="rating2_1">
                                <label class="number" for="rating2_1">1</label>

                                <input type="radio" name="ratingSabor" value="2" id="rating2_2">
                                <label class="number" for="rating2_2">2</label>

                                <input type="radio" name="ratingSabor" value="3" id="rating2_3">
                                <label class="number" for="rating2_3">3</label>

                                <input type="radio" name="ratingSabor" value="4" id="rating2_4">
                                <label class="number" for="rating2_4">4</label>

                                <input type="radio" name="ratingSabor" value="5" id="rating2_5">
                                <label class="number" for="rating2_5">5</label>

                                <input type="radio" name="ratingSabor" value="6" id="rating2_6">
                                <label class="number" for="rating2_6">6</label>

                                <input type="radio" name="ratingSabor" value="7" id="rating2_7">
                                <label class="number" for="rating2_7">7</label>

                                <input type="radio" name="ratingSabor" value="8" id="rating2_8">
                                <label class="number" for="rating2_8">8</label>
                                <!-- ... -->
                                <input type="radio" name="ratingSabor" value="9" id="rating2_9">
                                <label class="number" for="rating2_9">9</label>

                                <input type="radio" name="ratingSabor" value="10" id="rating2_10">
                                <label class="number" for="rating2_10">10</label>

                            </div>
                            <br>

                            <h6 style="font-family:Calibri;" class="card-title text-left">3. ¿La presentación del
                                producto estuvo?</h6>
                            <div class="col-md- text-center">
                                <input type="radio" name="ratingPresentacion" value="1" id="rating3_1">
                                <label class="number" for="rating3_1">1</label>

                                <input type="radio" name="ratingPresentacion" value="2" id="rating3_2">
                                <label class="number" for="rating3_2">2</label>

                                <input type="radio" name="ratingPresentacion" value="3" id="rating3_3">
                                <label class="number" for="rating3_3">3</label>

                                <input type="radio" name="ratingPresentacion" value="4" id="rating3_4">
                                <label class="number" for="rating3_4">4</label>

                                <input type="radio" name="ratingPresentacion" value="5" id="rating3_5">
                                <label class="number" for="rating3_5">5</label>

                                <input type="radio" name="ratingPresentacion" value="6" id="rating3_6">
                                <label class="number" for="rating3_6">6</label>

                                <input type="radio" name="ratingPresentacion" value="7" id="rating3_7">
                                <label class="number" for="rating3_7">7</label>

                                <input type="radio" name="ratingPresentacion" value="8" id="rating3_8">
                                <label class="number" for="rating3_8">8</label>
                                <!-- ... -->
                                <input type="radio" name="ratingPresentacion" value="9" id="rating3_9">
                                <label class="number" for="rating3_9">9</label>

                                <input type="radio" name="ratingPresentacion" value="10" id="rating3_10">
                                <label class="number" for="rating3_10">10</label>

                            </div>
                            <br>
                            <h6 style="font-family:Calibri;" class="card-title text-left">4. Disponibilidad del producto
                            </h6>
                            <div class="col-md- text-center">
                                <input type="radio" name="ratingDisponibilidad" value="1" id="rating4_1">
                                <label class="number" for="rating4_1">1</label>

                                <input type="radio" name="ratingDisponibilidad" value="2" id="rating4_2">
                                <label class="number" for="rating4_2">2</label>

                                <input type="radio" name="ratingDisponibilidad" value="3" id="rating4_3">
                                <label class="number" for="rating4_3">3</label>

                                <input type="radio" name="ratingDisponibilidad" value="4" id="rating4_4">
                                <label class="number" for="rating4_4">4</label>

                                <input type="radio" name="ratingDisponibilidad" value="5" id="rating4_5">
                                <label class="number" for="rating4_5">5</label>

                                <input type="radio" name="ratingDisponibilidad" value="6" id="rating4_6">
                                <label class="number" for="rating4_6">6</label>

                                <input type="radio" name="ratingDisponibilidad" value="7" id="rating4_7">
                                <label class="number" for="rating4_7">7</label>

                                <input type="radio" name="ratingDisponibilidad" value="8" id="rating4_8">
                                <label class="number" for="rating4_8">8</label>
                                <!-- ... -->
                                <input type="radio" name="ratingDisponibilidad" value="9" id="rating4_9">
                                <label class="number" for="rating4_9">9</label>

                                <input type="radio" name="ratingDisponibilidad" value="10" id="rating4_10">
                                <label class="number" for="rating4_10">10</label>

                            </div>
                            <br>



                            <h6 style="font-family:Calibri;" class="card-title text-left">5. Limpieza del local</h6>
                            <div class="col-md- text-center">
                                <input type="radio" name="ratingLimpiezaLocal" value="1" id="rating5_1">
                                <label class="number" for="rating5_1">1</label>

                                <input type="radio" name="ratingLimpiezaLocal" value="2" id="rating5_2">
                                <label class="number" for="rating5_2">2</label>

                                <input type="radio" name="ratingLimpiezaLocal" value="3" id="rating5_3">
                                <label class="number" for="rating5_3">3</label>

                                <input type="radio" name="ratingLimpiezaLocal" value="4" id="rating5_4">
                                <label class="number" for="rating5_4">4</label>

                                <input type="radio" name="ratingLimpiezaLocal" value="5" id="rating5_5">
                                <label class="number" for="rating5_5">5</label>

                                <input type="radio" name="ratingLimpiezaLocal" value="6" id="rating5_6">
                                <label class="number" for="rating5_6">6</label>

                                <input type="radio" name="ratingLimpiezaLocal" value="7" id="rating5_7">
                                <label class="number" for="rating5_7">7</label>

                                <input type="radio" name="ratingLimpiezaLocal" value="8" id="rating5_8">
                                <label class="number" for="rating5_8">8</label>
                                <!-- ... -->
                                <input type="radio" name="ratingLimpiezaLocal" value="9" id="rating5_9">
                                <label class="number" for="rating5_9">9</label>

                                <input type="radio" name="ratingLimpiezaLocal" value="10" id="rating5_10">
                                <label class="number" for="rating5_10">10</label>

                            </div>
                            <br>

                            <h6 style="font-family:Calibri;" class="card-title text-left">6. Limpieza del personal</h6>

                            <div class="col-md- text-center">
                                <input type="radio" name="ratingLimpiezaPersonal" value="1" id="rating6_1">
                                <label class="number" for="rating6_1">1</label>

                                <input type="radio" name="ratingLimpiezaPersonal" value="2" id="rating6_2">
                                <label class="number" for="rating6_2">2</label>

                                <input type="radio" name="ratingLimpiezaPersonal" value="3" id="rating6_3">
                                <label class="number" for="rating6_3">3</label>

                                <input type="radio" name="ratingLimpiezaPersonal" value="4" id="rating6_4">
                                <label class="number" for="rating6_4">4</label>

                                <input type="radio" name="ratingLimpiezaPersonal" value="5" id="rating6_5">
                                <label class="number" for="rating6_5">5</label>

                                <input type="radio" name="ratingLimpiezaPersonal" value="6" id="rating6_6">
                                <label class="number" for="rating6_6">6</label>

                                <input type="radio" name="ratingLimpiezaPersonal" value="7" id="rating6_7">
                                <label class="number" for="rating6_7">7</label>

                                <input type="radio" name="ratingLimpiezaPersonal" value="8" id="rating6_8">
                                <label class="number" for="rating6_8">8</label>
                                <!-- ... -->
                                <input type="radio" name="ratingLimpiezaPersonal" value="9" id="rating6_9">
                                <label class="number" for="rating6_9">9</label>

                                <input type="radio" name="ratingLimpiezaPersonal" value="10" id="rating6_10">
                                <label class="number" for="rating6_10">10</label>

                            </div>
                            <br>

                            <h6 class="card-title text-left" style="font-family:Calibri;">7. Tiempo de espera del
                                producto</h6>

                            <div class="d-flex justify-content-center align-items-center ">
                                <div class="d-flex flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tiempo" id="tiempoRadio1"
                                            value="1">
                                        <label style="font-family:Calibri;" class="form-check-label" for="tiempoRadio1">
                                            De 5 a 7 minutos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tiempo" id="tiempoRadio2"
                                            value="2">
                                        <label style="font-family:Calibri;" class="form-check-label" for="tiempoRadio2">
                                            De 7 a 10 minutos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tiempo" id="tiempoRadio3"
                                            value="3">
                                        <label style="font-family:Calibri;" class="form-check-label" for="tiempoRadio3">
                                            De 10 a más minutos
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <br>




                        </div>

                        <div class="card-footer text-muted">

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label style="font-family:Calibri;" class="form-check-label" for="gridCheck">
                                        Aceptar términos y condiciones
                                    </label>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary " style="margin-bottom: 10px;"
                                name="guardo">Enviar</button>
                        </div>


                    </div>
                    <div style="margin: 25px;">
                        <strong style="font-family:Calibri;"> La información recolectada en esta encuesta se utilizará
                            para fines de Marketing
                        </strong>
                    </div>


                </div>
                <div class="col">

                </div>
            </div>


        </form>

    </div>
    <script>


        function validarSeleccion() {
            var opciones = document.getElementsByName('ratingAtencion');
            var seleccionado = false;
            for (var i = 0; i < opciones.length; i++) {
                if (opciones[i].checked) {
                    seleccionado = true;
                    break;
                }
            }
            if (!seleccionado) {
                alert('Debe seleccionar al menos una opción en atención al cliente');

                return false;
            } else {
                alert('Gracias por tu respuesta ');
            }
            return true;

        }
    </script>






</body>

</html>
<?php

if (isset($_POST['guardo'])) {
    $Id = " ";
    $Cedula = $_POST['inputCedula'];
    $Nombre = $_POST['inputNombre'];
    $Apellido = $_POST['inputApellido'];
    $Telefono = $_POST['inputTelefono'];
    $Fecha_nacimiento = $_POST['inputFechaNacimiento'];
    $Direccion = $_POST['inputAddress'];
    //
    $Pregunta_1 = $_POST['ratingAtencion'];
    $Pregunta_2 = $_POST['ratingSabor'];
    $Pregunta_3 = $_POST['ratingPresentacion'];
    $Pregunta_4 = $_POST['ratingDisponibilidad'];
    $Pregunta_5 = $_POST['ratingLimpiezaLocal'];
    $Pregunta_6 = $_POST['ratingLimpiezaPersonal'];
    $Pregunta_7 = $_POST['tiempo'];
    

    if (
        insertarCliente($con, $Id, $Cedula, $Nombre, $Apellido, $Telefono, $Fecha_nacimiento, $Direccion) &&
        insertarEncuesta($con, $Id, $Pregunta_1, $Pregunta_2, $Pregunta_3, $Pregunta_4, $Pregunta_5, $Pregunta_6, $Pregunta_7)
    ) {
        echo '<script language="javascript"> alert("Registrado !!");'
            . ' window.location="encuesta.php" </script>';

    } else {
        echo '<script language="javascript"> alert("Registro no ingresado !!");'
            . ' window.location="encuesta.php" </script>';

    }


}




?>