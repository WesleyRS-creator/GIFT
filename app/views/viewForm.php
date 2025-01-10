<?php if($action == "login") { ?>
    <div class="display-flex width-60 height-70 justify-center bordered-1 radius-20">
        <div class="diplay-flex width-60 height-70">

        </div>

            <div class="display-flex width-40 height-70 justify-center  bordered-1 radius-20">
                <form action='/authentification' method="post" class="display-flex flex-column gap-20 paddingTop-40">
                    <div>
                        <p class="large text-AlignCenter">Society Name</p>
                    </div>
                    <div class="display-flex flex-column gap-5">
                        <label for="0">Login</label>
                        <input type='text' id='0' name="name" class="input paddingLeft-10 paddingRight-10" value="Client">
                    </div>
                    <div class="display-flex flex-column gap-5">
                        <label for="1">Mot de passe</label>
                        <input type='password' id='1' name="motdepasse" class="input paddingLeft-10 paddingRight-10" value="client">
                    </div>
                    <div class="display-flex flex-column align-center gap-5">
                        <input type="submit" value="connexion" class="btn">
                        <a href="/sign_in" class="link">Sign_in</a>
                    </div>
                </form>
            </div>

    </div>

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