<?php

if (isset($_POST['enviar']) && $_POST['nombre'] != '' && !is_numeric( $_POST['nombre'])){
    session_start();
    $_SESSION['name_correcto'] = 'check';
    header('Location: ../pages/message_decision.php');
} else if (isset($_POST['enviar'])){

    header('Location: ../pages/message_name.php?error=1');

}


?>