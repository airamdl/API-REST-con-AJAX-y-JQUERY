let mostrarD = false;
function obtenerCategorias() {
        // Obtiene el elemento donde se mostrarán las categorías
        mostrar = document.getElementById("verCat");

        // Realiza una solicitud AJAX utilizando jQuery
        $.ajax({
            url: '../../controller/categoria.php?op=GetAll',
            method: 'GET',
            dataType: 'json',
            success: function (data) {
                // Muestra las categorías obtenidas del servidor si el botón de visualización está activado,
                // de lo contrario, limpia el contenido de la sección de visualización
                if (!mostrarD) {
                    mostrar.innerHTML += "CATEGORÍAS:<br>";
                    mostrar.innerHTML += JSON.stringify(data);
                    mostrarD = true;
                } else {
                    mostrar.innerHTML = "";
                    mostrarD = false;
                }
            },
            error: function (error) {
                // Maneja los errores de la solicitud AJAX
                alert('Error al cargar categorías:', error);
            }
        });
}

obtenerCategorias();

