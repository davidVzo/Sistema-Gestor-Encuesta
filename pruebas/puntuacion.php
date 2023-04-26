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

        label.star {
            width: 30px;
            height: 27px;
        }


        /* ocultamos los radiobuttons */

        input[name=rating] {
            display: none;
        }


        /* estrellas inmediatamente despues de un radiobutton van amarillas */

        input[type=radio]+label.star svg path {
            fill: #fe0
        }


        /* estrellas a la derecha del radiobutton checked van blanco */

        input[type=radio]:checked~label.star svg path {
            fill: #fff;
        }

        .container {

            display: flex;
            justify-content: center;
        }

        .number {
            border: 0;
            margin: 0;
            justify-content: center;
            display: flex;
        }
    </style>

</head>

<body>
    <div class="container">
        <!-- svg from https://es.wikipedia.org/wiki/Archivo:Star*.svg -->

        <input id=rating0 type=radio value=0 name=rating checked />

        <label class=star for=rating1>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">

                <path stroke="#605a00" stroke-width="15"
                    d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z" />
            </svg>
            <p class="number">1</p>
        </label>

        <input id=rating1 type=radio value=1 name=rating />

        <label class=star for=rating2>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                <path stroke="#605a00" stroke-width="15"
                    d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z" />
            </svg>
            <p class="number">2</p>


        </label>
        <input id=rating2 type=radio value=2 name=rating />

        <label class=star for=rating3>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                <path stroke="#605a00" stroke-width="15"
                    d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z" />
            </svg>
            <p class="number">3</p>
        </label>
        <input id=rating3 type=radio value=3 name=rating />

        <label class=star for=rating4>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                <path stroke="#605a00" stroke-width="15"
                    d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z" />
            </svg>
            <p class="number">4</p>
        </label>
        <input id=rating4 type=radio value=4 name=rating />

        <label class=star for=rating5>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                <path stroke="#605a00" stroke-width="15"
                    d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z" />
            </svg>
            <p class="number">5</p>
        </label>
        <input id=rating5 type=radio value=5 name=rating />

        <!-- por último el label del rating 0 ( sin calificar ) -->
        <label class=reset for=rating0>reset</label>

        <div id=texto>sin calificar</div>

    </div>

    <div class="container">
        <!-- svg from https://es.wikipedia.org/wiki/Archivo:Star*.svg -->

        <input id=ratingSabor0 type=radio value=0 name=ratingSabor checked />

        <label class=star for=ratingSabor1>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">

                <path stroke="#605a00" stroke-width="15"
                    d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z" />
            </svg>
            <p class="number">1</p>
        </label>

       
    </div>

   











</body>
<script>
    // para todos los radiobutton rating agregar un on change
    const changeRating = document.querySelectorAll('input[name=rating]');
    changeRating.forEach((radio) => {
        radio.addEventListener('change', getRating);
    });

    // buscar el radiobutton checked y armar el texto con el valor ( 0 - 5 )
    function getRating() {
        let estrellas = document.querySelector('input[name=rating]:checked').value;
        document.getElementById("texto").innerHTML = (
            0 < estrellas ?
                estrellas + " estrella" + (1 < estrellas ? "s" : "") :
                "sin calificar"
        );

        // opcionalmente agregar un ajax para guardar el rating
    }
</script>

</html>