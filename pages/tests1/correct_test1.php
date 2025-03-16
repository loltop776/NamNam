<?php 

session_start();

    if(!($_SESSION['correct_code'] = 'checked')){

        header('Location: ../test1_start.php');

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CORRECTO</title>
    <link rel="stylesheet" href="../../stylesheets/stylesheet_index.css">
</head>
<body>
    
    
<section class="container_mobile">
        <div class="box_up">    
            <span class="camera"></span>
            <span class="circles"></span>
            <span class="audio_up"></span>
        </div>
        <div class="screen_wasp">

            <section class="top_wasp">
                <!-- Logo jefe -->
                <img src="../../img/boss_icon.png" alt="No se ha podido cargar la imagen"> 

                <p>+34 587 12 43 90</p>

                <!-- Puntos suspensivos de wasp (ajustes) -->
                <img src="../../img/gear.svg" alt="No se ha podido cargar la imagen">
            </section>
            <section class="mid_wasp">
                <br>
                <article class="message_boss"><p>¡MUCHAS GRACIAS POR TU AYUDA!</p></article>
                
                <article class="message_boss"><p>Nos ha servido de mucho tener un especialista como tú.</p></article>

                <article class="message_boss"><p>No es por coger confianza, pero te necesitamos para más problemas. Te recompensaré con un buen sueldo.</p></article>

                <article class="message_boss"><a href="">Ir al siguiente</a></article>

            </section>
            <hr>
            <section class="bottom_wasp">
                
                <img src="../../img/face.svg" alt="No se ha podido cargar la imagen">

                <form action="" method="post">

                    <input type="text" id="name" name="nombre" placeholder="Introduce texto aquí..." disabled>
                    <input type="submit" name="enviar" id="submit" disabled>

                </form>

            </section>

        </div>
        <div class="buttons_down">
            <span class="btn_home"></span>
        </div>
    </section>

</body>
</html>