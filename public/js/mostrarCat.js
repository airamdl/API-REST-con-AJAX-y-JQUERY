function obtenerCategorias() {
        $.ajax({
            url: '../../controller/categoria.php?op=GetAll', 
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                
                if (response) {
                   
                    var categoriasHTML = '<ul>';
                    $.each(response, function(index, categoria) {
                        categoriasHTML += '<li>' + categoria.cat_nom + '</li>';
                    });
                    categoriasHTML += '</ul>';
                    $('#categorias').html(categoriasHTML);
                } else {
                    console.log('No se encontraron categorías.');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error al obtener las categorías:', error);
            }
        });
}

