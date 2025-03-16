<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <style>
        #escena1, #escena2, #escena4 {
            display: none;
        }
        #objfound3, #objfound4, #objfound2 {
            display: none;
        }
    </style>
    <script type="text/javascript">
        function camara1() {
            let escena1 = document.getElementById("escena1");
            let escena2 = document.getElementById("escena2");
            let escena3 = document.getElementById("escena3");
            let escena4 = document.getElementById("escena4");

            let objfound4 = document.getElementById("objfound4");
            let objfound1 = document.getElementById("objfound1");
            let objfound2 = document.getElementById("objfound2");
            let objfound3 = document.getElementById("objfound3");

            escena1.style.display = "block";
            escena2.style.display = "none";
            escena3.style.display = "none";
            escena4.style.display = "none";

            objfound4.style.display = "none";
            objfound1.style.display = "none";
            objfound2.style.display = "none";
            objfound3.style.display = "block";
        }

        function camara2() {
            let escena1 = document.getElementById("escena1");
            let escena2 = document.getElementById("escena2");
            let escena3 = document.getElementById("escena3");
            let escena4 = document.getElementById("escena4");

            let objfound4 = document.getElementById("objfound4");
            let objfound1 = document.getElementById("objfound1");
            let objfound2 = document.getElementById("objfound2");
            let objfound3 = document.getElementById("objfound3");

            escena1.style.display = "none";
            escena2.style.display = "block";
            escena3.style.display = "none";
            escena4.style.display = "none";

            objfound4.style.display = "block";
            objfound1.style.display = "none";
            objfound2.style.display = "none";
            objfound3.style.display = "none";
        }

        function camara3() {
            let escena1 = document.getElementById("escena1");
            let escena2 = document.getElementById("escena2");
            let escena3 = document.getElementById("escena3");
            let escena4 = document.getElementById("escena4");

            let objfound4 = document.getElementById("objfound4");
            let objfound1 = document.getElementById("objfound1");
            let objfound2 = document.getElementById("objfound2");
            let objfound3 = document.getElementById("objfound3");

            escena1.style.display = "none";
            escena2.style.display = "none";
            escena3.style.display = "block";
            escena4.style.display = "none";

            objfound4.style.display = "none";
            objfound1.style.display = "block";
            objfound2.style.display = "none";
            objfound3.style.display = "none";
        }

        function camara4() {
            let escena1 = document.getElementById("escena1");
            let escena2 = document.getElementById("escena2");
            let escena3 = document.getElementById("escena3");
            let escena4 = document.getElementById("escena4");

            let objfound4 = document.getElementById("objfound4");
            let objfound1 = document.getElementById("objfound1");
            let objfound2 = document.getElementById("objfound2");
            let objfound3 = document.getElementById("objfound3");

            escena1.style.display = "none";
            escena2.style.display = "none";
            escena3.style.display = "none";
            escena4.style.display = "block";

            objfound4.style.display = "none";
            objfound1.style.display = "none";
            objfound2.style.display = "block";
            objfound3.style.display = "none";
        }

    </script>
    
    <section>
    <img id="escena1" src="./img/almacenes/almacen1.jpg" width="100%" height="715px">

        <section id="retroceder">
            <a href="../index.php">
                <img src="../img/retroceder.png" height="50px" width="50px">
            </a>
        </section>

        <section id="objfound3">
            <img src="./img/objetos/objeto3.png" width="auto" height="20px">
            <b class="num">6</b>
        </section>

    <img id="escena2" src="./img/almacenes/almacen2.jpg" width="100%" height="715px">

        <section id="retroceder">
            <a href="../index.php">
                <img src="../img/retroceder.png" height="50px" width="50px">
            </a>
        </section>

        <section id="objfound4">
            <img src="./img/objetos/objeto4.png" width="auto" height="20px">
            <b class="num">2</b>
        </section>

    <img id="escena3" src="./img/almacenes/almacen3.jpg" width="100%" height="715px">

        <section id="retroceder">
            <a href="../index.php">
                <img src="../img/retroceder.png" height="50px" width="50px">
            </a>
        </section>

        <section id="objfound1">
            <img src="./img/objetos/objeto1.png" width="auto" height="20px">
            <b class="num">7</b>
        </section>

    <img id="escena4" src="./img/almacenes/almacen4.jpg" width="100%" height="715px">

        <section id="retroceder">
            <a href="../index.php">
                <img src="../img/retroceder.png" height="50px" width="50px">
            </a>
        </section>

        <section id="objfound2">
            <img src="./img/objetos/objeto2.png" width="auto" height="20px">
            <b class="num">1</b>
        </section>

        <section class="notas">
            <article class="notas_base">
                <h2>Notas</h2>
                <textarea></textarea>
            </article>
            
        </section>

        <section id="list_objetos">
            <table>
                <tr>
                    <td class="objeto">
                        <img src="./img/objetos/objeto1.png" width="auto" height="60px">
                        <b>1</b>
                    </td>
                    
                    <td class="objeto">
                        <img src="./img/objetos/objeto2.png" width="auto" height="60px">
                        <b>2</b>
                    </td>
                </tr>

                <tr>
                    <td class="objeto">
                        <img src="./img/objetos/objeto3.png" width="auto" height="60px">
                        <b>3</b>
                    </td>
                
                    <td class="objeto">
                        <img src="./img/objetos/objeto4.png" width="auto" height="60px">
                        <b>4</b>
                    </td>
                </tr>
            </table>
        </section>
        </section>
        <section id="cams1_2">
            <table>
                <tr>
                    <td>
                        <br>
                        <form id="camara1" onsubmit="return false">
                            <input type="submit" onclick="camara1()" value="Cámara 1">
                        </form>
                    </td>
                </tr>
                    
                <tr>
                    <td>
                        <form id="camara2" onsubmit="return false" >
                            <input type="submit" onclick="camara2()" value="Cámara 2">
                        </form>
                    </td>
                </tr>
            </table>
        </section>
        <form action="../proc/res.proc.php" method="post">
            <section id="code">
                <table>
                    <tr>
                        <td id="contraseña">
                            <input type="number" name="contra1" placeholder="Dígito aquí...">
                            <input type="number" name="contra2" placeholder="Dígito aquí...">
                            <input type="number" name="contra3" placeholder="Dígito aquí...">
                            <input type="number" name="contra4" placeholder="Dígito aquí...">
                            <br>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <input type="submit" name="send" value="Validar código">
                        </td>
                    </tr>
                </table>
            </section>
        </form>
        <section id="cams3_4">
            <table>
                <tr>
                    <td>
                        <br>
                        <form id="camara3" onsubmit="return false">
                            <input type="submit" onclick="camara3()" value="Cámara 3">
                        </form>
                    </td>
                </tr>
                    
                <tr>
                    <td>
                        <form id="camara4" onsubmit="return false">
                            <input type="submit" onclick="camara4()" value="Cámara 4">
                        </form>
                    </td>
                </tr>
            </table>
        </section>
    </section>
</body>
</html>