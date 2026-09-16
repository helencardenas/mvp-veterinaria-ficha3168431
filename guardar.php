<?php
include 'config/conexion.php';

$nombre = $_POST["nombre"];
$especie = $_POST["especie"];
$dueno = $_POST["dueno"];
$edad = $_POST["edad"];
$fecha_consulta = $_POST["fecha_consulta"];

$stmt = $conexion->prepare("INSERT INTO mascotas (nombre, especie, dueno, edad, fecha_consulta) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssis", $nombre, $especie, $dueno, $edad, $fecha_consulta);
$stmt->execute();

header("Location: consultar.php");
exit;