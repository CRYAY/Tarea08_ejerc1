
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de RFC</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="txtnombre">Nombre:</label>
        <input type="text" name="txtnombre" placeholder="Ingresa tu nombre" required>

        <label for="txtapep">Apellido:</label>
        <input type="text" name="txtapep" placeholder="Ingresa tu 1er apellido" required>

        <label for="txtapem">Apellido:</label>
        <input type="text" name="txtapem" placeholder="Ingresa tu 2er apellido" required>

        <label for="txtfecha">Nacimiento:</label>
        <input type="date" name="txtfecha" required>
        <input type="submit" name="mostrar" value="enviar">
    </form>

    <h2>
        <?php 
            if(isset($datos)) echo $datos;
        ?>
    </h2>

</body>
</html>
