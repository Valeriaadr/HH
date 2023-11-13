<?php
$conn = new mysqli('localhost', 'root', '', 'healthyhubb');

if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

$correo = $conn->real_escape_string($_POST['correo']);
$contrasena = $_POST['contrasena'];

$role = 'paciente';

$sql = "SELECT MAX(id) as max_id FROM users WHERE role = 'doctor'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $max_id = $row['max_id'];
} else {
    $max_id = 0;
}

$next_id = $max_id + 1;

$sql_insert = "INSERT INTO users (role, correo, contrasena, cedula_profesional) VALUES ('$role', '$correo', '$contrasena', NULL)";

if ($conn->query($sql_insert) === true) {
    // Captura el ID del usuario recién insertado
    $user_id = $conn->insert_id;

    // Guarda el ID del usuario en la sesión
    session_start();
    $_SESSION['user_id'] = $user_id;

    header("Location: welcome.php");  
    exit();
} else {
    echo "Error al registrar el paciente: " . $conn->error;
}

$conn->close();
?>


