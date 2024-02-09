<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Producto</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="public/js/agregarProducto.js"></script>
</head>
<body>
    <h2>Agregar Producto</h2>
    <div id="productoForm">
        <label for="cat_id">ID de Categoría:</label>
        <input type="text" id="cat_id" name="cat_id">
        <br>
        <label for="prod_nom">Nombre del Producto:</label>
        <input type="text" id="prod_nom" name="prod_nom">
        <br>
        <button onclick="agregarProducto()">Agregar Producto</button>
</div>

    <div>
        <h3 class="producto"></h3>
    </div>

   
</body>
</html>
