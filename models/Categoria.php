<?php
/**
 * Class Categoria
 *
 * @author airamdl
 */
class Categoria extends Conectar {

    /**
     * Returns all categories
     *
     * @return array
     */
    public function get_categoria() {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT * FROM tm_categoria WHERE est = 1";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Returns a specific category based on the id
     *
     * @param int $cat_id
     * @return array
     */
    public function get_categoria_x_id($cat_id) {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT * FROM tm_categoria WHERE est=1 AND cat_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_id);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Inserts a new category into the database
     *
     * @param string $cat_nom
     * @param string $cat_obs
     * @return array
     */
    public function insert_categoria($cat_nom, $cat_obs) {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO tm_categoria(cat_nom, cat_obs, est) VALUES (?, ?, '1');";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_nom);
        $sql->bindValue(2, $cat_obs);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Updates an existing category in the database
     *
     * @param int $cat_id
     * @param string $cat_nom
     * @param string $cat_obs
     * @return array
     */
    public function update_categoria($cat_id, $cat_nom, $cat_obs) {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "UPDATE tm_categoria set
                cat_nom = ?,
                cat_obs = ?
                WHERE
                cat_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_nom);
        $sql->bindValue(2, $cat_obs);
        $sql->bindValue(3, $cat_id);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Deletes an existing category from the database
     *
     * @param int $cat_id
     * @return array
     */
    public function delete_categoria($cat_id) {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "UPDATE tm_categoria set
                est = '0'
                WHERE
                cat_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_id);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>