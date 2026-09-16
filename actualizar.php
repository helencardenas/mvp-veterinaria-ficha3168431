<?php
include 'config/conexion.php';

$nombre = $_POST["nombre"];
$especie = $_POST["especie"];
$dueno = $_POST["dueno"];
$edad = $_POST["edad"];
$fecha_consulta = $_POST["fecha_consulta"];
$id = $_POST['id'];

$stmt = $conexion->prepare("UPDATE mascotas SET nombre = ?, especie = ?, dueno = ?, edad = ?, fecha_consulta = ? WHERE id = ?");
$stmt->bind_param("sssisi", $nombre, $especie, $dueno, $edad, $fecha_consulta, $id);
$stmt->execute();

header("Location: consultar.php");
exit;