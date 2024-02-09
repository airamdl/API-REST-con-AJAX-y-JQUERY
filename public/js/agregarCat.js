function agregarCategoria() {
    var nombre = document.getElementById('cat_nom').value;
    var observacion = document.getElementById('cat_obs').value;

    // Crear el objeto de datos para enviar al servidor
    var data = {
        cat_nom: nombre,
        cat_obs: observacion
    };
    
    // alert(nombre);
    // alert(observacion);

   
    $.ajax({
        url: '../../controller/categoria.php?op=Insert', 
        type: 'POST',
        dataType: 'json',
        data: JSON.stringify(data),
        contentType: 'application/json',
        success: function(response) {
            
            alert('Categoría agregada correctamente');

            //actualizar la lista de categorías
            obtenerCategorias();
                

        },
        error: function(error) {
            console.error('Error al agregar la categoría:', error);
            alert('Error al agregar la categoría. Por favor, inténtalo de nuevo.');
        }
    });
}