<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Problema en el almacén</title>
</head>

<body>

    <h2>Prueba en el almacén</h2>
        <hr>
    <h5>¡Tenemos muchos problemas en el almacén!</h5>
    <h5>¿Serás capaz de solucionarlo?</h5>
    <?php 
        if (isset($_GET['msg'])) {
            echo '<script>
            alert("Código incorrecto. Inténtalo de nuevo.");
            </script>';
        }
    ?>
        <br>    

        <table id="panel_2">
        <tr>
            <td class="camara">
                <a href="./camaras/cam1.php">
                    <img src="./camaras/img/almacenes/almacen1.jpg" width="100%" height="15%">
                    <p class="enlaces">Cámara 1</p>
                </a>
            </td>

            <td class="camara">
                <a href="./camaras/cam2.php">
                    <img src="./camaras/img/almacenes/almacen2.jpg" width="100%" height="15%">
                    <p class="enlaces">Cámara 2</p>
                </a>
            </td>
        </tr>
        <tr>
            <td class="camara">
                <a href="./camaras/cam3.php">
                    <img src="./camaras/img/almacenes/almacen3.jpg" width="100%" height="15%">
                    <p class="enlaces">Cámara 3</p>
                </a>
            </td>

            <td class="camara">
                <a href="./camaras/cam4.php">
                    <img src="./camaras/img/almacenes/almacen4.jpg" width="100%" height="15%">
                    <p class="enlaces">Cámara 4</p>
                </a>
            </td>
        </tr>
    </table>

</body>
</html>