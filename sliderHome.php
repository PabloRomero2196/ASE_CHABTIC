<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="slider.css">
    <title>Slider</title>
</head>

<body>
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
                    <img src="img/slider1.jpg" alt="Imagen de abejas" style="width:100%;">
                </div>

                <div class="item">
                    <img src="img/slider2.jpg" alt="Imagen de abejas en panal" style="width:100%;">
                </div>

                <div class="item">
                    <img src="img/slider3.jpg" alt="New york" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <!-- <span ><i class="fas fa-angle-right"></i></span> -->
                <!-- <span class="sr-only">Previous</span> -->
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <!-- <span><i class="fas fa-angle-right"></i></span> -->
                <!-- <span class="sr-only">Next</span> -->
            </a>
        </div>
    </div>
</body>

</html>