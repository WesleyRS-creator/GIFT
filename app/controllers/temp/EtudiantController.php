<?php

namespace app\controllers;

use app\models\EtudiantModel;
use Flight;

class EtudiantController {

	public function __construct() {

	}

    public function home() {
        // Récupérer les données des étudiants avec leurs notes
        $matiere = Flight::etudiantModel()->getAll();
    
        // Organiser les données par étudiant
        $etudiantsOrganises = [];
        foreach ($matiere as $row) {
            $etudiantsOrganises[$row['numero_etudiant']]['numero_etudiant'] = $row['numero_etudiant'];
            $etudiantsOrganises[$row['numero_etudiant']]['nom_etudiant'] = $row['nom_etudiant'];
            $etudiantsOrganises[$row['numero_etudiant']]['date_naissance'] = $row['date_naissance'];
            $etudiantsOrganises[$row['numero_etudiant']]['notes'][] = [
                'code_matiere' => $row['code_matiere'],
                'nom_matiere' => $row['nom_matiere'],
                'coefficient' => $row['coefficient'],
                'note' => $row['note']
            ];
        }
    
        // Envoyer les données organisées à la vue
        $data = ['etudiants' => $etudiantsOrganises];
        Flight::render('etudiant', $data);
    }
	// public function homeDB() {
	// 	$matiere = Flight::MatiereModel()->test();
    //     $data = ['nom' => $matiere["nom"], 'prix'=> $matiere["date_naissance"]];
    //     Flight::render('welcome', $data);
    // }
    public function fiche($id) {
        $etudiants = Flight::etudiantModel()->getById($id);
        //var_dump($etudiants);
        //$data = $etudiant;
        $notes = [];
        foreach ($etudiants as $e) {
            $notes[] = [
                'code_matiere' => $e['code_matiere'],
                'nom_matiere' => $e['nom_matiere'],
                'coefficient' => $e['coefficient'],
                'note' => $e['note']
            ];
        }
    
        // Construire les informations de l'étudiant
        $etudiant = [
            'numero_etudiant' => $etudiants[0]['numero_etudiant'],
            'nom_etudiant' => $etudiants[0]['nom_etudiant'],
            'date_naissance' => $etudiants[0]['date_naissance'],
            'notes' => $notes
        ];

        $data = ['etudiant' => $etudiant];
        Flight::render('etudiantFiche', $data);
    }

}