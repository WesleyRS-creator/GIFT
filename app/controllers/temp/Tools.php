<?php 
    function calculerPourcentage($nombre, $pourcentage) {
        // Vérifier si les entrées sont valides
        if (!is_numeric($nombre) || !is_numeric($pourcentage)) {
            throw new InvalidArgumentException("Les paramètres doivent être des nombres.");
        }
    
        // Calculer le pourcentage
        $resultat = ($nombre * $pourcentage) / 100;
    
        return $resultat; // Retourner le résultat
    }

    function calculerSoustractionPourcentage($nombre, $pourcentage) {
        // Utiliser la méthode précédente pour calculer la valeur du pourcentage
        $valeurPourcentage = calculerPourcentage($nombre, $pourcentage);
    
        // Soustraire la valeur du pourcentage au nombre initial
        $resultat = $nombre - $valeurPourcentage;
    
        return $resultat;
    }

    
    function getStringStars($note) {
        $stars = [];
        $empty = 'bi-star';
        $half = 'bi-star-half';
        $full = 'bi-star-fill';

    $fullStars = floor($note);

    $hasHalfStar = ($note - $fullStars) > 0;

    for ($i = 0; $i < $fullStars; $i++) {
        $stars[] = $full;
    }

    if ($hasHalfStar) {
        $stars[] = $half;
    }

    while (count($stars) < 5) {
        $stars[] = $empty;
    }

        return $stars;
    }

?>