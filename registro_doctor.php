<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create Account Doctor</title>
  <link rel="stylesheet" href="css\createAccount_style.css"/>
</head>
<body>
  <section class="recuadro">
    <div class="form-container">
        <form action="registro_doctorConexion.php" method="post" class="form">
            <h1 class="title">Create Account</h1>
            <input placeholder="Email"              class="input" type="email"      name="correo" required>
            <input placeholder="Password"           class="input" type="password"   name="contrasena" required>
            <input placeholder="Confirm Password"   class="input" type="password"   name="confirmar_contrasena" required>
            <input placeholder="Professional ID"    class="input" type="text"       name="cedula_profesional" required>
            <div class="buttons">
                <button type="submit" >Create Account</button>
            </div>
        </form>
    </div>

    <div class="contenedor">
        <h1>Welcome</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit quaerat rerum architecto, voluptatem
            tempora eveniet, rem vitae aliquam nobis molestiae modi inventore accusantium eius possimus consequatur
            ducimus! Nisi, aliquam asperiores.</p>
    </div>
  </section>
</body>
</html>


