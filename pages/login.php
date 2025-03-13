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
    <title>Login</title>
    <link rel="stylesheet" href="../stylesheets/stylesheet_login.css">
    <link rel="icon" href="../img/NamNam_icon.ico">
</head>
<body>

    
    <!-- Contenido de la web -->

    <header>
        <img id="header_image" src="../img/NamNam_icon.ico" alt="">
        <h1>NamNam</h1>
    </header>

    
    <section class="block_form">

        <span></span>
        <form  class="login_form" action="../validation/validation_login.php" method="post">
            <?php if(isset($_GET['error']) && $_GET['error'] = 1){

                echo "<br>";
                echo "Valores incorrectos";

            } ?>

            <article>
                <label for="user">Usuario:</label>
                <input type="text" id="user" name="user" placeholder="Escriba aquí" required>
            </article>

            <article>
                <label for="passwd">Contraseña:</label>
                <input type="password" id="passwd" name="passwd" placeholder="Escriba aquí" required>
            </article>

            <article>

                <label for="cat">Categoría:</label>
                <select id="cat" name="cat">
                    <option value="" disabled>- Seleccione una opción -</option>
                    <option value="2">Finanzas</option>
                    <option value="2">Administrador</option>
                    <option value="1">Departamento IT</option>
                </select>

            </article>

            <input type="submit" id="submit" name="submit">

        </form>



    </section>


    <!-- Botón para el móvil -->

    <!-- <section class="content_button_movile">
    <section class="button_movile">

        <img src="../img/movile_icon.png" alt="No se ha podido cargar la imagen">

    </section>
    </section> -->

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

            <article class="message_boss"><p>Perfecto, primero necesito que inicies sesión mediante los siguientes parámetros.</p></article>

            <article class="message_boss"><p>Usuario: itAdmin <br> Passwd: 45579 <br> Categoría: Departamento IT</p></article>

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