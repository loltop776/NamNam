<?php

if (isset($_POST['send']) && $_POST['contra1']=="7" && $_POST['contra2']=="1" && $_POST['contra3']=="6" && $_POST['contra4']=="2" ) {

    session_start();
    $_SESSION['NAHUEL']='check';

    header('Location: ../../tests3/index.php');

} else if (isset($_POST['contra1']) && isset($_POST['contra2']) && isset($_POST['contra3']) && isset($_POST['contra4']) ) {

    header('Location: ../index.php?msg=Error');

}

?>