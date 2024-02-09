function agregarProducto() {
    var id = document.getElementById('cat_id').value;
    var nombre = document.getElementById('prod_nom').value;
    
    
   
  
            // Obtener los datos del formulario
            var formData = {
                cat_id: id,
                prod_nom: nombre
            };

            $.ajax({
                url: '../../controller/producto.php?op=InsertProducto', 
                type: 'POST',
                dataType: 'json',
                data: JSON.stringify(formData), // Convertir los datos a JSON
                contentType: 'application/json',
                success: function(response) {
                    alert(response); 
                    obtenerProducto();
                },
                error: function(error) {
                    console.error('Error al insertar el producto:', error);
                    alert('Error al insertar el producto');
                }
            });
}