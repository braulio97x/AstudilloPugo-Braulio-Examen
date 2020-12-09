<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="CSS/estilo.css" type="text/css" media="screen">
 <title>Generar Pedido</title>
</head>
<body id="cuerpo1">
    <nav class="menu">
        <ul> 
            <li><a href="login.html">Login</a></li>
           <li><a href="crear_usuario.html">Crear Usuario</a></li>
           <li><a href="cedula.html">Buscar por cedula</a></li>

        </ul>
        
     </nav>    
    <header class="encabezado">
        <h1>Pedido</h1>
    </header>
 <form id="formulario01" method="POST" action="../controladores/crear_usuario.php" >
 <label for="ped_numero">N de Pedido (*)</label>
 <input class="campos" type="text" id="ped_numero" name="ped_numero" value="" placeholder="Ingrese el número de cedula ..."
required/>
 <br>
 <label for="ped_fecha">fecha (*)</label>
 <input class="campos" type="date" id="ped_fecha" name="ped_fecha" value="" placeholder="Ingrese su
fecha de nacimiento ..." required/>
 <br>
 <label for="ped_cliente">Cliente (*)</label>
 <input class="campos" type="text" id="ped_cliente" name="ped_cliente" value="" placeholder="Ingrese sus dos apellidos
..." required/>
 <br>
 <label for="ped_total">Total (*)</label>
 <input class="campos" type="text" id="ped_total" name="ped_total" value="" placeholder="Ingrese su dirección ..."
required/>
 <br>
 <label for="ped_observaciones">Observaciones (*)</label>
 <input class="campos" type="text" id="ped_observaciones" name="ped_observaciones" value="" placeholder="Ingrese su número telefónico
..." required/>
 <br>
 <label for="tar_codigo">Codigo de la Tarjeta (*)</label>
 <input class="campos" type="text" id="tar_codigo" name="tar_codigo" value="" placeholder="Ingrese sus dos nombres
 ..." required/>
 <br>
 <!--<label for="correo">Correo electrónico (*)</label>
 <input class="campos"  type="email" id="correo" name="correo" value="" placeholder="Ingrese su correo electrónico
..." required/>
 <br>
 <label for="correo">Contraseña (*)</label>
 <input class="campos" type="password" id="contrasena" name="contrasena" value="" placeholder="Ingrese su
contraseña ..." required/>
 -->
 <br>
 <br>
 <br>
 <input class="boton1" type="submit" id="crear" name="crear" value="Aceptar" />
 <input class="boton1" type="reset" id="cancelar" name="cancelar" value="Cancelar" />
 </form> 
</body>
</html>