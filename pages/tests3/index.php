<?php
session_start();

// Diálogos
$dialogos = [
    "Hola, ¿Cómo te ha ido hoy?",
    "Hola, Todo bien, gracias. ¿Y tú? ¿Cómo va el día?",
    "Ha sido un poco agitado. Justo ahora hay un problema en el departamento 13.",
    "¿En serio? ¿Qué pasó?",
    "Parece que hay un fallo en el cableado y el servidor dejó de funcionar.",
    "Uff, eso es grave. Voy a revisarlo."
];

// Inicializar sesión si no existe
if (!isset($_SESSION['dialogo'])) {
    $_SESSION['dialogo'] = 0;
}

// Avanzar el diálogo solo si el usuario hace clic en "Siguiente"
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["accion"])) {
    if ($_POST["accion"] == "siguiente") {
        $_SESSION['dialogo']++;

        // Si llega al final, no incrementar más
        if ($_SESSION['dialogo'] >= count($dialogos)) {
            $_SESSION['dialogo'] = count($dialogos) - 1;
        }
    }
}

// Obtener el diálogo actual
$dialogoActual = $dialogos[$_SESSION['dialogo']];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diálogo Interactivo</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="escena">
        <div class="personajes">
            <div class="personaje">
                <p class="etiqueta">Técnico</p>
                <div class="empleado"></div>
            </div>
            <div class="personaje">
                <p class="etiqueta">Supervisor</p>
                <div class="companero"></div>
            </div>
        </div>

        <div class="contenedor-dialogo">
            <div class="caja-dialogo">
                <p id="texto-dialogo"><?= htmlspecialchars($dialogoActual); ?></p>
            </div>

            <form method="post" class="botones">
                <?php if ($_SESSION['dialogo'] < count($dialogos) - 1): ?>

                    
                    <button type="submit" name="accion" value="siguiente" class="boton azul">Siguiente</button>
                <?php else: ?>
                    <a href="./views/sala_servidor.php" class="boton azul">Ir a revisar el servidor</a>
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>
</html>
