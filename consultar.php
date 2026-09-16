<?php
// Incluir la conexión a la base de datos
include 'config/conexion.php';

// Consultar todos los registros ordenados del más reciente al más antiguo
$resultado = $conexion->query("SELECT * FROM mascotas ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consultar Mascotas</title>
</head>
<body>

    <h2>Lista de Mascotas Registradas</h2>

    <p>
        <a href="registrar.php">+ Registrar nueva mascota</a>
    </p>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Dueño</th>
            <th>Edad</th>
            <th>Fecha Consulta</th>
            <th>Acciones</th>
        </tr>

        <?php while ($fila = $resultado->fetch_assoc()): ?>
        <tr>
            <!-- Uso obligatorio de htmlspecialchars para seguridad -->
            <td><?= htmlspecialchars($fila["nombre"]) ?></td>
            <td><?= htmlspecialchars($fila["especie"]) ?></td>
            <td><?= htmlspecialchars($fila["dueno"]) ?></td>
            <td><?= htmlspecialchars($fila["edad"]) ?></td>
            <td><?= htmlspecialchars($fila["fecha_consulta"]) ?></td>
            <td>
                <!-- Enlace para ir a editar.php pasando el ID -->
                <a href="editar.php?id=<?= $fila['id'] ?>">Editar</a> | 
                
                <!-- Enlace para eliminar con confirmación previa en JavaScript -->
                <a href="eliminar.php?id=<?= $fila['id'] ?>" 
                   onclick="return confirm('¿Seguro que quieres eliminar este registro?')">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

</body>
</html>