<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Crear Nuevo Usuario</title>
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
        $pedido = isset($_POST["pedido"]) ? trim($_POST["pedido"]) : null;
        $sql = "SELECT tar_nombre from tarjeta where tar_numero = '$pedido'";
        $result = $conn->query($sql);
        $variable = mysqli_fetch_array($result);
        $cliente=$variable[0];
        //$cliente = isset($_POST["cliente"]) ? trim($_POST["cliente"]) : null;
        $numero = isset($_POST["numero"]) ? trim($_POST["numero"]) : null;
        $fecha = isset($_POST["fecha"]) ? trim($_POST["fecha"]) : null;
        $total = isset($_POST["total"]) ? trim($_POST["total"]) : null;
        $observaciones = isset($_POST["observaciones"]) ? trim($_POST["observaciones"]): null;
        $sql = "INSERT INTO pedido VALUES (0, '$numero', '$fecha', '$cliente', '$total', '$observaciones','1')";
        
            if ($conn->query($sql) === TRUE) {
                echo "<p>Se ha creado los datos personales correctamemte!!!</p>";
                echo $variable[0];
            } else {
                if($conn->errno == 1062){
                    echo "<p class='error'>La persona con la cedula $cedula ya esta registrada en el sistema </p>";
                }else{
                    echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
                }
            }
 //cerrar la base de datos
            $conn->close();
            /*echo "<a href='../vista/crear_usuario.html'>Regresar</a>";*/

        ?>
</body>
</html>