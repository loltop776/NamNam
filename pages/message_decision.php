<?php 

session_start();

    if(!($_SESSION['name_correcto'] == 'check')){

        header('Location: ../index.php');

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decision</title>
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
                <article class="message_user"><p>Buenas, me llamo <b><?php echo $_SESSION['name']; ?></b>. </p></article>
                
                <article class="message_boss"><p>Perfecto <b><?php echo $_SESSION['name']; ?></b>, nos encantaría contar con usted sobre la resolución de problemas que tenemos actualmente en nuestra empresa.</p></article>

                <article class="message_boss"><p>¿Qué me dices?</p></article>

                <p style="position: absolute;"><?php if(isset($_GET['error']) && $_GET['error'] = 1){

                    echo "Introduce un valor válido.";

                } ?></p>

                <table>

                    <tr>

                        <td class="red">
                            <p>Me la pela</p>
                        </td>
                        <td class="green">
                            <p>Me parece bien</p>
                        </td>

                    </tr>

                    <tr>

                        <td class="green">
                            <p>Dale</p>
                        </td>
                        <td class="red">
                            <p>Tu flipas</p>
                        </td>

                    </tr>

                </table>

                

            </section>
            <hr>
            <section class="bottom_wasp">
                
                <img src="../img/face.svg" alt="No se ha podido cargar la imagen">

                <form action="../validation/validation_decision.php" method="post">

                    <input type="text" id="name" name="decision" placeholder="Introduce texto aquí...">
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
</body>
</html>