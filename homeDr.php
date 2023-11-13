<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
    // Si no ha iniciado sesión, redirigir a la página de inicio de sesión
    header("Location: login.php");
    exit();
}

echo "Bienvenido, " . $_SESSION['username'] . "!";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr Home</title>
    <link rel="stylesheet" href="css\homeDr.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="img\logoH.png">
        </div>
        <div class="perfil">
            <img class="message" src="img/mens.png">
            <a href="logIn.html">
                <img src="img\mujer.png">
            </a>
        </div>
    </header>
    <!--Segunda Parte-->
    <div class="contenedor">
        <img class="imagen-fondo" src="img\fondoDr.jpeg">
        <div class="texto">
            <h1>Your expertise and dedication are changing lives every day!</h1>
            <h1>Keep making a difference in your patients' health</h1>
        </div>
    </div>
    <section class="dos">
        <h1>Send your recommendations for diets and products</h1>
        <div class="buttons">
            <a href="logIn.html">
                <button>Click here</button>
            </a>
        </div>
    </section>


        <div class="cita">
            <h1>Manage your appointments here</h1>
        </div>
    </section>
    
    <section class="pacients">
        <div class="pacients_a">
            <h1>Your patients </h1>
        </div>
        <h2>Don’t forget check his prgogress and communicaty with your pacients</h2>
        <div class="lista">
            <div>Valeria Andrade</div>
            <div>Alan Ramos</div>
        </div>
    </section>

    
    <section class="contenedor_u">
        <div class="tema">
            <h2>CONTACT US</h2>
            <p>Have questions or need assistance? Feel free to reach out to us at</p>
        </div>
        <ul>
            <a href="https://www.facebook.com/" target="_blank">
                <li style="--1:#ff0000;--j:rgb(246, 202, 202);">
                    <span class="icon"><i class="fa fa-envelope-o"></i></span>
                    <span class="titulo">Email</span>
                    <link href="www.facebook.com">
                </li>
            </a>
        </ul>
    </section>

</body>
</html>