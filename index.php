<?php 
    session_start();
    require_once('./templates/header.php') 

?>
    <!--Partie principale du site-->
    <main>

        <!--Kélian-->
        <Section class="body-kelian">
            <div class="row">
                <div class="column-left col-md-6 col-xs-3">

                    <h1 class="h1-kelian">Just the right food</h1>
                    <img src="./img/dividergold.png" alt="" class="img-4-kelian">
                    <div class="textcontent-kelian">
                        <p>If you've been to one of our restaurants, you've seen - and</p>
                        <p>tasted - what keeps our customers coming back for more.</p>
                        <p>Perfect materials and freshly baked food, delicious Lamda</p>
                        <p>cakes, muffins, and gourmet coffees make us hard to resist!</p>
                        <p class="p-center-kelian">Stop in today and check us out!</p>
                        <img src="./img/kelian-cook.png" alt="" class="img-2-kelian">
                    </div>
                </div>
                <div class="column-right col-md-6 col-xs-3">
                    <img src="./img/kelian-Dish.png" alt="" class="img-3-kelian">
                </div>
            </div>
        </Section>



        <!-- Florian -->
        <Section>
            <!-- <div class="container-fluid d-flex flex-column justify-content-center"> -->
            <div class="bg-image-flo" style="background-image: url('./img/basilic.jpg');">
                <!-- <div class="container"><img src="./img/basilic.jpg" class="img-fluid" alt="Basilic dans un pot" /> -->
                <!-- <div class="carousel-caption"> -->

                <div class="row row-cols-md-2 row-cols-sm-1">
                    <div class="row">
                        <div class="col">
                        </div>
                    </div>
                    <!-- <div class="row"> -->
                    <div class="col text-center">
                        <!-- <div class="d-flex aligns-items-center"> -->
                        <div class="box boxflo">



                            <h5>Fine ingredients</h5>
                            <img src="./img/frise.svg" width="50%">
                            <p><br>If you’ve been to one of our restaurants, you’ve seen – and tasted – what
                                keeps our customers coming back for more. Perfect materials and freshly baked
                                food,
                                delicious Lambda cakes, muffins, and gourmet coffees make us hard to resist!
                                Stop in today and check us out!
                            </p>


                            <div class="row">

                                <div class="col text-center">
                                    <img src="./img/blé.jpg" height="90px" width="90px"
                                        class="rounded-circle  ingredient-pic-flo" alt="wheat picture">
                                </div>
                                <div class="col text-center">
                                    <img src="./img/épices.jpg" height="90px" width="90px"
                                        class="rounded-circle ingredient-pic-flo" alt="spices picture">
                                </div>
                                <div class="col text-center">
                                    <img src="./img/pain.jpg" height="90px" width="90px"
                                        class="rounded-circle ingredient-pic-flo" alt="breads picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </Section>



        <!-- Thomas -->

        <div class="container-fluid" id="Menu">
            <div class="container" id="Menu-content-container">
                <div class="row justify-content-between">
                    <div class="col-md-5" id="left-menu">
                        <h3 class="Menu-title">Appetisers</h3>
                        <p style="text-align:center;">
                            <img src="img/dividergold.png" class="gold-divider" width="50%">
                        </p>

                        <div class="flex-container">
                            <div>Tzatsiki</div>
                            <div>$3.99</div>
                        </div>
                        <hr class="separator">
                        <div id="ing">
                            <p class="ingredients">Refreshing traditional cucumber and garlic yoghurt dip.</p>
                        </div>


                        <div class="flex-container">
                            <div>Aubergine Salad</div>
                            <div>$5.50</div>
                        </div>
                        <hr class="separator">
                        <div id="ing">
                            <p class="ingredients">Pureed eggplant, garlic, green pepper and tomato dip.</p>
                        </div>


                        <div class="flex-container">
                            <div>Aubergine Salad</div>
                            <div>$5.25</div>
                        </div>
                        <hr class="separator">
                        <div id="ing">
                            <p class="ingredients">Pureed eggplant, garlic, green pepper and tomato dip.</p>
                        </div>

                        <!-- --------------------------SALADS -------------------------------------------------->

                        <h3 class="Menu-title Menu-title-bottom">Salads</h3>
                        <p style="text-align:center;">
                            <img src="img/dividergold.png" class="gold-divider" width="50%">
                        </p>

                        <div class="flex-container">
                            <div>Olive Special</div>
                            <div>$5.99</div>
                        </div>
                        <hr class="separator">
                        <div id="ing">
                            <p class="ingredients">Refreshing traditional cucumber and garlic yoghurt dip.</p>
                        </div>

                        <div class="flex-container">
                            <div>Greek Salad</div>
                            <div>$5.50</div>
                        </div>
                        <hr class="separator">
                        <div id="ing">
                            <p class="ingredients">Pureed eggplant, garlic, green pepper and tomato dip.</p>
                        </div>

                        <div class="flex-container">
                            <div>Gusto Salad</div>
                            <div>$5.25</div>
                        </div>
                        <hr class="separator">
                        <div id="ing">
                            <p class="ingredients">Pureed eggplant, garlic, green pepper and tomato dip.</p>
                        </div>

                    </div>
                    <div class="col-md-5" id="right-menu">

                        <!-- ------------------------------------------STARTERS------------------------------------------------------------ -->
                        <h3 class="Menu-title">Starters</h3>
                        <p style="text-align:center;">
                            <img src="img/dividergold.png" class="gold-divider" width="50%">
                        </p>
                        <div class="flex-container">
                            <div>Halouml</div>
                            <div>$3.99</div>
                        </div>
                        <hr class="separator">
                        <div id="ing">
                            <p class="ingredients">Refreshing traditional cucumber and garlic yoghurt dip.</p>
                        </div>

                        <div class="flex-container">
                            <div>Spinach Pie</div>
                            <div>$5.50</div>
                        </div>
                        <hr class="separator">
                        <div id="ing">
                            <p class="ingredients">Pureed eggplant, garlic, green pepper and tomato dip.</p>
                        </div>


                        <!-- -----------------------------------------------MAIN DISHES -------------------------------------------------->

                        <h3 class="Menu-title Menu-title-bottom">Main Dishes</h3>
                        <p style="text-align:center;">
                            <img src="img/dividergold.png" class="gold-divider" width="50%">
                        </p>

                        <div class="flex-container">
                            <div>Cornish Mackerel</div>
                            <div>$5.99</div>
                        </div>
                        <hr class="separator">
                        <div id="ing">
                            <p class="ingredients">Refreshing traditional cucumber and garlic yoghurt dip.</p>
                        </div>

                        <div class="flex-container">
                            <div>Roast Lamb</div>
                            <div>$5.50</div>
                        </div>
                        <hr class="separator">
                        <div id="ing">
                            <p class="ingredients">Pureed eggplant, garlic, green pepper and tomato dip.</p>
                        </div>

                        <div class="flex-container">
                            <div>Fried Chicken</div>
                            <div>$5.25</div>
                        </div>
                        <hr class="separator">
                        <div id="ing">
                            <p class="ingredients">Pureed eggplant, garlic, green pepper and tomato dip.</p>
                        </div>

                        <div class="flex-container">
                            <div>Pastitsio</div>
                            <div>$5.99</div>
                        </div>
                        <hr class="separator">
                        <div id="ing">
                            <p class="ingredients">Refreshing traditional cucumber and garlic yoghurt dip.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </Section>




        <!--Fellec-->
        <Section>
            <div class="container-fluid d-flex flex-column justify-content-center" id="Reviews-fellec">
                <div class="container-fellec">
                    <div class="row justify-content-center">
                        <div id="Reviews-text-bg" class="col-lg-4">
                            <h3>Guest Reviews</h3>
                            <img src="img/frise.svg" width="50%">
                            <div id="reviews" class="reviews-text-fellec">
                                <h5>
                                    <span id="gros-guillemets">&#8220;</span>If you’ve been to one of our restaurants,
                                    you’ve seen -and tasted- what keeps our customers
                                    coming back for more. Perfect materials and freshly baked food, delicious Lambda
                                    cakes,
                                    muffins, and gourmet coffees make us hard to resist! Stop in today and check us
                                    out!<br></p>
                                    <p>
                                </h5>
                                <h6>
                                    <p> -food inc,New York</p>
                                </h6>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </Section>



<!--Formulaire -->

<div class="container formul text-center">
     <div class="row no-gutters">
        <div class="col-md-3 col-sm-1 text-end">
             <img src="./img/assiette 2.png">
            </div>
            <div class="col-md-3 col-sm-1 text-start">
                 <img src="./img/assiette 3.png">
            </div>
             <div class="col-md-6 col-sm-3">
             <h3 class="Menu-title Menu-title-bottom">Just the right food</h3>
             <p style="text-align:center;">
             <img src="img/dividergold.png" class="gold-divider" width="50%">
             </p>
            <div class="container formul text-center">
            <div id="ing">
            <p class="ingredients">
                                If you’ve been to one of our restaurants, you’ve seen – and
                                tasted – what keeps our customers coming back for more.
                                Perfect materials and freshly baked food.
                                Delicious Lambda cakes, muffins, and gourmet coffees make
                                us hard to resist! Stop in today and check us out! Perfect
                                materials and freshly baked food.</p>

            <!--intégre le code PHP dans le document logic/contact-->
            <?php require_once('./logic_php/contact.php') ?>

            <div class="container formul text-start">
                <div class="row no-gutters">

                    <!--formulaire de CONTACT-->
                    <form id="contactForm" method="POST" action="./index.php#contactForm">
                                    <!--NAME-->
                                    <div class="left-col-form col-md-6 col-sm-1 gold-text">
                                        <label for="reservationform" class="form-id"><b>Name</b></label>
                                        <input type="text" class="form-control input-style" id="reservationform"
                                            placeholder="your name *" name="name">

                                            <?php if (isset($nameError)) { ?>
                                                <div><?php echo($nameError); ?></div>
                                            <?php } ?>
    
                                    </div>
                                    <!-- EMAIL -->
                                    <div class="right-col-form col-md-6 col-sm-1 gold-text">
                                        <label for="reservationform" class="form-id"><b>Email</b></label>
                                        <input type="email" class="form-control input-style" id="reservationform"
                                            placeholder="your email *" name="email">

                                            <?php if (isset($emailError)) { ?>
                                                <div><?php echo($emailError); ?></div>
                                            <?php } ?>
                                           

                                    </div>
                                    <!-- SUJET -->
                                    <div class="right-col-form col-md-6 col-sm-1 gold-text">
                                        <label for="reservationform" class="form-id"><b>Sujet</b></label>
                                        <input type="text" class="form-control input-style" id="reservationform"
                                            placeholder="subject *" name="sujet">

                                            <?php if (isset($sujetError)) { ?>
                                                <div><?php echo($sujetError); ?></div>
                                            <?php } ?>

                                    </div>
                                    </div>
                                    <!-- MESSAGE -->
                                    <div class="right-col-form col-md-6 col-sm-1 gold-text">
                                        <label for="reservationform" class="form-id"><b>Message</b></label>
                                        <textarea class="form-control input-style" id="reservationform"
                                            placeholder="your message *" name="message"></textarea>
                                            
                                            <!--affichage de message d'erreur si le champ n'est pas rempli-->
                                            <?php if (isset($messageError)) { ?>
                                                <div><?php echo($messageError); ?></div>
                                            <?php } ?>

                                    </div>
                                    <br>
                                     <!--input de type submit--> 
                                        <input type="submit" name="submit"></input>
                                    <br>

                                        <!--message de confirmation-->
                                        <?php if (isset($confirmation)) { ?>
                                            <div class="text-success"><?php echo($confirmation); ?></div>
                                        <?php } ?>

                                        <!--message d'erreur-->
                                        <?php if (isset($haserror)) { ?>
                                            <div class="text-warning"><?php echo($hasError); ?></div>
                                        <?php } ?>
                    </form>
                </div>
            </div>
    </main>
<?php require_once('./templates/footer.php') ?>