<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Crear Nuevo Pedido</title>
 <style type="text/css" rel="stylesheet">
 .error{
 color: red;
 }
 </style>
</head>
<body>
 <?php
 //incluir conexión a la base de datos
 include '../../config/conexionBD.php';
 $ped_numero = isset($_POST["ped_numero"]) ? trim($_POST["ped_numero"]) : null;
 $ped_fecha = isset($_POST["ped_fecha"]) ? mb_strtoupper(trim($_POST["ped_fecha"]), 'UTF-8') : null;
 $ped_cliente = isset($_POST["ped_cliente"]) ? mb_strtoupper(trim($_POST["ped_cliente"]), 'UTF-8') : null;
 $ped_total = isset($_POST["ped_total"]) ? trim($_POST["ped_total"]): null;
 $ped_observaciones = isset($_POST["ped_observaciones"]) ? mb_strtoupper(trim($_POST["ped_observaciones"]), 'UTF-8') : null;
 $tar_codigo = isset($_POST["tar_codigo"]) ? trim($_POST["tar_codigo"]): null;

 //$fechaNacimiento = isset($_POST["fechaNacimiento"]) ? trim($_POST["fechaNacimiento"]): null;
 //$contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;
 $sql = "INSERT INTO pedido VALUES (0, '$ped_numero', '$ped_fecha', '$ped_cliente', '$ped_total', '$ped_observaciones',
'$tar_codigo')";
 if ($conn->query($sql) === TRUE) {
 echo "<p>Se ha creado el pedido satisfactoriamente!!!</p>";
 } else {
 if($conn->errno == 1062){
 echo "<p class='error'>La persona con la cedula $cedula ya esta registrada en el sistema </p>";
 }else{
 echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
 }
 }

 //cerrar la base de datos
 $conn->close();
 echo "<a href='../vista/crear_usuario.html'>Regresar</a>";

 ?>
</body>
</html>