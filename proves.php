<!DOCTYPE html>
<html>
<head>
    <title>Búsqueda API - Personajes de la serie</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2; /* Cambiar el color de fondo a gris claro */
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .welcome-message {
            margin-bottom: 10px;
            font-weight: bold;
        }

        .logout-link {
            color: blue;
            text-decoration: underline;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="submit"] {
            width: 100%;
            padding: 12px; /* Aumentar el tamaño del buscador */
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="submit"] {
            background-color: #ff7f50; /* Cambiar el color del botón */
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Búsqueda API - Personajes de la serie</h2>
        <?php
        session_start();


        if (!isset($_SESSION['username'])) {
            header('Location: index.php'); 
            exit();
        }
        ?>
        <div class="welcome-message">
            <?php echo "Welcome, " . $_SESSION['username'] . "!"; ?> <a class="logout-link" href="logout.php">Salir</a>
        </div>
        <form method="GET" action="character_details.php">
            <div class="form-group">
                <label for="query">Buscar:</label>
                <input type="text" id="query" name="query" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Buscar">
            </div>
        </form>
    </div>
</body>
</html>
