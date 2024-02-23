<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api REST</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="public/js/agregarCat.js"></script>
</head>
<body>
    

<h1>Panel de Control</h1>
    
    <h2>Agregar Nueva Categoría</h2>
    <div id="categoriaForm">
        <label for="cat_nom">Nombre de la Categoría:</label>
        <input type="text" id="cat_nom" name="cat_nom">
        <label for="cat_obs">Observación:</label>
        <input type="text" id="cat_obs" name="cat_obs">
        <button onclick="agregarCategoria()">Agregar Categoría</button>
    </div>
    <fieldset>
        <legend>Jquery</legend>
       <textarea id="respuesta"></textarea>
    </fieldset>

    <div>
        <h3 class="categoria"></h3>
    </div>

    
    
</body>
</html>






