<!DOCTYPE html>
 
<html xmlns="http://www.w3.org/1999/xhtml">
 
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<title></title>
 
</head>
 
<body>
 
<fieldset>
 
<legend>Nuevo usuario</legend>
 
    <form method="post" action="pruebas.php">

        <input type="text" name="nombre">
        
    </form>

</fieldset>

<?php

$nombre = $_POST["nombre"];

echo $nombre;

?>






</body>
</html>