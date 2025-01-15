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
        $sql = "SELECT * FROM CADEAU_USER";
        $stmt = $db->query($sql);
        return $stmt->fetchAll();
    }

    public function getUserById($id) {
        $db = Flight::db();
        $sql = "SELECT * FROM CADEAU_USER WHERE ID_USER = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function inData($name, $password) {
        $db = Flight::db();

        $stm = $db->prepare('SELECT ID_USER FROM CADEAU_USER WHERE name = :nm AND password = :mdp');

        $stm->execute(['nm' => $name, 'mdp' => $password]);

        $stmtrst = $stm->fetch($db::FETCH_ASSOC);
        
        if ($stmtrst !== false) {
            return $stmtrst['ID_USER']; 
        } else {
            return null;
        }
    }

    public function getByAuth($name, $password) {
        $id = Flight::userModel()->inData($name, $password);
        // $id = inData($name, $password);
        if ($id != null) {
            $user = Flight::userModel()->getUserById($id);
            return $user;
        }
        return null;
    }

    public function createUser($data) {
        $db = Flight::db();
        $sql = "INSERT INTO CADEAU_USER (NAME, PASSWORD, ADMIN) VALUES (?, ?, false)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$data['NAME'], $data['PASSWORD']]);
        return $db->lastInsertId();
    }

    public function updateUser($id, $data) {
        $db = Flight::db();
        $sql = "UPDATE CADEAU_USER SET NAME = ?, PASSWORD = ?, ADMIN = ? WHERE ID_USER = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$data['NAME'], $data['PASSWORD'], $data['ADMIN'], $id]);
    }

    public function deleteUser($id) {
        $db = Flight::db();
        $sql = "DELETE FROM CADEAU_USER WHERE ID_USER = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
    }
}
