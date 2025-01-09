<?php

namespace app\models;

use Flight;

class CadeauModel {

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Récupère tous les cadeaux
    public function getAllCadeaux() {
        $db = Flight::db();
        $sql = "SELECT * FROM CADEAU_CADEAU";
        $stmt = $db->query($sql);
        return $stmt->fetchAll();
    }

    // Récupère un cadeau par son ID
    public function getCadeauById($id) {
        $db = Flight::db();
        $sql = "SELECT * FROM CADEAU_CADEAU WHERE ID_CADEAU = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    // Récupère tous les cadeaux "vendus" (SOLD = true)
    public function getSoldCadeaux() {
        $db = Flight::db();
        $sql = "SELECT * FROM CADEAU_CADEAU WHERE SOLD = true";
        $stmt = $db->query($sql);
        return $stmt->fetchAll();
    }

    // Crée un nouveau cadeau
    public function createCadeau($data) {
        $db = Flight::db();
        $sql = "INSERT INTO CADEAU_CADEAU (NOM_CADEAU, PRIX_CADEAU, SOLD) VALUES (?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$data['NOM_CADEAU'], $data['PRIX_CADEAU'], $data['SOLD']]);
        return $db->lastInsertId();
    }

    // Met à jour un cadeau existant
    public function updateCadeau($id, $data) {
        $db = Flight::db();
        $sql = "UPDATE CADEAU_CADEAU SET NOM_CADEAU = ?, PRIX_CADEAU = ?, SOLD = ? WHERE ID_CADEAU = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$data['NOM_CADEAU'], $data['PRIX_CADEAU'], $data['SOLD'], $id]);
    }

    // Supprime un cadeau par son ID
    public function deleteCadeau($id) {
        $db = Flight::db();
        $sql = "DELETE FROM CADEAU_CADEAU WHERE ID_CADEAU = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
    }

    // Récupère tous les cadeaux qui ne sont pas vendus (SOLD = false)
    public function getUnsoldCadeaux() {
        $db = Flight::db();
        $sql = "SELECT * FROM CADEAU_CADEAU WHERE SOLD = false";
        $stmt = $db->query($sql);
        return $stmt->fetchAll();
    }

    public function getCadeauByIdAndSold($id, $sold) {
        $db = Flight::db();
        $sql = "SELECT * FROM CADEAU_CADEAU WHERE ID_CADEAU = ? AND SOLD = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id, $sold]);
        return $stmt->fetch();
    }
    
    public function getCadeauxByCategorie($idCategorie) {
        $db = Flight::db();
        $sql = "
            SELECT c.* 
            FROM CADEAU_CADEAU c
            JOIN CADEAU_CATEGORIE_CADEAU cc ON c.ID_CADEAU = cc.ID_CADEAU
            WHERE cc.ID_CATEGORIE = ?
        ";
        $stmt = $db->prepare($sql);
        $stmt->execute([$idCategorie]);
        return $stmt->fetchAll();
    }
    
}
