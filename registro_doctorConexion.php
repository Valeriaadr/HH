<?php
$conn = new mysqli('localhost', 'root', '', 'healthyhubb');

if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

$correo = $conn->real_escape_string($_POST['correo']);
$contrasena = $_POST['contrasena'];
$cedula_profesional = $_POST['cedula_profesional'];

$role = 'doctor';

$sql = "SELECT MAX(id) as max_id FROM users WHERE role = 'pacient'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $max_id = $row['max_id'];
} else {
    $max_id = 0;
}

$next_id = $max_id + 1;

$sql_insert = "INSERT INTO users (role, correo, contrasena, cedula_profesional) VALUES ('$role', '$correo', '$contrasena', '$cedula_profesional')";

if ($conn->query($sql_insert) === true) {
    echo "Doctor registrado correctamente";
    header("Location: homeDr.html");
    exit();
} else {
    echo "Error al registrar el doctor: " . $conn->error;
}

$conn->close();
?>
