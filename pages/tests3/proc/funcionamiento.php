<?php
include '../proc/sesiones.php';


$preguntas = [
    ["pregunta" => "¿Para qué se usa un cable Ethernet?", "opciones" => ["Conectar redes", "Cargar baterías", "Transmisión de video"], "correcta" => 0],
    ["pregunta" => "¿Cuál es la velocidad máxima de un cable Cat6?", "opciones" => ["100 Mbps", "1 Gbps", "10 Gbps"], "correcta" => 2],
    ["pregunta" => "¿Cuántos pares de cables tiene un Ethernet estándar?", "opciones" => ["2", "4", "8"], "correcta" => 1],
    ["pregunta" => "¿Qué significa UTP en un cable?", "opciones" => ["Ultra Thin Protocol", "Unshielded Twisted Pair", "Unified Transmission Path"], "correcta" => 1],
    ["pregunta" => "¿Qué color es el primer cable en la norma T568A?", "opciones" => ["Verde-Blanco", "Naranja-Blanco", "Azul-Blanco"], "correcta" => 0],
    ["pregunta" => "¿Cuántos pines tiene un conector RJ45?", "opciones" => ["4", "6", "8"], "correcta" => 2],
    ["pregunta" => "¿Cuál es el estándar más común para cableado estructurado?", "opciones" => ["IEEE 802.3", "ISO/IEC 11801", "TIA/EIA-568"], "correcta" => 2],
    ["pregunta" => "¿Qué tipo de cable se usa para conectar dos computadoras directamente?", "opciones" => ["Crossover", "Straight-Through", "Coaxial"], "correcta" => 0]
];


if (isset($_GET['reiniciar'])) {
    $_SESSION['pregunta_actual'] = 0;
    $_SESSION['errores'] = 0;
    header("Location: ../views/index.php");
    exit();
}

// Si el usuario presiona "Siguiente" después de ganar
if (isset($_POST['siguiente'])) {
    $_SESSION['pregunta_actual'] = 0;
    $_SESSION['errores'] = 0;
    header("Location: ../views/index.php");
    exit();
}

// Verificar si se envió una respuesta
if (isset($_POST['respuesta'])) {
    $respuesta = (int) $_POST['respuesta'];
    $pregunta_actual = $_SESSION['pregunta_actual'];


    if ($respuesta === $preguntas[$pregunta_actual]['correcta']) {
        $_SESSION['pregunta_actual']++;
    } else {
        $_SESSION['errores']++;
    }

    if ($_SESSION['errores'] >= 3) {
        header("Location: ../views/index.php?mensaje=perdiste");
        exit();
    }

    // Si el usuario responde todas las preguntas, lo manda a "ganaste"
    if ($_SESSION['pregunta_actual'] >= count($preguntas)) {
        header("Location: ../views/index.php?mensaje=ganaste");
        exit();
    }
}

header("Location: ../views/index.php");
exit();
