<?php

if(isset($_POST['submit']) && $_POST['user'] == 'itAdmin' && $_POST['passwd'] == '45579' && $_POST['cat'] == '1'){

    session_start();
    $_SESSION['login'] = 'checked';
    header('Location: ../pages/tests1/test1_start.php');

} else if(isset($_POST['submit'])) {

    header('Location: ../pages/login.php?error=1');

}



?>