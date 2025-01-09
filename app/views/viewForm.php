<?php if($action == "login") { ?>
    <form action='/home/acceuil/traitement/1' method="post">
        <div>
            <label for="0">Login</label>
            <input type='text' id='0' name="name">
        </div>
        <div>
            <label for="1">Mot de passe</label>
            <input type='password' id='1' name="motdepasse">
        </div>
        <input type="submit" value="connexion">
        <a href="/sign_in">Sign_in</a>
    </form>
<?php } ?>

<?php if($action == "signin") { ?>
    <form action='/home/acceuil/traitement/2' method="post">
        <div>
            <label for="0">Login</label>
            <input type='text' id='0' name="name">
        </div>
        <div>
            <label for="1">Mot de passe</label>
            <input type='password' id='1' name="motdepasse">
        </div>
        <div>
            <label for="2">Confirmer le Mot de Passe</label>
            <input type='password' id='2' name="motdepasse2">
        </div>
        <input type="submit" value="inscription">
        <a href="/">Login</a>
    </form>
<?php } ?>

<?php if($action == "recommended") { ?>
    <form action='' method="post">
        <div>
            <label for="0">Nombre de garçon</label>
            <input type='text' id='0' name="nbrGarçon">
        </div>
        <div>
            <label for="1">Nombre de Fille</label>
            <input type='password' id='1' name="nbrFille">
        </div>
        <input type="submit" value="valider">
    </form>
<?php } ?>