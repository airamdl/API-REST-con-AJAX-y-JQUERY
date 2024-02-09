<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Producto</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Insertar Producto</h2>
    <div id="insertar-producto-form">
        <label for="cat_id">ID de Categoría:</label>
        <input type="text" id="cat_id" name="cat_id">
        <br>
        <label for="prod_nom">Nombre del Producto:</label>
        <input type="text" id="prod_nom" name="prod_nom">
        <br>
        <button onclick="insertarProducto()">Insertar Producto</button>
</div>

    <div id="mensaje"></div>

   
</body>
</html>
