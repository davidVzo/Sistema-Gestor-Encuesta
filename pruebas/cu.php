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

        label.reset {
            font-size: 10px;
            border: 1px solid #000;
            border-radius: 5px;
            margin: 10px 5px;
            padding: 2px 3px;
        }

        label.number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #eee;
            margin: 5px;
            text-align: center;
            line-height: 40px;
        }

        label.number:hover {
            background-color: #ccc;
        }

        /* ocultamos los radiobuttons */
        input[name=rating] {
            display: none;
        }

        input[name=rating2] {
            display: none;
        }

        input[name=rating3] {
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
        input[type="radio"][value="5"]:checked+label.number,
        input[type="radio"][value="6"]:checked+label.number {
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
</head>

<body>

    <div class="question">
        <p>¿Cómo calificaría la calidad del producto?</p>
        <div class="ratings">
            <input type="radio" name="rating" value="1" id="rating1_1">
            <label class="number" for="rating1_1">1</label>

            <input type="radio" name="rating" value="2" id="rating1_2">
            <label class="number" for="rating1_2">2</label>

            <input type="radio" name="rating" value="3" id="rating1_3">
            <label class="number" for="rating1_3">3</label>

            <input type="radio" name="rating" value="4" id="rating1_4">
            <label class="number" for="rating1_4">4</label>

            <input type="radio" name="rating" value="5" id="rating1_5">
            <label class="number" for="rating1_5">5</label>

            <input type="radio" name="rating" value="6" id="rating1_6">
            <label class="number" for="rating1_6">6</label>

            <input type="radio" name="rating" value="7" id="rating1_7">
            <label class="number" for="rating1_7">7</label>

            <input type="radio" name="rating" value="8" id="rating1_8">
            <label class="number" for="rating1_8">8</label>
            <!-- ... -->
            <input type="radio" name="rating" value="9" id="rating1_9">
            <label class="number" for="rating1_9">9</label>

            <input type="radio" name="rating" value="10" id="rating1_10">
            <label class="number" for="rating1_10">10</label>
        </div>
    </div>

    <div class="question">
        <p>¿Cómo calificaría el servicio al cliente?</p>
        <div class="ratings">
            <input type="radio" name="rating2" value="1" id="rating2_1">

            <label class="number" for="rating2_1">1</label>
            <input type="radio" name="rating2" value="2" id="rating2_2">
            <label class="number" for="rating2_2">2</label>
            <!-- ... -->
            <input type="radio" name="rating2" value="10" id="rating2_10">
            <label class="number" for="rating2_10">10</label>
        </div>
    </div>

    <div class="question">
        <p>¿Cómo calificaría el tiempo de entrega?</p>
        <div class="ratings">
            <input type="radio" name="rating3" value="1" id="rating3_1">
            <label class="number" for="rating3_1">1</label>
            <input type="radio" name="rating3" value="2" id="rating3_2">
            <label class="number" for="rating3_2">2</label>
            <!-- ... -->
            <input type="radio" name="rating3" value="10" id="rating3_10">
            <label class="number" for="rating3_10">10</label>
        </div>
    </div>



</body>

</html>