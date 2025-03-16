<?php
session_start();

// Inicializar sesión si es la primera vez
if (!isset($_SESSION['pregunta_actual'])) $_SESSION['pregunta_actual'] = 0;
if (!isset($_SESSION['errores'])) $_SESSION['errores'] = 0;
?>
