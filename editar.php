<?php
include 'config/conexion.php';

// 1. Recibir el id por la URL y consultar la fila
$id = $_GET['id'];
$stmt = $conexion->prepare("SELECT * FROM mascotas WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
$fila = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Mascota</title>
</head>
<body>

    <h2>Editar Mascota</h2>

    <!-- Formulario precargado con los valores actuales -->
    <form method="POST" action="actualizar.php">
        
        <!-- Input oculto para llevar el ID -->
        <input type="hidden" name="id" value="<?= $fila['id'] ?>">

        <label>Nombre: 
            <input type="text" name="nombre" value="<?= htmlspecialchars($fila['nombre']) ?>" required>
        </label><br><br>

        <label>Especie: 
            <input type="text" name="especie" value="<?= htmlspecialchars($fila['especie']) ?>" required>
        </label><br><br>

        <label>Dueño: 
            <input type="text" name="dueno" value="<?= htmlspecialchars($fila['dueno']) ?>" required>
        </label><br><br>

        <label>Edad: 
            <input type="number" name="edad" value="<?= htmlspecialchars($fila['edad']) ?>" required>
        </label><br><br>

        <label>Fecha consulta: 
            <input type="date" name="fecha_consulta" value="<?= htmlspecialchars($fila['fecha_consulta']) ?>" required>
        </label><br><br>

        <button type="submit">Actualizar</button>
    </form>

    <br>
    <a href="consultar.php">Cancelar</a>

</body>
</html>