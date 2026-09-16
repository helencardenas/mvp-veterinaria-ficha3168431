<?php
include 'config/conexion.php';
$id = $_GET['id'];
$stmt = $conexion->prepare("DELETE FROM mascotas WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
header("Location: consultar.php");
exit;