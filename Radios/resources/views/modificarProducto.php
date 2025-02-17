<!DOCTYPE html>

<html lang="es" spellcheck="false">
<head>
    <meta charset="utf-8">
	<title>Modificar producto</title>
    <link rel="stylesheet" href="insertarProducto.css">
    
</head>
    
<body>
    
    <h1>Modificar Producto:</h1>

    <center>
    <br>
    <form action="/modificar" method="POST">
        <input type="hidden" name="_method" value="PUT"> <!-- Simula el método PUT -->
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> <!-- Protección CSRF -->

        <input type="number" name="id" placeholder="ID del producto" required>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="number" name="precio" placeholder="Precio" required>
        <input type="text" name="tipo" placeholder="Tipo" required>
        <input type="submit" value="MODIFICAR" id="boton">
    </form>
    </center>

</body>

</html>