<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Mascota</title>
</head>
<body>
    <h2>Registrar Nueva Mascota</h2>
    
    <form method="POST" action="guardar.php">
        <label>
            Nombre:
            <input type="text" name="nombre" required>
        </label>
        <br><br>

        <label>
            Especie:
            <input type="text" name="especie" required>
        </label>
        <br><br>

        <label>
            Dueño:
            <input type="text" name="dueno" required>
        </label>
        <br><br>

        <label>
            Edad:
            <input type="number" name="edad" required>
        </label>
        <br><br>

        <label>
            Fecha consulta:
            <input type="date" name="fecha_consulta" required>
        </label>
        <br><br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="consultar.php">Ver lista de mascotas</a>
</body>
</html>