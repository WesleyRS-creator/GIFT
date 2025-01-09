<?php if (!empty($etudiant)) { ?>
    <!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <h1 class="text-center">Hello World</h1>
            <p><?php //var_dump($etudiant) //echo $etudiant ?></p>
            <p>
                <span>ID :</span>
                <?php echo $etudiant['numero_etudiant'] ?>
            </p>
            <p>
                <span>NOM :</span>
                <?php echo $etudiant['nom_etudiant'] ?>
            </p>
            <?php //var_dump($etudiant['notes']); ?>
            <table>
                <thead>
                    <tr>
                        <th>Code Matière</th>
                        <th>Nom Matière</th>
                        <th>Coefficient</th>
                        <th>Note</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($etudiant['notes'] as $note) { ?>
                        <tr>
                            <td><?php echo $note['code_matiere'] ?></td>
                            <td><?php echo $note['nom_matiere'] ?></td>
                            <td><?php echo $note['coefficient'] ?></td>
                            <td><?php echo $note['note'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="/etudiant">retour</a>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
<?php } ?>

<?php
/*
            <table>
            <thead>
                <tr>
                    <th>Code Matière</th>
                    <th>Nom Matière</th>
                    <th>Coefficient</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($etudiant['notes'] as $note) { ?>
                    <tr>
                        <td><?= htmlspecialchars($note['code_matiere']) ?></td>
                        <td><?= htmlspecialchars($note['nom_matiere']) ?></td>
                        <td><?= htmlspecialchars($note['coefficient']) ?></td>
                        <td><?= htmlspecialchars($note['note']) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        */
?>