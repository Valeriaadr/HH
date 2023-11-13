<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create Account Client</title>
  <link rel="stylesheet" href="css\createAccount_style.css"/>
</head>
<body>
  <section class="recuadro">
    <div class="form-container">
        <form action="registro_pacienteConexion.php" method="post" class="form">
            <h1 class="title">Create Account</h1>

            <input type="email"     name="correo"                 placeholder="Email"            class="input" required>
            <input type="password"  name="contrasena"             placeholder="Password"         class="input" required>
            <input type="password"  name="confirmar_contrasena"   placeholder="Confirm Password" class="input" required>
            <div class="buttons">
                <button type="submit">Create Account</button>
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


