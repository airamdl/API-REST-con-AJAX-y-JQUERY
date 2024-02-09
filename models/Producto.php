<?php
/**
 * Class Producto
 *
 * @author airamdl
 */
class Producto extends Conectar {

    /**
     * Inserts a new product into the database
     *
     * @param int $cat_id
     * @param string $prod_nom
     * @return array
     */
    public function insert_producto($cat_id, $prod_nom) {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO tm_producto(prod_id, cat_id, prod_nom, est) VALUES (NULL, ?, ?, '1')";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_id);
        $sql->bindValue(2, $prod_nom);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Updates an existing product in the database
     *
     * @param int $prod_id
     * @param string $prod_nom
     * @return array
     */
    public function update_producto($prod_id, $prod_nom) {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "UPDATE tm_producto SET prod_nom = ? WHERE prod_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $prod_nom);
        $sql->bindValue(2, $prod_id);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Deletes an existing product from the database
     *
     * @param int $prod_id
     * @return array
     */
    public function delete_producto($prod_id) {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "UPDATE tm_producto SET est = '0' WHERE prod_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $prod_id);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Retrieves all products from a specific category
     *
     * @param int $cat_id
     * @return array
     */
    public function get_productos_by_categoria($cat_id) {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT * FROM tm_producto WHERE est = 1 AND cat_id = ?";
        
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_id);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
