<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
    // Si no ha iniciado sesión, redirigir a la página de inicio de sesión
    header("Location: login.php");
    exit();
}

// Establecer la conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'healthyhubb');

// Verificar la conexión
if ($conn->connect_error) {
    die("Error connecting to the database: " . $conn->connect_error);
}

// Agrega este código PHP para recuperar la información del usuario
$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM user_information WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) 
    $row = $result->fetch_assoc();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\profile_user.css">
    <title>Document</title>
</head>
<body>
    <header class="header">  
        <div class="home">
            <a>Home</a>
        </div>
        <div class="logo">
            <a href="homeCl.html">
                <img src="img\logoH.png">
            </a>
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
        <div class="b">
            <h1>Weight</h1>
            <h1>Heightt</h1>
            <h1>IMC</h1>
        </div>
        <div class="c">
            <textarea>
                Description
            </textarea>
        </div>
    </section>
    <a href="delateAccount.html">
        <button>
            <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
                <path
                    d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z">
                </path>
            </svg>
            <span>Delate Account</span>
        </button>
    </a>
    <section class="contenedor">
        <div class="a">
            <h1>Your Appointments</h1>
            <table>
                <tr>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>M/D/Y </td>
                    <td>Finalizada</td>
                </tr>
                <tr>
                    <td>M/D/Y </td>
                    <td>Finalizada</td>
                </tr>
                <tr>
                    <td>M/D/Y </td>
                    <td>Finalizada</td>
                </tr>
            </table>
        </div>

        <div class="b">
            <h1>DON’T FORGET UPLOAD YOUR PROGRESS</h1>
             <div class="buttons">
                <a href="weeklyRegister.html">
                    <button>WEEKLY REGISTER</button>
                </a>
            </div>
        </div>

        <div class="c">
            <img src="img/mujer.png"> 
            <h1>My name is:</h1>
        </div>
    </section>
</body>
</html>
