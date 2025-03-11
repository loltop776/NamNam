<?php

if(isset($_POST['enviar']) && strtolower($_POST['decision']) == 'me parece bien' || strtolower($_POST['decision']) == 'meparecebien' || strtolower($_POST['decision']) == 'dale' || strtolower($_POST['decision']) == 'dale.' || strtolower($_POST['decision']) == 'me parece bien.' || strtolower($_POST['decision']) == 'meparecebien.'){

    session_start();
    $_SESSION['decision_correct'] = 'check';
    $_SESSION['decision'] = $_POST['decision'];
    header('Location: ../pages/login.php');




} else if (isset($_POST['enviar']) && strtolower($_POST['decision']) == 'me la pela' || strtolower($_POST['decision']) == 'melapela' || strtolower($_POST['decision']) == 'tu flipas' || strtolower($_POST['decision']) == 'tuflipas' || strtolower($_POST['decision']) == 'mela pela' || strtolower($_POST['decision']) == 'me lapela' || strtolower($_POST['decision']) == 'me parece bien.' || strtolower($_POST['decision']) == 'mela pela.' || strtolower($_POST['decision']) == 'me lapela.' || strtolower($_POST['decision']) == 'tu flipas.' || strtolower($_POST['decision']) == 'tuflipas.'){

    
    session_start();
    $_SESSION['decision_incorrect'] = 'check';
    header('Location: ../pages/incorrect_message.php');



} else {

    header('Location: ../pages/message_decision.php?error=1');

}




?>