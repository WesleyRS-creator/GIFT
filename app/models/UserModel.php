<?php

namespace app\models;

use Flight;

class UserModel {

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllUsers() {
        $db = Flight::db();
        $sql = "SELECT * FROM CADEAU_USERS";
        $stmt = $db->query($sql);
        return $stmt->fetchAll();
    }

    public function getUserById($id) {
        $db = Flight::db();
        $sql = "SELECT * FROM CADEAU_USERS WHERE ID_USER = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function inData($name, $password) {
        $db = Flight::db();

        $stm = $db->prepare('SELECT id FROM CADEAU_USER WHERE nom = :nm AND password = :mdp');

        $stm->execute(['nm' => $name, 'mdp' => $password]);

        $stmtrst = $stm->fetch($db::FETCH_ASSOC);
        
        if ($stmtrst !== false) {
            return $stmtrst['id']; 
        } else {
            return null;
        }
    }

    public static function getByAuth($name, $password) {
        $id = inData($name, $password);
        if ($id != null) {
            return getUserById($id);
        }
        return null;
    }

    public function createUser($data) {
        $db = Flight::db();
        $sql = "INSERT INTO CADEAU_USERS (NOM, PASSWORD, ADMIN) VALUES (?, ?, false)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$data['NOM'], $data['PASSWORD']]);
        return $db->lastInsertId();
    }

    public function updateUser($id, $data) {
        $db = Flight::db();
        $sql = "UPDATE CADEAU_USERS SET NOM = ?, PASSWORD = ?, ADMIN = ? WHERE ID_USER = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$data['NOM'], $data['PASSWORD'], $data['ADMIN'], $id]);
    }

    public function deleteUser($id) {
        $db = Flight::db();
        $sql = "DELETE FROM CADEAU_USERS WHERE ID_USER = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
    }
}
