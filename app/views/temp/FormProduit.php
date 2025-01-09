
<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Formulaire d'Insertion de Produit</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="../assets/css/MYCSS/main.css">
</head>
<body>

    <div>
        <h2>Ajouter un nouveau produit</h2>
       
        <form action="traitement/Product_Managing.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="id_categorie">Catégorie</label>
                <select name="ID_CATEGORIE" id="id_categorie" class="form-control">
                    <?php foreach ($categories as $categorie) { ?>
                        <option value="<?php echo $categorie['ID_CATEGORIE'] ?>"><?php echo $categorie['NOM_CATEGORIE'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="nom_produit">Nom du produit</label>
                <input type="text" name="NOM_PRODUIT" id="nom_produit" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="price">Prix</label>
                <input type="number" name="PRICE" id="price" class="form-control" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="description_produit">Description du produit</label>
                <textarea name="DESCRIPTION_PRODUIT" id="description_produit" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="pourcentage_promotion">Pourcentage de promotion</label>
                <input type="number" name="POURCENTAGE_PROMOTION" id="pourcentage_promotion" class="form-control" min="0" max="100" step="0.1" required>
            </div>

            <!-- Section pour les photos -->
            <div class="photo-section">
                <label for="photos">Photos du produit</label>
                <div id="photos-container">
                    <div class="photo-item">
                        <input type="file" name="images[]" class="form-control-file" id="images" accept="image/*" multiple required>
                    </div>
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-success">Soumettre</button>
        </form>

        <div>
            <div class="preview" id="preview"></div>
        </div>
    </div>
    <script src="../assets/js/MYJS/pictures.js"></script>
</body>
</html>
