<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <! - Las 3 metaetiquetas anteriores * deben * colocarse primero, y cualquier otro contenido * debe * seguirlo. ->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Carousel Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!--  IE10 viewport hack for Surface/desktop Windows 8 bug
    <link href="http://v3.bootcss.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
     HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    [if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <?php for ($i=0; $i < 2; $i++) { 
        
     ?>
    <div class="container text-center">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Modificar
            información</button>
    </div>
        <?php } ?>
    <?php
    
        include_once('cu.php');
    
    
    ?>

    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>

    <script type='text/javascript'>
        var form = $('#updateform');
        $(document).ready(function () {

            form.bootstrapValidator({
                message: 'El valor de entrada es ilegal',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    loginname: {
                        message: 'Nombre de usuario es ilegal',
                        validators: {
                            notEmpty: {
                                message: 'El nombre de usuario no puede estar vacío'
                            },
                            stringLength: {
                                min: 3,
                                max: 30,
                                message: 'Ingrese de 3 a 30 caracteres'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_\. \u4e00-\u9fa5 ]+$/,
                                message: 'El nombre de usuario solo puede consistir en letras, números, puntos, guiones bajos y caracteres chinos'
                            }
                        }
                    }
                    , email: {
                        validators: {
                            notEmpty: {
                                message: 'el correo electrónico no puede estar vacío'
                            },
                            emailAddress: {
                                message: 'Ingrese la dirección de correo electrónico correcta, como: 123@qq.com'
                            }
                        }
                    }, phone: {
                        validators: {
                            notEmpty: {
                                message: 'El número de teléfono móvil no puede estar vacío'
                            },
                            regexp: {
                                regexp: "^([0-9]{11})?$",
                                message: 'Formato de número de teléfono incorrecto'
                            }
                        }
                    }, address: {
                        validators: {
                            notEmpty: {
                                message: 'La dirección no puede estar vacía'
                            }, stringLength: {
                                min: 8,
                                max: 60,
                                message: 'Ingrese de 5 a 60 caracteres'
                            }
                        }
                    }
                }
            });
        });
        $("#submitBtn").click(function () {
            // Realizar validación de formulario
            var bv = form.data('bootstrapValidator');
            bv.validate();
            if (bv.isValid()) {
                console.log(form.serialize());
                // Enviar solicitud ajax
                $.ajax({
                    url: 'validator.json',
                    async: false,// La sincronización bloqueará la operación
                    type: 'GET',//PUT DELETE POST
                    data: form.serialize(),
                    complete: function (msg) {
                        console.log('terminado');
                    },
                    success: function (result) {
                        console.log(result);
                        if (result) {
                            window.location.reload();
                        } else {
                            $("#returnMessage").hide().html('<label class = "label label-danger"> ¡Error en la modificación! </label>').show(300);
                        }
                    }, error: function () {
                        $("#returnMessage").hide().html('<label class = "label label-danger"> ¡Error en la modificación! </label>').show(300);
                    }
                })
            }
        });

        const checkBox = document.getElementById('checkUsuario');
        var input1 = document.getElementById('sueldo');
        var input2 = document.getElementById('nombre');

        input1.disabled = true;
        input2.disabled = true;
        checkBox.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {
                //alert('checked');
                input1.disabled = false;
                input2.disabled = false;
            } else {
                input1.disabled = true;
                input2.disabled = true;
                //alert('not checked');
            }
        })

    </script>
</body>

</html>