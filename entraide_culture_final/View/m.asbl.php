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
            <h1>asbl mapping</h1>
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
                <div class="col-lg-1 padbot30 gallery_img lorem" id="grandephotoasbl">
                    <a href="View/images/gallery/hands_512.jpg" data-gal="prettyPhoto[gal]">
                        <i></i>
                        <img src="View/images/gallery/hands_512.jpg" alt="" style="width: 100%;" /></a>
                </div>
            </div>
            <script type="text/javascript">
                function afficheGrandePhotoasbl(imageCliquee) {
                    /* je récupère dans l'attribut alt de l'image cliquée son nom */
                    console.log("afficheGrandePhoto : " + imageCliquee.alt);
                    /* URL de la vignette cliquée ? */
                    var URLvignette = imageCliquee.getAttribute("src");
                    console.log("URL de la photo cliquée : " + URLvignette);
                    /* Enlever dans l'URL de ma vignette le "128" et le remplacer par "512" pour avoir l'URL de la grande photo correspondante */
                    var URLgrandephoto = URLvignette.substr(0,(URLvignette.length - 7)) + "512.jpg";
                    console.log(URLgrandephoto);
                    /* Modifier l'attribut src de la grande photo */
                    var grandePhoto = document.querySelector("#grandephotoasbl img");
                    grandePhoto.setAttribute("src", URLgrandephoto);
                    grandePhoto.setAttribute("alt", imageCliquee.alt);
                }
            </script>
            <div id="global">
                <section>


                </section>
                <section id="vignettes">
                    <ul>
                        <li><img src="View/images/gallery/child_128.jpg" alt="" width="128" height="96" onclick="afficheGrandePhotoasbl(this);" /></li>
                        <li><img src="View/images/gallery/hands_128.jpg" alt="" width="128" height="96" onclick="afficheGrandePhotoasbl(this);"/></li>
                        <li><img src="View/images/gallery/bike_128.jpg" alt="" width="128" height="96" onclick="afficheGrandePhotoasbl(this);" /></li>
                    </ul>
                </section>
            </div>
            <div class="imagePara">
                <p>L’ASBL Entraide et Culture, créée en 1983 à Forest par des bénévoles, apporte une aide et un soutien à un public précarisé et fragilisé.</p>
            </div>
        </div>
        <div class=column_B>
            <div id="myDIVpresentation"></div>
            <div class="titlePresentation">asbl</div>
            <h2>mapping</h2>
            <br>
            <br>
            <div class="asblmapping">
                <object data="View/img/mindmapEC.svg" width="90%"
                        height="90%" type="image/svg+xml">
                    <embed src="View/img/mindmapEC.svg" width="500"
                           height="500" type="image/svg+xml" />
                </object>
            </div>

        </div>
        <div class="socialgAccueil">
            <div class="socialf"><a href="https://www.facebook.com/entraideetculture/" class="social">
                    <img src="View/img/facebook.png" alt="facebook"/></a></hr><p>&copy;<?php echo date("Y");?></p>
            </div>
        </div>
    <!--------------- END conteneur ancrage locale------------------->
</div>
