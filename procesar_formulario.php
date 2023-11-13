<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $conn = new mysqli('localhost', 'root', '', 'healthyhubb');
    
    if ($conn->connect_error) {
        die("Error connecting to the database: " . $conn->connect_error);
    }
    
    // Get the user ID from the session (adjust this according to your logic)
    session_start();
    $user_id = $_SESSION['user_id']; 

    // Get form data
    $name = $_POST['name'];
    $lastname = $_POST['surname'];
    $date_of_birth = $_POST['birth_date'];
    $gender = $_POST['gender'];
    $medical_conditions = $_POST['medical_conditions'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $allergy_intolerance = $_POST['allergies'];
    $dietary_restrictions = $_POST['dietary_restrictions'];
    $goal = $_POST['objective'];
    $additional_comments = $_POST['comments'];
    $chosen_doctor = $_POST['doctor'];

   
    $sql = "INSERT INTO user_information (user_id, name, last_name, date_of_birth, gender, medical_conditions, height, weight, allergy_intolerance, dietary_restrictions, goal, additional_comments, chosen_doctor) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("isssssiisssss", $user_id, $name, $lastname, $date_of_birth, $gender, $medical_conditions, $height, $weight, $allergy_intolerance, $dietary_restrictions, $goal, $additional_comments, $chosen_doctor);

   
    
    if ($stmt->execute()) {
        // Registration successful, redirect to another page
        header("Location: homeCl.php");
        exit();
    } else {
        echo "Error registering information: " . $stmt->error;
    }

    
    $stmt->close();
    $conn->close();
} else {
    
    header("Location: welcome.php");
    exit();
}
?>
>>>
