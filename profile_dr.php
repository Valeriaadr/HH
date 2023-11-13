<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
    // Si no ha iniciado sesión, redirigir a la página de inicio de sesión
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\profile_dr.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Profile Dr.</title>
</head>
<body>
    <header class="header">  
        <div class="home">
            <a>Home</a>
        </div>
        <div class="logo">
            <img src="img\logoH.png">  
        </div>
    </header>

    <section class="dates">
        <img src="img/mujer.png">
        <div class="a">
            <h1>Name</h1>
            <h1>Email</h1>
            <h1>Birthday</h1>
            <h1>Old</h1>
        </div>
        <div class="c">
            <h1>In this box you will add what you want the user to see about you
                Don't forget to add your experience.</h1>
            <p>

            </p>
        </div>
    </section>

    <section class="contenedor">
        <div class="a">
            <h1>Your Membership</h1>
            <p>When I start within Healthy Hubb</p>
        </div>
        <div class="buttons">
                <a href="logIn.html">
                    <button>Upload</button>
                </a>
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