<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli('localhost', 'root', '', 'healthyhubb');

    if ($conn->connect_error) {
        die("Error al conectar con la base de datos: " . $conn->connect_error);
    }

    $role = $_POST['role'];
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT id FROM users WHERE correo = '$email' AND contrasena = '$password' AND role = '$role'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['role'] = $role;

        // Redirigir según el tipo de usuario
        if ($role === 'paciente') {
            header("Location: homeCl.php");
        } elseif ($role === 'doctor') {
            header("Location: homeDr.php");
        } else {
            // Tipo de usuario no reconocido, manejar según tus necesidades
            echo "Tipo de usuario no reconocido.";
        }

        exit();
    } else {
        echo "Credenciales incorrectas. Inténtalo de nuevo.";
    }

    $conn->close();
}
?>
