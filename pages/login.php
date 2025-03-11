<?php 

session_start();

    if(!($_SESSION['decision_correct'] == 'check')){

        header('Location: ../pages/message_decision');

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../stylesheets/stylesheet_login.css">
</head>
<body>

    
    <!-- Contenido de la web -->

    <header>
        <h1>NamNam</h1>
    </header>

    
    <section class="block_form">

        <span></span>
        <form class="login_form" action="">

            <article>
                <label for="">Usuario:</label>
                <input type="text" id="user" name="user">
            </article>

            <article>
                <label for="">Contraseña:</label>
                <input type="password" id="passwd" name="passwd">
            </article>

            <article>

                <label for="">Categoría:</label>
                <select>
                    <option value="0" disabled>- Seleccione una opción -</option>
                    <option value="1">Departamento IT</option>
                    <option value="2">Administrador</option>
                    <option value="3">Finanzas</option>
                </select>

            </article>

        </form>



    </section>



    <!-- Parte del MÓVIL -->

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



            </section>
            <hr>
            <section class="bottom_wasp">
                
                <img src="../img/face.svg" alt="No se ha podido cargar la imagen">

                <form action="" method="post">

                    <input type="text" id="decision" name="decision" placeholder="Introduce texto aquí...">
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