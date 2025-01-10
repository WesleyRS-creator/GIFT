<nav class="width-20 height-full display-flex flex-column justify-start align-center gap-40 back-yellow">
            <div class="width-90 marged-20 back-crimson">
                    <div class="">
                        Society Name
                    </div>
            </div>

            <div class="width-90">
                <ul class="display-flex flex-column justify-around align-center height-40 back-crimson">
                    <?php if($user == "client") { ?>
                        <li>
                            <a href="/home/chauffeur" class="">Cadeaux</a>
                        </li>
                        <li>
                            <a href="/home/vehicule" class="">Demandes de Depots</a>
                        </li>
                        <li>
                            <a href="/home/travel" class="">Mes Achats</a>
                        </li>
                        <li>
                            <a href="/home/trajet" class="">Trajets</a>
                        </li>
                    <?php } ?>

                    <?php if($user == "admin") { ?>
                        <li>
                            <a href="/home/chauffeur" class="button button-hover colorHover">Chauffeur</a>
                        </li>
                        <li>
                            <a href="/home/vehicule" class="">Vehicules</a>
                        </li>
                        <li>
                            <a href="/home/travel" class="">Travels</a>
                        </li>
                        <li>
                            <a href="/home/trajet" class="">Trajets</a>
                        </li>
                    <?php } ?>

                </ul>
            </div>
            <div class="width-90 margedTop back-crimson">
                <ul>
                    <?php if($user == "admin") { ?>
                        <li><a href="">switch client</a></li>
                    <?php } ?>
                    <li><a href="">deconnexion</a></li>
                </ul>

            </div>
        </nav>