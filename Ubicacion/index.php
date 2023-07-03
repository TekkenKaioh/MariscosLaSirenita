<?php
// Obtener el número del día de la semana actual (1 para lunes, 2 para martes, etc.)
$day = date('N');

// Establecer la URL de la etiqueta <a> según el día de la semana utilizando un switch
switch ($day-1) {
  case 1:
    $url = 'https://www.php.net/manual/es/function.date.php'; // Lunes
    break;
  case 2:
    $url = 'https://seriesdonghua.com/'; // Martes
    break;
  case 3:
    $url = 'https://www3.animeflv.net/'; // Miércoles
    break;
  case 4:
    $url = 'https://www.youtube.com/'; // Jueves
    break;
  case 5:
    $url = 'https://www.udemy.com/'; // Viernes
    break;
  case 6:
    $url = 'https://olympusscans.com/'; // Sábado
    break;
  default:
    $url = 'https://www.google.com/maps/embed?pb=!3m2!1ses!2smx!4v1686521145565!5m2!1ses!2smx!6m8!1m7!1stIZ959QTfRrHCxlTkE2Bzg!2m2!1d19.38053659535795!2d-99.28550147554905!3f341.6456394538672!4f0.4859813430576594!5f0.7820865974627469'; // Domingo
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubicacion</title>
    <link rel="stylesheet" href="../css/index.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <a href="../index.html">
                <div class="logo-title">
                    <h2>MARISCOS LA SIRENITA</h2>
                    <h2>MARISCOS LA SIRENITA</h2>
                </div>
            </a>
            <ul class="menu">
                <li><a href="../index.html">Home</a></li>
                <li><a href="../Menu/">Menu</a></li>
                <li class="active"><a href="#">Ubicacion</a></li>
                <li><a onclick="enviarMensaje()">Contactanos</a></li>
            </ul>

            <div class="icon-menu">
                <label class="icon">Menu</label>
            </div>

        </nav>
        <!-- <div class="content-icon-night">
            <label class="icon-night">night</label>
        </div> -->
    </header>

    <div class="mapa">
        <div class="mapa-text">
            <p>LA UBICACION CAMBIA DEPENDIENDO EL DIA. <a href="<?php echo $url; ?>" target="_blank">Ver Mapa</a></p>
        </div>
        
        <div class="mapa-maps">
            <iframe src="<?php echo $url; ?>" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>



    
    <script src="../js/menu.js"></script>
</body>
</html>