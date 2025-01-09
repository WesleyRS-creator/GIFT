<?php if (!empty($categories)) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <ul>
        <?php for($i = 0; $i < count($categories); $i++){ ?>
            <li><?php echo $categories[$i]['NOM_CATEGORIE'] ?></li>    
        <?php } ?>
    </ul>
</body>
</html>
    
<?php } else { ?>
    <p>Aucune categorie disponible.</p>
<?php } ?>