<?php
    header('Content-Type: application/json');

    require_once("../config/conexion.php");
    require_once("../models/Categoria.php");
    require_once("../models/Producto.php"); // Agregar la clase Producto
    $categoria = new Categoria();
    $producto = new Producto(); // Crear una instancia de la clase Producto

    $body = json_decode(file_get_contents("php://input"), true);

    switch($_GET["op"]){
        case "GetAll":
            $datos=$categoria->get_categoria();
            echo json_encode($datos);
        break;

        case "GetId":
            $datos=$categoria->get_categoria_x_id($body["cat_id"]);
            echo json_encode($datos);
        break;

        case "Insert":
            $datos=$categoria->insert_categoria($body["cat_nom"],$body["cat_obs"]);
            echo json_encode("Insert Correcto");
        break;

        case "Update":
            $datos=$categoria->update_categoria($body["cat_id"],$body["cat_nom"],$body["cat_obs"]);
            echo json_encode("Update Correcto");
        break;

        case "Delete":
            $datos=$categoria->delete_categoria($body["cat_id"]);
            echo json_encode("Delete Correcto");
        break;

        case "InsertProducto": // Nuevo caso para agregar productos
            $datos=$producto->insert_producto($body["cat_id"], $body["prod_nom"]); // Insertar producto en la categoría especificada
            echo json_encode("Producto agregado correctamente a la categoría");
        break;
    }
?>
