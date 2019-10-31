<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chabtic Productos</title>
    <link href="productos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script href="jquery.js"></script>
    <script href="bootstrap.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1 class="titulo">PRODUCTOS</h1>
        <?php include 'header.php' ?>
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/600f.png" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="img/290f.png" style="width:100%;">
                    </div>


                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </header>
    <section>
        <h2 class="titulo"> DESCRIPCIÓN</h2>
        <p>Miel de abeja <strong>Chabtic</strong> 100% <strong>orgánica</strong>, pura y mexicana. Nuestra
            <strong>miel</strong> es sustentable desde nuestros <strong>apiarios</strong> hasta tu casa. Nuestra
            <strong>miel</strong> es cultivada entre la diversidad de la flora local y en armonía con la Madre Tierra.
            Durante el proceso de envasado la <strong>miel</strong> no rebasa los 35º C, así mantenemos intactas sus
            propiedades. Envasamos en frascos de vidrio para preservar su sabor, además de ser un material
            <strong>reciclable</strong> y <strong>reutilizable</strong>.</p>
    </section>
    
      <section class="infoNutrimental">
        <h2 class="titulo">INFORMACIÓN NUTRIMENTAL</h2>


        <div class="contenedorDeArticle">
            <article class="elemento">
                <div>
                    <h3>Proteinas</h3>
                    <p>0.3g</p>
                </div>
            </article>
        </div>

        <div class="contenedorDeArticle">
            <article class="elemento">
                <div>
                    <h3>Tamaño Porción</h3>
                    <p>20g</p>
                </div>
            </article>
        </div>

        <div class="contenedorDeArticle">
            <article class="elemento">
                <div>
                    <h3>Porción por envase</h3>
                    <p>14g</p>
                </div>
            </article>
        </div>


        <div class="contenedorDeArticle">
            <article class="elemento">
                <div>
                    <h3>Contenido Energético</h3>
                    <p>269k <br>69kal</p>
                </div>
            </article>
        </div>

        <div class="contenedorDeArticle">
            <article class="elemento">
                <div>
                    <h3> Grasa Total</h3>
                    <p>0g</p>
                </div>
            </article>
        </div>

        <div class="contenedorDeArticle">
            <article class="elemento">
                <div>
                    <h3>Grasa Saturada</h3>
                    <p>0g</p>
                </div>
            </article>
        </div>

        <div class="contenedorDeArticle">
            <article class="elemento">
                <div>
                    <h3>Azucares</h3>
                    <p>17g</p>
                </div>
            </article>
        </div>

        <div class="contenedorDeArticle">
            <article class="elemento">
                <div>
                    <h3>Carbohidratos</h3>
                    <p>17g</p>
                </div>
            </article>
        </div>
    </section>

    <section class="procesos">
        <!--https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_modal&stacked=h-->
        <h2 class="titulo">PROCESOS</h2>
        <div class="wrapper">
            <div class="card">
                <input type="checkbox" id="card1" class="more" aria-hidden="true">
                <div class="content">
                    <div class="front">
                        <div class="inner">
                            <h2>Paso 1: Recolecta de polen y néctar. </h2>
                            <label for="card1" class="button" aria-hidden="true">
                                CONOCER MÁS
                            </label>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <div class="description">
                                <p>Es el periodo en el cual las abejas se encargan del pecoreo de néctar y polen de las
                                    flores, proceso y almacenamiento de la miel. En esta etapa el productor se encarga de revisar las colmenas: construcción de panal,
                                    producción de crías, producción de miel, salud y población de abejas. Se hace mínimo
                                     una vez por semana. Este paso tiene una duración de dos a cuatro meses.</p>
                            </div>
                            <label for="card1" class="button return" aria-hidden="true">
                                <i class="fas fa-arrow-left"></i>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <input type="checkbox" id="card3" class="more" aria-hidden="true">
                <div class="content">
                    <div class="front">
                        <div class="inner">
                            <h2>Paso 2: Centrifugar</h2>
                            <label for="card3" class="button" aria-hidden="true">
                                CONOCER MÁS
                            </label>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <div class="description">
                                <p>
                                    Para extraer la miel se coloca los bastidores en el centrifugador de acero inoxidable, donde  se somete a movimiento rotatorio para separarla de los bastidores.
                                    Este paso tiene una duración de 10 minutos por caja.</p>
                            </div>
                            <label for="card3" class="button return" aria-hidden="true">
                                <i class="fas fa-arrow-left"></i>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <input type="checkbox" id="card2" class="more">
                <div class="content">
                    <div class="front">
                        <div class="inner">
                            <h2>Paso 3: Desopercular</h2>
                            <label for="card2" class="button" aria-hidden="true">
                               CONOCER MÁS
                            </label>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <div class="description">
                                <p> Una vez que las abejas han llenado las celdas de miel las cubren con una capa de cera. Para  recolectar la miel se quita esa capa de cera. Esto se hace de dos a tres veces por cosecha. (En el periodo de cosecha que dura, más o menos de Febrero a Junio, hay 3 cosechas, en cada cosecha se revisa que los bastidores tengan miel y en caso de que sí tengan miel se desopercula). Igual es lo que queríais indicar, solo lo puntualizo porque no me había quedado del todo claro. </p>
                            </div>
                            <label for="card2" class="button return" aria-hidden="true">
                                <i class="fas fa-arrow-left"></i>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <input type="checkbox" id="card4" class="more" aria-hidden="true">
                <div class="content">
                    <div class="front">
                        <div class="inner">
                            <h2>Paso 4: Almacenar</h2>
                            <label for="card4" class="button" aria-hidden="true">
                                CONOCER MÁS
                            </label>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <div class="description">
                                <p>Se guarda en ánforas. El periodo depende de los pedidos de miel, va desde una semana hasta un año. La miel se coloca sobre estantes de acero inoxidable (son de reciente adquisición, por eso no estaba en el documento que mandamos).</p>
                            </div>
                            <label for="card4" class="button return" aria-hidden="true">
                                <i class="fas fa-arrow-left"></i>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <input type="checkbox" id="card5" class="more" aria-hidden="true">
                <div class="content">
                    <div class="front">
                        <div class="inner">
                            <h2>Paso 5: Filtrar y sedimentar</h2>
                            <label for="card5" class="button" aria-hidden="true">
                                CONOCER MÁS
                            </label>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <div class="description">
                                <p>La miel caliente  (se calienta a 37 grados durante unas horas, pero preferimos no ponerlo porque hay una creencia de que la miel calentada pierde propiedades. Es una creencia cierta en realidad, pero solo si la calientas mucho, como para pasteurizarla o así, nosotros solo lo hacemos para facilitar su manejo) se hace pasar  por una malla de un millón de micrones  con el objetivo de retirar restos de cera o impurezas que contenga la miel. Este paso se realiza por lo menos dos veces al mismo lote.
    
                                    La duración es de 5 minutos por ánfora.</p>
                            </div>
                            <label for="card5" class="button return" aria-hidden="true">
                                <i class="fas fa-arrow-left"></i>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <input type="checkbox" id="card6" class="more" aria-hidden="true">
                <div class="content">
                    <div class="front">
                        <div class="inner">
                            <h2>Paso 6: Llenado</h2>
                            <label for="card6" class="button" aria-hidden="true">
                                CONOCER MÁS
                            </label>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <div class="description">
                                <p> Llenado de los de envases de vidrio de 290g y de 600g, envases de pet 700g 350g, ánfora, bolsas de 16g, . Se hace directo del filtrado, el tambo tiene una salida en la parte inferior. La duración de la operación es de una hora por ánfora en los envases de pet, en ánfora se reduce a 10 minutos. (no pondría lo de la duración, lo cierto es que no lo tenemos tan bien medidos, por ejemplo ahí se dice que los pet dura 1 hora, pero no se menciona cuantos se hacen en 1 hora, la verdad, como digo, no lo sabemos)</p>
                            </div>
                            <label for="card6" class="button return" aria-hidden="true">
                                <i class="fas fa-arrow-left"></i>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <input type="checkbox" id="card7" class="more" aria-hidden="true">
                <div class="content">
                    <div class="front">
                        <div class="inner">
                            <h2>Paso 7: Etiquetar</h2>
                            <label for="card7" class="button" aria-hidden="true">
                                CONOCER MÁS
                            </label>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <div class="description">
                                <p> Se le coloca la etiqueta al envase de manera manual.
                                </p>
                            </div>
                            <label for="card7" class="button return" aria-hidden="true">
                                <i class="fas fa-arrow-left"></i>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <input type="checkbox" id="card8" class="more" aria-hidden="true">
                <div class="content">
                    <div class="front">
                        <div class="inner">
                            <h2>Paso 8: Empaquetar</h2>
                            <label for="card8" class="button" aria-hidden="true">
                                CONOCER MÁS
                            </label>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <div class="description">
                                <p> Los envases se colocan  en cajas de cartón. Las ánforas se colocan  en rejas de madera.
                                    La duración de esta operación es de 30 minutos el empaque del ánfora y 15 en los envases. (mismo caso)
                                </p>
                            </div>
                            <label for="card8" class="button return" aria-hidden="true">
                                <i class="fas fa-arrow-left"></i>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <input type="checkbox" id="card9" class="more" aria-hidden="true">
                <div class="content">
                    <div class="front">
                        <div class="inner">
                            <h2>Paso 9: Enviar</h2>
                            <label for="card9" class="button" aria-hidden="true">
                                CONOCER MÁS
                            </label>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <div class="description">
                                <p> Se envía por paquetería de Fedex, la cual recoge el pedido los días jueves. El pedido tarda 3 días hábiles en llegar. El producto se lleva a la planta procesadora de café donde llega la paquetería.
                                </p>
                            </div>
                            <label for="card9" class="button return" aria-hidden="true">
                                <i class="fas fa-arrow-left"></i>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <input type="checkbox" id="card10" class="more" aria-hidden="true">
                <div class="content">
                    <div class="front">
                        <div class="inner">
                            <h2>Paso 10: Disfrutar</h2>
                            <label for="card10" class="button" aria-hidden="true">
                                CONOCER MÁS
                            </label>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <div class="description">
                                <p>  Disfrutarla de mil maneras distintas 
                                </p>
                            </div>
                            <label for="card10" class="button return" aria-hidden="true">
                                <i class="fas fa-arrow-left"></i>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="NuestrosProductos">
        <h2>Nuestros Productos</h2>
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/600f.png" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="img/290f.png" style="width:100%;">
                    </div>


                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="productos">
            <article>

                <h3>¿ERES MAYORISTA?</h3>
                <p>¿Te gustaría comprar más de 8 envases?
                    <br>Adquiere nuestro producto por medio de <strong> Batsil Maya </strong> </p>
                <label> Ir a Bats’il Maya</label>

            </article>
            <article>
                <h3>¿ERES MINORISTA?</h3>
                <p>¿Te gustaría comprar menos de 8 envases?
                    Adquiere nuestro producto por medio de <strong>Amazón</strong></p>
               <label>Comprar Ahora</label> 
            </article>
        </div>
    </section>
    <?php include 'redes.php' ?>
    <?php include 'footer.php' ?>
</body>

</html>