<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Crear gestor de usuarios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            include('acciones.php');
            include('config.php');                 
        ?>
        
        <table>
            <tbody>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Suscripción</th>
                </tr>               
            </tbody>
        </table>

        <a class="boton-añadir" href="formulario.html">AÑADIR USUARIO</a>



        <fieldset>
        
            <legend>Nuevo usuario</legend>
        
            <form method="POST" action="acciones.php">
        
                <p><label for="name">Nombre</label>
                    <input type="text" name="name" id="name">
                </p>
        
                <p><label for="surname">Apellido</label>
                    <input type="text" name="surname" id="surname">
                </p>
        
                <p><label for="phone">Teléfono</label>
                    <input type="tel" name="phone" id="phone">
                </p>
        
        
        
                <p>
                
                    <input type="submit" name="submit" id="submit" value="Enviar">
                
                </p>
        
            </form>
        
        </fieldset>

    </body>
</html>