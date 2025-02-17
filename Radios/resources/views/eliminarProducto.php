<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar producto</title>
</head>
<body>
    <h1>Eliminar Producto</h1>
    
    <center>
    <form action="/eliminar" method="POST">
        <input type="hidden" name="_method" value="DELETE"> <!-- Simula DELETE -->
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> <!-- Protección CSRF -->

        <input type="number" name="id" placeholder="ID del producto" required>
        <input type="submit" value="ELIMINAR" id="boton">
    </form>

    <center>
</body>
</html>