<nav class="width-20 height-full display-flex flex-column justify-start align-center back-dark_blue myNav">
            <div class="width-90 height-10 margingTop-10 display-flex align-center justify-center">
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
                            <a href="#" class="nav-link nav-link-btn">Utilisateurs</a>
                        </li>
                    <?php } ?>

                </ul>
            </div>
            <div class="width-20 min-height-20 margedTop margingLeft-10 alignSelf-start back-crimson">
                <ul class="nav">
                    <?php if($user == "admin") { ?>
                        <li><a href="">switch client</a></li>
                    <?php } ?>
                    <li>
                        <!-- <div class="icon-container">
                            <iconv class="eicon-outDoor"></iconv>
                        </div> -->
                    </li>
                </ul>

            </div>
        </nav>