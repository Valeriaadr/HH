<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical Information Form</title>
  <link rel="stylesheet" href="welcome.css">
</head>
<body>
  <<section class="container">
    <div class="container_a">
      <h1>Welcome to</h1>
      <a href="">
        <img src="img/logoH.png">
      </a>
    </div>
  </section>
  <div class="container">
    <form action="procesar_formulario.php" method="post">
      <h2 >Personal Information</h2>
      <label for="name">Name:</label>
      <input type="text" name="name" required>

      <label for="surname">Surname:</label>
      <input type="text" name="surname" required>

      <label for="birth_date">Date of Birth:</label>
      <input type="date" name="birth_date" required>

      <label for="gender">Gender:</label>
      <select name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>

      <!-- Medical History -->
      <h2>Medical History</h2>
      <label for="medical_conditions">Medical Conditions:</label>
      <input type="text" name="medical_conditions" placeholder="Separate with commas">

      <label for="height">Height (cm):</label>
      <input type="number" name="height" required>

      <label for="weight">Weight (kg):</label>
      <input type="number" name="weight" required>

      <!-- Dietary History -->
      <h2>Dietary History</h2>
      <label for="allergies">Intolerance or Allergy:</label>
      <input type="text" name="allergies" placeholder="Separate with commas">

      <label for="dietary_restrictions">Dietary Restrictions:</label>
      <input type="text" name="dietary_restrictions" placeholder="Separate with commas">

      <h2>Main Objective</h2>
      <label>
        <input type="radio" name="objective" value="lose_weight"> Lose Weight
      </label>
      <label>
        <input type="radio" name="objective" value="gain_weight"> Gain Weight
      </label>
      <label>
        <input type="radio" name="objective" value="maintain_weight"> Maintain Weight
      </label>
      <label>
        <input type="radio" name="objective" value="gain_muscle_mass"> Gain Muscle Mass
      </label>
      <label>
        <input type="radio" name="objective" value="maintain_muscle_mass"> Maintain Muscle Mass
      </label>

      <h2>Additional Comments</h2>
      
      <label for="comments">Additional Comments:</label>
      <textarea name="comments" rows="4"></textarea>

      <h2>Select Doctor</h2>

      <label for="doctor">
        <input type="radio" name="doctor" value="doctor1"> Doctor 1
      </label>
      <label for="doctor">
        <input type="radio" name="doctor" value="doctor2"> Doctor 2
      </label>

      <input type="submit" value="Submit">
    </form>
  </div>

</body>
</html>
