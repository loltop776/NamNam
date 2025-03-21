<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre</title>
    <link rel="stylesheet" href="../stylesheets/stylesheet_index.css">
    
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
                <img src="../img/boss_icon.png" alt="No se ha podido cargar la imagen"> 

                <p>+34 587 12 43 90</p>

                <!-- Puntos suspensivos de wasp (ajustes) -->
                <img src="../img/gear.svg" alt="No se ha podido cargar la imagen">
            </section>
            <section class="mid_wasp">
                <br>
                <article class="message_boss"><p>Buenas, he visto tu currículum y he decidido contactar con usted mediante Whatsapp.</p></article>
                
                <article class="message_boss"><p>Me llamo Rodriguez y sería ideal para nuestra empresa un especialista como tú.</p></article>

                <article class="message_boss"><p>¿Cómo le gustaría que le llame?</p></article>

                <p><?php if(isset($_GET['error']) && $_GET['error'] = 1){

                    echo "Nombre de usuario fallido, pruebe de nuevo";

                } ?></p>
                

            </section>
            <hr>
            <section class="bottom_wasp">
                
                <img src="../img/face.svg" alt="No se ha podido cargar la imagen">

                <form action="../validation/validation_message_name.php" method="post">

                    <input type="text" id="name" name="nombre" placeholder="Introduce texto aquí...">
                    <input type="submit" name="enviar" id="submit">

                </form>

            </section>

        </div>
        <div class="buttons_down">
            <span class="btn_home"></span>
        </div>
    </section>

</body>
</html>