<?php if($action == "login") { ?>
    <div class="display-flex width-60 height-70 justify-center bordered-2 radius-20">
        <div class="diplay-flex width-60">

        </div>
            <div class="display-flex width-40 justify-center  bordered-1 radius-20 div-blurred">
                <form action='<?= Flight::get('flight.base_url') ?>/authentification' method="post" class="display-flex flex-column gap-20 paddingTop-40">
                    <div>
                        <p class="large text-AlignCenter fontSize-32">Society Name</p>
                    </div>
                    <div class="display-flex flex-column gap-5">
                        <label for="0">Login</label>
                        <input type='text' id='0' name="name" class="input paddingLeft-10 paddingRight-10 text-regular myInput" value="Client">
                    </div>
                    <div class="display-flex flex-column gap-5">
                        <label for="1">Mot de passe</label>
                        <input type='password' id='1' name="motdepasse" class="input paddingLeft-10 paddingRight-10 myInput" value="client">
                    </div>
                    <div class="display-flex flex-column align-center gap-5">
                        <input type="submit" value="connexion" class="btn fontSize-16 Mybtn">
                        <a href="<?= Flight::get('flight.base_url') ?>/sign_in" class="link">Sign_in</a>
                    </div>
                </form>
            </div>
    </div>

<?php } ?>

<?php if($action == "sign_in") { ?>
    <div class="display-flex width-60 height-70 justify-center bordered-1 radius-20">
        <div class="diplay-flex width-60 height-70">

        </div>
            <div class="display-flex width-40 height-70 justify-center  bordered-1 radius-20 div-blurred">
                <form action='<?= Flight::get('flight.base_url') ?>/accountCreation' method="post" class="display-flex flex-column gap-20 paddingTop-40">
                    <div>
                        <p class="large text-AlignCenter fontSize-32">Society Name</p>
                    </div>
                    <div class="display-flex flex-column gap-5">
                        <label for="0">Account name</label>
                        <input type='text' id='0' name="name" class="input paddingLeft-10 paddingRight-10 text-regular myInput" value="">
                    </div>
                    <div class="display-flex flex-column gap-5">
                        <label for="1">Mot de passe</label>
                        <input type='password' id='1' name="motdepasse1" class="input paddingLeft-10 paddingRight-10 myInput" value="password">
                    </div>
                    <div class="display-flex flex-column gap-5">
                        <label for="1">Confirmer le Mot de passe</label>
                        <input type='password' id='1' name="motdepasse2" class="input paddingLeft-10 paddingRight-10 myInput" value="password">
                    </div>
                    <div class="display-flex flex-column align-center gap-5">
                        <input type="submit" value="Inscription" class="btn fontSize-16 Mybtn">
                        <a href="<?= Flight::get('flight.base_url') ?>/" class="link">Login</a>
                    </div>
                </form>
            </div>
    </div>
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