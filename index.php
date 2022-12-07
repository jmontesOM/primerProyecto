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
            include('funciones.php');
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

                
                <tr>
                    <th> <?= $misUsuarios->name ?> </th>
                    <th> <?= $misUsuarios->surName ?> </th>
                    <th> <?= $misUsuarios->phone ?> </th>
                    <th> <?= $misUsuarios->suscription ?> </th>
                </tr>


                

                
            </tbody>
        </table>

        <a class="boton-añadir" href="formulario.html">AÑADIR USUARIO</a>



        <fieldset>
        
            <legend>Nuevo usuario</legend>
        
            <form method="post" action="contact.php">
        
                <p><label for="name">Nombre </label>
                    <input type="text" name="name" id="name">
                </p>
        
                <p><label for="surname">Apellido</label>
                    <input type="text" name="surname" id="surname">
                </p>
        
                <p><label for="phone">Teléfono</label>
                    <input type="tel" name="phone" id="phone"></input>
                </p>
                
                <p><span>Suscrito</span>
                    <div>
                        <input type="radio" id="yes" name="suscription" value="yes" checked>
                        <label for="suscription">Si</label>
                    </div>
                
                    <div>
                        <input type="radio" id="no" name="suscription" value="no">
                        <label for="suscription">No</label>
                    </div>
                </p>
        

        
                <p>
                
                    <input type="submit" name="submit" id="submit" value="submit">
                
                </p>
        
            </form>
        
        </fieldset>

    </body>
</html>