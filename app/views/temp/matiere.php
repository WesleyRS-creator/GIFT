<h1>Welcome to the FlightPHP Skeleton Example!</h1>
<?php if (!empty($matieres)) { ?>
    <?php foreach ($matieres as $matiere) { ?>
        <h3><?= $matiere["code_matiere"] ?></h3>
        <p><?= $matiere["nom_matiere"] ?></p>
        <p><?= $matiere["coefficient"] ?></p>
        <hr> <!-- Ligne de séparation entre chaque élément -->
    <?php } ?>
<?php } else { ?>
    <p>Aucune matière disponible.</p>
<?php } ?>