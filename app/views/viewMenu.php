<nav class="Navbar">
            <div class="container-content half centerY centerX column">
            <div class="account">
                <div class="title button button-backgrounded">
                    Userprofile
                </div>
                <div class="circle"></div>
            </div>
            </div>

            <div class="container-content full centerX column">
                <ul class="List">
                    <?php if($user = "client") { ?>
                        <li>
                            <a href="/home/chauffeur" class="button button-hover colorHover">Chauffeur</a>
                        </li>
                        <li>
                            <a href="/home/vehicule" class="button button-hover colorHover">Vehicules</a>
                        </li>
                        <li>
                            <a href="/home/travel" class="button button-hover colorHover">Travels</a>
                        </li>
                        <li>
                            <a href="/home/trajet" class="button button-hover colorHover">Trajets</a>
                        </li>
                    <?php } ?>

                    <?php if($user = "admin") { ?>
                        <li>
                            <a href="/home/chauffeur" class="button button-hover colorHover">Chauffeur</a>
                        </li>
                        <li>
                            <a href="/home/vehicule" class="button button-hover colorHover">Vehicules</a>
                        </li>
                        <li>
                            <a href="/home/travel" class="button button-hover colorHover">Travels</a>
                        </li>
                        <li>
                            <a href="/home/trajet" class="button button-hover colorHover">Trajets</a>
                        </li>
                    <?php } ?>

                </ul>
            </div>
            <div class="boxTools">
                <ul>
                    <?php if($user = "admin") { ?>

                    <?php } ?>
                </ul>

            </div>
        </nav>