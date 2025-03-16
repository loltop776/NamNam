<?php
session_start();

// Si el usuario intenta acceder sin sesión, redirigir a hack.php
if (!isset($_SESSION['dialogo'])) {
    header("Location: ./proc/hack.php");
    exit();
}


$dialogos = [
    "Bienvenido al centro de servidores.",
    "Al parecer deberé de solucionar este problema, sinó la página web de la empresa no podrá vender nada."
];


if (!isset($_SESSION['dialogo']) || $_SESSION['dialogo'] >= count($dialogos)) {
    $_SESSION['dialogo'] = 0;
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["accion"]) && $_POST["accion"] == "siguiente") {
    $_SESSION['dialogo'] = min($_SESSION['dialogo'] + 1, count($dialogos) - 1);
}

// Obtener el diálogo actual
$dialogoActual = $dialogos[$_SESSION['dialogo']] ?? "Error: diálogo no disponible.";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Reparación de Cableado</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="escena2">
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
                    <a href="./index.php" class="boton azul">Reparar cableado</a>
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>
</html>
