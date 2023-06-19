<!DOCTYPE html>
<html>
<head>
  <title>Inicio de Sesión</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #87cefa; /* Color de fondo azul claro */
      padding: 20px;
      color: #333333; /* Color de texto */
    }

    h1 {
      text-align: left; /* Alineación del título a la izquierda */
    }

    form {
      background-color: #ffffff;
      border: 1px solid #cccccc;
      padding: 20px;
      max-width: 300px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 10px;
      text-align: left; /* Alineación de las etiquetas a la izquierda */
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 5px;
      border: 1px solid #cccccc;
    }

    input[type="submit"],
    button {
      background-color: #ff7f50; /* Color del botón */
      color: #ffffff;
      padding: 10px 15px;
      border: none;
      cursor: pointer;
      margin-top: 10px;
      width: 100%; /* Ancho completo del botón */
    }

    input[type="submit"]:hover,
    button:hover {
      background-color: #ff6347; /* Color del botón al pasar el cursor */
    }
  </style>
</head>
<body>
  <h1>Iniciar Sesión en la API</h1>

  <form method="POST" action="login.php">
    <label for="username">Nombre de usuario:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" name="submit" value="Log in"><br>
	<button onclick="window.location.href='registro.php'">Log Up</button>
  </form><br>

</body>
</html>
