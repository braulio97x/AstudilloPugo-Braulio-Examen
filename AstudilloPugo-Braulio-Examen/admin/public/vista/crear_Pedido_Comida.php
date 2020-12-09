<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="CSS/estilo.css" type="text/css" media="screen">
 <script type="text/javascript" src="JavaScript/total.js"></script>
 <title>Generar Pedido</title>
</head>
<body id="cuerpo1">
    <nav class="menu">
        <ul> 
                <li><a href="crear_Pedido_Comida.php">Crear Pedido</a></li>
                <li><a href="buscar_tarjeta.html">Buscar Tarjeta</a></li>
                <li><a href="listar.html">Buscar Pedido</a></li>

        </ul>
        
     </nav>    
    <header class="encabezado">
        <h1>Pedido</h1>
    </header>
 <form id="formulario01" method="POST"  action="../controladores/crear_comida.php">
 <!-- 
 <label for="ped_numero">N de Pedido (*)</label>
 <input class="campos" type="text" id="ped_numero" name="ped_numero" value="" placeholder="Ingrese el número de cedula ..."
required/>
 <br>
 --->
 <label for="ped_fecha">fecha (*)</label>
 <input class="campos" type="date" id="ped_fecha" name="ped_fecha" value="" placeholder="Ingrese la fecha..." required/>
<!-- 
<br>
 <label for="ped_cliente">Cliente (*)</label>
 <input class="campos" type="text" id="ped_cliente" name="ped_cliente" value="" placeholder="Ingrese sus dos apellidos
..." required/>
--->
 
 

 <br>
 <label for="com_nombre">Seleccione la comida:</label>

<select class="campos" id="com_nombre" name="com_nombre">
  <option id="com_nombre" name="com_nombre" value="SALCHIPAPA">SALCHIPAPA</option>
  <option id="com_nombre" name="com_nombre" value="GUATITA">GUATITA</option>
  <option id="com_nombre" name="com_nombre" value="BANDERA">BANDERA</option>
  <option id="com_nombre" name="com_nombre" value="BROSTER">BROSTER</option>
</select>
<br>
 <!-- 
 <label for="com_nombre">Nombre de la comida (*)</label>
 <input class="campos" type="text" id="com_nombre" name="com_nombre" value="" placeholder="Ingrese sus dos nombres
 ..." required/>
 <br>
 --->
 <label for="ped_cantidad">Ingrese la cantidad (*)</label>
 <input class="campos" type="text" id="ped_cantidad" name="ped_cantidad" value="" placeholder="Ingrese la cantidad
..."  onkeyup="multiplicar()"/>
<br>





 <label for="ped_observaciones">Observaciones (*)</label>
 <input class="campos" type="text" id="ped_observaciones" name="ped_observaciones" value="" placeholder="Ingrese alguna observacion..." required/>
<br>
 <label for="com_precio_unit">Precio unitario (*)</label>
 <input class="campos" type="text" id="com_precio_unit" name="com_precio_unit" value="" placeholder="Ingrese el precio unitario..." onkeyup="multiplicar()" />
 <br>
 <label for="ped_total">Total (*)</label>
 <input class="campos" type="text" id="ped_total" name="ped_total" value="" placeholder="Calculando el total..."
required/>

<br>
 <label for="tar_codigo">Numero de Tarjeta (*)</label>
 <input class="campos" type="text" id="tar_codigo" name="tar_codigo" value="" placeholder="Ingrese el numero de su tarjeta" required/>
 <br>
<br>

 <!-- 
 <br>
 <label for="ped_codigo">Codigo del pedido (*)</label>
 <input class="campos" type="text" id="ped_codigo" name="ped_codigo" value="" placeholder="Ingrese sus dos nombres
 ..." required/>
 --->
 
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