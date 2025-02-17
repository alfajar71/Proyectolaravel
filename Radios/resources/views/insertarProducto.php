<!DOCTYPE html>
<html lang="es" spellcheck="false">
<head>
    <meta charset="utf-8">
	<title>Insertar producto</title>
    <link rel="stylesheet" href="insertarProducto.css">
    
</head>
    
<body>
    
    <h1>Añadir Producto:</h1>

    <center>
    <br>
    <form action="/insertar" method="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        
        <input type="number" name="id" placeholder="id" required>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="number" name="precio" placeholder="Precio" required>
        <input type="text" name="tipo" placeholder="tipo" required>
        <input type="submit" value="INSERTAR" id="boton">
    </form>
    </center>

</body>

</html>