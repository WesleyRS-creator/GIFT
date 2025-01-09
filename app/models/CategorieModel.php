<?php

namespace app\models;

use Flight;

class CategorieModel {

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllCategories() {
        $db = Flight::db();
        $sql = "SELECT * FROM CADEAU_CATEGORIE";
        $stmt = $db->query($sql);
        return $stmt->fetchAll();
    }

    public function getCategorieById($id) {
        $db = Flight::db();
        $sql = "SELECT * FROM CADEAU_CATEGORIE WHERE ID_CATEGORIE = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function createCategorie($data) {
        $db = Flight::db();
        $sql = "INSERT INTO CADEAU_CATEGORIE (NOM_CATEGORIE) VALUES (?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$data['NOM_CATEGORIE']]);
        return $db->lastInsertId();
    }

    public function updateCategorie($id, $data) {
        $db = Flight::db();
        $sql = "UPDATE CADEAU_CATEGORIE SET NOM_CATEGORIE = ? WHERE ID_CATEGORIE = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$data['NOM_CATEGORIE'], $id]);
    }

    public function deleteCategorie($id) {
        $db = Flight::db();
        $sql = "DELETE FROM CADEAU_CATEGORIE WHERE ID_CATEGORIE = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
    }
}
