<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Crear Nueva Comida</title>
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
 $tar_codigo = isset($_POST["tar_codigo"]) ? trim($_POST["tar_codigo"]) : null;
 $sql = "SELECT tar_nombre, tar_codigo from tarjeta where tar_numero = '$tar_codigo'";
$result = $conn->query($sql);
$variable = mysqli_fetch_array($result);
$cliente=$variable[0];
$codigo=$variable[1];


 //$sql1 = "SELECT tar_codigo from tarjeta where tar_numero = '$codigo'";
 //$result = $conn->query($sql);
 //$result1 = $conn->query($sql1);

 
 //$variable1 = mysqli_fetch_array($result1);

 //$tar_codigo=$variable[0];
 //$ped_cliente=$variable[1];
//Cliente

 //$ped_numero = isset($_POST["ped_numero"]) ? trim($_POST["ped_numero"]) : null;
 $ped_fecha = isset($_POST["ped_fecha"]) ? mb_strtoupper(trim($_POST["ped_fecha"]), 'UTF-8') : null;
 //$ped_cliente = isset($_POST["ped_cliente"]) ? mb_strtoupper(trim($_POST["ped_cliente"]), 'UTF-8') : null;
 $ped_total = isset($_POST["ped_total"]) ? trim($_POST["ped_total"]): null;
 $ped_observaciones = isset($_POST["ped_observaciones"]) ? mb_strtoupper(trim($_POST["ped_observaciones"]), 'UTF-8') : null;
 //$tar_codigo = isset($_POST["tar_codigo"]) ? trim($_POST["tar_codigo"]): null;
 $sql2 = "SELECT ped_codigo from pedido ORDER BY ped_codigo DESC";
 $r = $conn->query($sql2);
 $v = mysqli_fetch_array($r);
 $ped_codig=$v[0];
 $vari=1;
 $suma=$ped_codig+$vari;
 //$fechaNacimiento = isset($_POST["fechaNacimiento"]) ? trim($_POST["fechaNacimiento"]): null;
 //$contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;

 $sql = "INSERT INTO pedido VALUES (0, '$suma', '$ped_fecha', '$cliente', '$ped_total', '$ped_observaciones',
'$codigo')";
 if ($conn->query($sql) === TRUE) {
 echo "<p>Se ha creado el pedido satisfactoriamente!!!</p>";
 //echo $variable[0];
 //$tar_codigo = isset($_POST["tar_codigo"]) ? trim($_POST["tar_codigo"]) : null;
 $sql1 = "SELECT ped_codigo from pedido ORDER BY ped_codigo DESC";
$res = $conn->query($sql1);
$var = mysqli_fetch_array($res);
$ped_codigo=$var[0];


 $com_nombre = isset($_POST["com_nombre"]) ? mb_strtoupper(trim($_POST["com_nombre"]), 'UTF-8') : null;
 $com_precio_unit = isset($_POST["com_precio_unit"]) ? mb_strtoupper(trim($_POST["com_precio_unit"]), 'UTF-8') : null;
 //$ped_codigo = isset($_POST["ped_codigo"]) ? mb_strtoupper(trim($_POST["ped_codigo"]), 'UTF-8') : null;
 //$ped_total = isset($_POST["ped_total"]) ? trim($_POST["ped_total"]): null;
 //$ped_observaciones = isset($_POST["ped_observaciones"]) ? mb_strtoupper(trim($_POST["ped_observaciones"]), 'UTF-8') : null;
 //$tar_codigo = isset($_POST["tar_codigo"]) ? trim($_POST["tar_codigo"]): null;

 //$fechaNacimiento = isset($_POST["fechaNacimiento"]) ? trim($_POST["fechaNacimiento"]): null;
 //$contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;
 $sql = "INSERT INTO comida VALUES (0, '$com_nombre', '$com_precio_unit', '$ped_codigo')";
 if ($conn->query($sql) === TRUE) {
 echo "<p>Se ha creado la comida satisfactoriamente!!!</p>";
 } else {
 if($conn->errno == 1062){
 echo "<p class='error'>La persona con la cedula $cedula ya esta registrada en el sistema </p>";
 }else{
 echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
 }
 }

 //cerrar la base de datos
 
 echo "<a href='../vista/crear_usuario.html'>Regresar</a>";
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