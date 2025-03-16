<?php
session_start();

// Definir las preguntas
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

// Inicializar sesión si es la primera vez
if (!isset($_SESSION['pregunta_actual'])) $_SESSION['pregunta_actual'] = 0;
if (!isset($_SESSION['errores'])) $_SESSION['errores'] = 0;

$pregunta_actual = $_SESSION['pregunta_actual'];
$errores = $_SESSION['errores'];
$mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : null;

// Obtener la pregunta actual
$pregunta = $preguntas[$pregunta_actual] ?? null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reparación de cableado de red</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <h1 id="titulo">Reparación de cableado de red</h1>
    <h3 id="errores">Errores: <?= $errores ?>/3</h3>

    <div class="container">
        <img src="../img/fondo_izquierda.png" alt="Imagen Izquierda" class="imagen_izquierda">
        <img src="../img/fondo_derecha.png" alt="Imagen Derecha" class="imagen_derecha">
    </div>


    <div id="prueba">
        <?php if ($mensaje === "perdiste"): ?>


            <h2 id="resp">¡Has cometido demasiados errores! Se reiniciará automáticamente.</h2>
            <script>
                setTimeout(() => { window.location.href = "../proc/funcionamiento.php?reiniciar=1"; }, 3000);
            </script>
        



        <?php elseif ($mensaje === "ganaste"): ?>
            <h2 id="resp">¡Has arreglado correctamente el cableado!</h2>
            <form method="POST" action="../../../index.php">
                <button type="submit" name="siguiente" class="resp">Continuar </button>
            </form>




        

        <?php elseif ($pregunta): ?>
            <div id="pregunta">
                <h2><?= $pregunta['pregunta'] ?></h2>
                <form method="POST" action="../proc/funcionamiento.php">

                    <?php foreach ($pregunta['opciones'] as $index => $opcion) : ?>
                        
                        <button type="submit" name="respuesta" value="<?= $index ?>" class="resp"><?= $opcion ?></button>
                    <?php endforeach; ?>
                </form>
            </div>
        <?php endif; ?>
    </div>






    <div id="cont2">
        <img src="../img/colores.png" alt="Imagen Izquierda" class="imagen_colores">
        <img src="../img/colores.png" alt="Imagen Derecha" class="imagen_colores">
    </div>

</body>
</html>
