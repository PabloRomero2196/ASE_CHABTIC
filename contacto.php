<!Doctype html>
<html lang="es-mx" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <meta name="author" content="Oriana Piliado, Emiliano Villegas, Pablo Romero, Marcos Carmona">
    <meta name="description" content="Formulario para contactar a Chabtic Nuestra Miel">
    <meta name="keywords" content="formulario, form, contacto, ayuda, télefono, mail, e-mail, nombre, ayuda">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Contacto</title>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>


    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            font-size: 85%;
        }

        <body style="overflow-y:hidden">img {
            max-width: 100%;
            min-width: 100%;
        }

        iframe {
            width: 100%;
            height: 300px;
            border: none;
        }

        @font-face {
            font-family: 'Whitney';
            src: url('web_fonts/Whitney-MediumItalic.eot');
            src: url('web_fonts/Whitney-MediumItalic.eot?#iefix') format('embedded-opentype'),
                url('web_fonts/Whitney-MediumItalic.woff2') format('woff2'),
                url('web_fonts/Whitney-MediumItalic.woff') format('woff'),
                url('web_fonts/Whitney-MediumItalic.ttf') format('truetype'),
                url('web_fonts/Whitney-MediumItalic.svg#Whitney-MediumItalic') format('svg');
            font-weight: 500;
            font-style: italic;
        }

        @font-face {
            font-family: 'Whitney';
            src: url('web_fonts/Whitney-Medium.eot');
            src: url('web_fonts/Whitney-Medium.eot?#iefix') format('embedded-opentype'),
                url('web_fonts/Whitney-Medium.woff2') format('woff2'),
                url('web_fonts/Whitney-Medium.woff') format('woff'),
                url('web_fonts/Whitney-Medium.ttf') format('truetype'),
                url('web_fonts/Whitney-Medium.svg#Whitney-Medium') format('svg');
            font-weight: 500;
            font-style: normal;
        }

        @font-face {
            font-family: 'Whitney';
            src: url('web_fonts/Whitney-Bold.eot');
            src: url('web_fonts/Whitney-Bold.eot?#iefix') format('embedded-opentype'),
                url('web_fonts/Whitney-Bold.woff2') format('woff2'),
                url('web_fonts/Whitney-Bold.woff') format('woff'),
                url('web_fonts/Whitney-Bold.ttf') format('truetype'),
                url('web_fonts/Whitney-Bold.svg#Whitney-Bold') format('svg');
            font-weight: bold;
            font-style: normal;
        }



        @media only screen and (min-width: 320px) {

            /* For mobile: */
            .form {
                width: 100%;
                height: 600px;
                border: solid 0px;
            }

            h2 {
                font-size: 30px;
            }


            img {
                max-width: 100%;
                min-width: 100%;
                padding: 1em;
            }

            p {
                text-align: center;
                font-size: 15px;
            }

            figure {
                width: 100%;
                overflow: hidden;
                align-items: center;
                margin: auto;
            }

        }

        @media only screen and (min-width: 600px) {

            /* For tablets: */
            .form {
                width: 100%;
                height: 600px;
                border: solid 0px;
            }

            h2 {
                font-size: 40px;
            }

            p {
                text-align: center;
                font-size: 22px;
            }

            figure {
                width: 100%;
                overflow: hidden;
                align-items: center;
                margin: auto;
            }
        }

        @media only screen and (min-width: 768px) {

            /* For desktop: */
            form {
                width: 600px;
                margin: 2% auto;
                padding: 0%;
            }

            body>form>p {
                padding-left: 11%;
            }

            body>form>fieldset {
                padding-right: 15%;
                padding-left: 15%;
            }

        }
    </style>
</head>

<section>
    <?php include 'header.php' ?>
    <h2>CONTÁCTANOS</h2>
    <p>Para dudas y sugerencias contáctanos a través del siguiente formulario</p>
    <iframe id="form" class="form" src="form.html"></iframe>
</section>

<section>
    <h2>MAPA</h2>
    <p id="localizacion" class="localizacion">Nos encontramos en la selva norte de Chiapas</p>
    <figure><img src="images/mapa-chabtic.jpg" alt="Mapa de ubicación de Chabtic"></figure>
</section>
<section>
    <h2>TELÉONOS</h2>
    <p>Contáctanos al <p id="telefono" class="telefono">555-5555-555</p>
    </p>
</section>

<section>
    <h2>DIRECCIÓN</h2>
    <p>Nos puedes encontrar en<p id="direccion" class="direccion">Lorem Impsum 763 </p>
    </p>
</section>


<?php include 'redes.php' ?>
<!--INCLUIR REDES-->

<?php include 'footer.php' ?>
<!--INCLUIR FOOTER-->



</body>

</html>