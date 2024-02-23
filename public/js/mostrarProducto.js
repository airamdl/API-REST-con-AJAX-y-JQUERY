function obtenerProducto() {
    $.ajax({
        url: '../../controller/producto.php?op=GetAll', 
        type: 'GET',
        dataType: 'json',
        success: function(response) {
         

            var productosHTML = '<h2>Listado de Productos</h2><ul>';
            $.each(response, function(index, producto) {
                productosHTML += '<li>' + producto.prod_nom + '</li>';
            });
            productosHTML += '</ul>';
            $('#productos-container').html(productosHTML);
        },
        error: function(xhr, status, error) {
            console.error('Error al obtener los productos:', error);
        }
    });
}
