<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css"/>
    <link rel="animation" href="animations.js" >
    <title>Nuestra Casa</title>
</head>
<body>
        <?php include 'header.php' ?>
    <h2>NUESTRA CASA</h2>
    <section class="misyvis">
        <article id="mision" class="mision">
            <h3>MISIÓN</h3>
            <p id="misionP" class="misionP">Ser una <strong>empresa social</strong> de producción y comercialización 
            de <strong>miel</strong> certificada de la mejor calidad y otros productos derivados de <strong>la miel</strong>
            ,integrando a los productores apícols de comunidades indigenas tseltales de Chiapas en un 
            desarrollo social y de autogestión que los lleve hacia un estilo de vida susutentable
            ,respetando su cultura 
            </article>   
            <article id="vision" class="vision"><h3>VISIÓN</h3>
            <p id="visionP" class="visionP">Ser reconocidos como una empresa sostenible y de alto impacto social al generar alternativas viables
                y rentables para el <strong>desarrollo de comunidades indigenas</strong> al acompañarlas hacia la 
                autogestión económica , social y cultural por medio de aprendizaje continuo y del comercio justo de productos
                <strong>orgánicos</strong> derivados de <strong>de la miel</strong>
            </p>
        </article>
    </section>
        <section class="timeline" id="timeline"><H3>NUESTRA HISTORIA</H3>
        <Ul>
            <li>
                    <div>
                    <figure class="imagentiempoContenedor"><img src="img/linea-de-tiempo1.png" alt="" id="imagentiempo" class="imagentiempo"></figure>
                <time>2001</time> <p>Nace la cooperativa Ts’umbal Xitalha’ con 22 familias productoras de café y miel con el objetivo de organizar el trabajo y construir un mejor ingreso económico para los productores.
                </p></li></div>
                
            <li>
                <div>
                <figure class="imagentiempoContenedor"><img src="img/linea-de-tiempo2.png" alt="" id="imagentiempo" class="imagentiempo"></figure> 
               <time>2015</time>
                <p>Llega la plaga de la roya a los cafetales y acaba con el 90% de la producción de café de la cooperativa</p></div>
            </li>

            <li>
                <div>
                <figure class="imagentiempoContenedor"><img src="img/linea-de-tiempo3.png" alt="" id="imagentiempo" class="imagentiempo"></figure>
                <time>2016</time> <p>Se incrementan los esfuerzos para impulsar la miel como una alternativa de ingresos para las familias.
                </p></div>
            </li>

            <li>
                <div>
                <figure class="imagentiempoContenedor"><img src="img/linea-de-tiempo4.png" alt="" id="imagentiempo" class="imagentiempo"></figure>
                <time>2017</time> <p>Colaboración con las cafeterias Capeltic para el desarrollo de nuevas bebidas con miel saborizada.
                </p></div>
            </li>

            <li>
                <div>
                <figure class="imagentiempoContenedor"><img src="img/linea-de-tiempo4.png" alt="" id="imagentiempo" class="imagentiempo"></figure>
                <time>2017</time> <p>Se inaugura el nuevo espacio de trabajo para Chabtic.</p></div>
            </li>

            <li>
                <div>
                <figure class="imagentiempoContenedor"><img src="img/linea-de-tiempo5.png" alt="" id="imagentiempo" class="imagentiempo"></figure>
                <time>2019</time> <p>Cambio de imagen y posicionamiento del producto para asegurar el pago justo a familas.
                </p></div>
            </li>
        </Ul>
        </section>
        <section class="Yasomos">
            <h3>Ya somos</h3>
            <article>
                <div class="familia" id="familia">29</div>
                <p>Familias Productoras</p>
            </article>
            <p>Y</p>
            <article>
                <div class="trabajadores" id="trabajadores">3</div>
                <p>Trabajadores</p>
            </article>
        </section>
        
        <section class="nuestroequipo" id="nuestroequipo">
        <h3>Nuestro Equipo</h3>
        <article class="personal" id="personal">
            <div>
        <figure><img src="img/integrante_1.png" alt="icono"></figure>
        <h4>Víctor López </h4>
        <h5>Técnico de campo</h5>
        <p>Se encarga de revisar que las abejitas de los apicultores estén siempre sanas y felices. Además de acompañar en la capacitación a los productores en habilidades como la cría de abejas reinas o producción de propoleo.
            </p>
            </div>
        </article>

        <article class="personal" id="personal">
                <div><figure><img src="img/integrante_2.png" alt="icono"></figure>
                <h4>Julio César Pérez</h4>
                <h5>Responsablede planta </h5>
                <p>Acopia la miel de los apicultores. Sedimenta, filtra y envasa la miel para enviar a los clientes en las diferentes presentaciones, todo de forma natural para compartir el delicioso sabor de nuestra miel Chabtic.
                    </p>
                </div>
                </article>
               
                <article class="personal" id="personal">
                    <div>
                    <figure><img src="img/integrante_3.png" alt="icono"></figure>
                        <h4>Javier Zubeldia</h4>
                        <h5> Responsable de la comercialización </h5>
                        <p>Busca gente que comparte con nosotros la idea de impulsar un cambio positivo. Un cambio generado a través de la compra de un rico producto orgánico y natural como la miel Chabtic.                            </p>
                    </div>    
                    </article>
                        <article class="personal" id="personal">
                          <div>
                            <figure><img src="img/integrante_4.svg" alt="icono"></figure>
                                <h4>Tú</h4>
                                <h5> Colaborador(a) de Chabtic </h5>
                                <p>Que eres parte de una propuesta diferente, que disfrutas de un producto natural y orgánico con una historia que compartir.</p>
                            </div>    
                            </article>
        </section>
                <section class="bordeInferior"><!--COLABORADORES-->
                    <h2>COLABORADORES</h2>
                    <?php include 'colaboradores.php'?>
                </section>
            
                <section class="bordeInferior"><!--NUESTROS PRODUCTOS-->
                    <h2>ADQUIERE NUESTROS PRODUCTOS EN...</h2>
                    <?php include 'puntosDeVenta.php'?>
                </section>
                <section>
        
                <?php include 'redes.php' ?>
            <!--INCLUIR REDES-->

        <?php include 'footer.php' ?>
            <!--INCLUIR FOOTER-->
    
</html>