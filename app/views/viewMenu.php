<nav class="width-20 height-full display-flex flex-column justify-start align-center gap-40 back-dark_blue myNav">
            <div class="width-90 marged-10">
                    <div class="medium text-regular text-AlignCenter fontSize-32 font-white">
                        Society Name
                    </div>
            </div>

            <div class="width-90">
                <ul class="display-flex width-full flex-column justify-around align-center height-40 nav">
                    <?php if($user == "client") { ?>
                        <li class=" width-full text-AlignCenter">
                            <a href="#" class="nav-link nav-link-btn">Cadeaux</a>
                        </li>
                        <li class=" width-full text-AlignCenter">
                            <a href="#" class="nav-link nav-link-btn">Demandes de Depots</a>
                        </li>
                        <li class=" width-full text-AlignCenter">
                            <a href="#" class="nav-link nav-link-btn">Mes Achats</a>
                        </li>
                        <li class=" width-full text-AlignCenter">
                            <a href="#" class="nav-link nav-link-btn">Trajets</a>
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
            <div class="width-20 min-height-20 margedTop alignSelf-start back-crimson">
                <ul class="nav">
                    <?php if($user == "admin") { ?>
                        <li><a href="">switch client</a></li>
                    <?php } ?>
                    <li>
                        <div>
                            <a href="">
                            <div class="icon">
                                <img src="..\assets\CSS/MYBOOTSTRAP\svg/icons\sortie.svg" alt="">
                            </div>
                            </a>
                        </div>
                        
                    </li>
                </ul>

            </div>
        </nav>