<?php
 session_start();
 $_SESSION['isLogged'] = FALSE;
 session_destroy();

 header("Location: /dashboard/SistemaDeGestion/public/vista/login.html");
?>