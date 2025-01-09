<?php

namespace app\controllers;

use app\models\MatiereModel;
use Flight;

class MatiereController {

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

}