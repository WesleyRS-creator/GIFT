<div class="width-80 height-full display-flex flex-column">
    <div class="width-full height-10 margingTop-10 display-flex justify-between align-center">
        <ul class="nav margingLeft-20">
            <li class="fontSize-32 font-white text-regular">Section name</li>
        </ul>
        <ul class="nav margingRight-20 display-flex align-center gap-40">
            <li class=""><a href="#" class="nav-link btn fontSize-16">Recommended Gift</a></li>
            <li class=""><a href="#" class="nav-link font-white fontSize-20">AccountName</a></li>
        </ul>
    </div>
    <div class="width-full min-height-10 display-flex align-center">
        <ul class="margingLeft-20 width-full height-10 display-flex align-center gap-40 nav">
            <li class="transY-10"><a href="#" class="nav-link btn btn-active">All</a></li>
            <li class="transY-10"><a href="#" class="nav-link btn btn-active">Garçon</a></li>
            <li class="transY-10"><a href="#" class="nav-link btn btn-active">Fille</a></li>
            <li class="transY-10"><a href="#" class="nav-link btn btn-active">Neutre</a></li>
        </ul>
    </div>
    <div class="width-full height-80 paddingLeft-20 paddingRight-20 paddingTop-10">

        <div class="width-full height-70 display-flex gap-20 flex-column overflow-hidden-scroll back-leight_grey" <?php //background-color:rgb(62, 65, 68); ?>>
            <div class="display-flex justify-center">
                <p class="font-white fontSize-32 text-regular">Category</p>
            </div>
            <div class="display-flex flex-wrap-on justify-evently gapRow-20">
                <?php for($i = 0; $i < 10; $i++) { ?>
                <div class="width-30 height-30 back-dark_blue display-flex radius-10">
                        <div class="width-50 height-30 back-crimson display-flex justify-center align-center">
                            pictures
                        </div>
                        <div class="width-50 height-30 back-yellow">
                            <div>
                                features
                            </div>
                        </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>