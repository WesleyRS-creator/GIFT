<section>
    <?php if (!empty($produits)) { ?>
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php for($i = 0; $i < count($produits); $i++){ ?>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <?php if($produits[$i]['POURCENTAGE_PROMOTION'] > 0){ ?>
                                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                <?php } ?>
                                <!-- Product image-->
                                <img class="card-img-top" src="admin/traitement/<?php //echo $produits[$i]['PHOTO'][0] ?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?php echo $produits[$i]['NOM_PRODUIT'] ?></h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <?php 
                                                $starString = getStringStars($produits[$i]['NBR_STARS']);
                                                for($k = 0; $k < 5; $k++){
                                            ?>
                                                <div class="<?php echo $starString[$k] ?>"></div>
                                            <?php } ?>
                                        </div>
                                        <!-- Product price-->
                                         <?php if($produits[$i]['POURCENTAGE_PROMOTION'] > 0){
                                                $priceReduce = calculerSoustractionPourcentage($produits[$i]['PRICE'], $produits[$i]['POURCENTAGE_PROMOTION'] );
                                            ?>
                                            <span class="text-muted text-decoration-line-through">$<?php echo $produits[$i]['PRICE'] ?></span>
                                            $<?php echo $priceReduce ?>
                                        <?php } else { ?>
                                            <span>$<?php echo $produits[$i]['PRICE'] ?></span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="product.php?ID_PRODUIT=<?php echo $produits[$i]['ID_PRODUIT'] ?>">View Option</a></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } else { ?>
        produits_list est vide
    <?php } ?>
</section>