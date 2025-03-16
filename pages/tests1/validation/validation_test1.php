<?php

if(isset($_POST['code_confirm']) && $_POST['code1'] == "14" && $_POST['code2'] == '3' && $_POST['code3'] == "10" && $_POST['code4'] == "2" && $_POST['code5'] == "17" && $_POST['code6'] == "16"){

    session_start();
    $_SESSION['correct_code'] = 'checked';
    header('Location: ../correct_test1.php');


} else if(isset($_POST['code_confirm'])){

    header('Location: ../test1_start.php?error=1');

}