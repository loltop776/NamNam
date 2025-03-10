<?php

if (isset($_POST['enviar']) && $_POST['nombre'] != '' && !NaN($_POST['nombre'])){
    session_start();
    $_SESSION['name_correcto'] = 'check';
    header('Location: ../index.php');
} else if (isset($_POST['enviar'])){

    header('Location: ../index.php');

}


?>