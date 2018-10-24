<div class="panel" data-x-pos="0"  data-y-pos="0">
    <div class="headframe">
        <div style="padding:20px;" class="formulaire">
            <div class="box">
                <div class="container-1">
                    <span class="icon"><i class="fa fa-search"></i></span>
                    <input type="search" id="search" placeholder="Rechercher..." />
                </div>
            </div>
        </div>
        <div class="head_T">
                <h1>ancrage local</h1>
                <div class="zoom_link"><span class="panel__zoom js-zoom">entraide & culture</span></div>
            </div>
        <?php include 'm.menu.view.php';?>
        </div>
    </div>
    </div>
        </div>
        <!---------------conteneur ancrage local------------------->
        <div id="conteneur">
            <div class=column_A_accueil>
            <span class="panel__zoom2 js-zoom">
                  <div class="cerclem">
                     <div class="logo"><img src= "View/img/logo-without.png" alt=""/></div>
                  </div>
               </span>
            </div>
            <div class=column_A>
                <div class=zoom>
                    <div class="col-lg-1 padbot30 gallery_img lorem" id="grandephotoancrage">
                        <a href="View/images/gallery/hands_512.jpg" data-gal="prettyPhoto[gal]">
                            <i></i>
                            <img src="View/images/gallery/hands_512.jpg" alt="" style="    width: 100%;
    height: 100%;"/></a>
                    </div>
                </div>
                <script type="text/javascript">
                    function afficheGrandePhotoancrage(imageCliquee) {
                        /* je récupère dans l'attribut alt de l'image cliquée son nom */
                        console.log("afficheGrandePhoto : " + imageCliquee.alt);
                        /* URL de la vignette cliquée ? */
                        var URLvignette = imageCliquee.getAttribute("src");
                        console.log("URL de la photo cliquée : " + URLvignette);
                        /* Enlever dans l'URL de ma vignette le "128" et le remplacer par "512" pour avoir l'URL de la grande photo correspondante */
                        var URLgrandephoto = URLvignette.substr(0, (URLvignette.length - 7)) + "512.jpg";
                        console.log(URLgrandephoto);
                        /* Modifier l'attribut src de la grande photo */
                        var grandePhoto = document.querySelector("#grandephotoancrage img");
                        grandePhoto.setAttribute("src", URLgrandephoto);
                        grandePhoto.setAttribute("alt", imageCliquee.alt);
                    }
                </script>
                <div id="global">
                    <section>


                    </section>
                    <section id="vignettes">
                        <ul>
                            <li><img src="View/images/gallery/fire_128.jpg" alt="" width="128" height="96" onclick="afficheGrandePhotoancrage(this);"/></li>
                            <li><img src="View/images/gallery/ae_128.jpg" alt="" width="128" height="96" onclick="afficheGrandePhotoancrage(this);" /></li>
                            <li><img src="View/images/gallery/cercle_128.jpg" alt="" width="128" height="96" onclick="afficheGrandePhotoancrage(this);" /></li>
                        </ul>
                    </section>
                </div>
                <div class="imagePara">
                    <p>L’ASBL Entraide et Culture, créée en 1983 à Forest par des bénévoles, apporte une aide et un soutien à un public précarisé et fragilisé.</p>
                </div>

            </div>
            <div class=column_B>
                <div class="titlePresentation"><?php
                    $take = $listView[0];
                    echo $take->getThetitle();
                    ?></div>
                <h2>local</h2>
                <div id="myDIVpresentation"></div>

                <div class="paraPresentation">

                    <br>
                    <?php
                    echo $take->getThetext();
                    ?>

            --></div>
        </div>
            <div class="socialgAccueil">
                <div class="socialf"><a href="https://www.facebook.com/entraideetculture/" class="social">
                        <img src="View/img/facebook.png" alt="facebook"/></a></hr><p>&copy;<?php echo date("Y");?></p>
                </div>
            </div>
    <!--------------- END conteneur ancrage locale------------------->
</div>
