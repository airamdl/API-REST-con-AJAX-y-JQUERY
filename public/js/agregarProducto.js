function agregarProducto() {
    var nombre = document.getElementById('pro_nom').value;
    var id = document.getElementById('cat_id').value;
    
   
  
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
                error: function( error) {
                    console.error('Error al insertar el producto:', error);
                    alert('Error al insertar el producto');
                }
            });
}