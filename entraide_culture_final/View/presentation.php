<div class="panel" data-x-pos="0"  data-y-pos="1">
    <div class="headframe">
        <div class="head-l">
            <div class="socialg">
                <div class="socialf"><a href="https://www.facebook.com/entraideetculture/" class="social"><img src="View/img/facebook.png" alt="facebook"/></a></div>

            </div>
            <span class="panel__zoom1 js-zoom">
                    <div class="cercle1">
                       <div class="logo1"><img src= "View/img/logo-without.png" alt=""/></div>
                    </div>
                </span>
        </div>
        <div style="padding:20px;" class="formulaire">
            <div class="box">
                <div class="container-1">
                    <span class="icon"><i class="fa fa-search"></i></span>
                    <input type="search" id="search" placeholder="Rechercher..." />
                </div>
            </div>
        </div>
        <div class="head_T">
            <h1>presentation</h1>
            <div class="zoom_link"><span class="panel__zoom js-zoom">entraide & culture</span></div>
        </div>
        <nav class="main-nav">
            <ul>
                <li>
                           <span class="panel__nav panel__nav--down js-down">
                              <div class="smile"><img src="View/img/smile.png" alt="" width="31"/></div>
                              <div class="line">accueil</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__selected">
                              <div class="visit"><img src="View/img/visit.png" alt="" width="35"/></div>
                              <div class="line">presentation</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--left js-left">
                              <div class="whee"><img src="View/img/wheelses.png" alt="" width="32"/></div>
                              <div class="line">ancrage local</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--left-down js-down js-left" onclick="texts(event, 'Entraide')">
                              <div class="hands"><img src="View/img/hands.png" alt="" width="33"/></div>
                              <div class="line">entraide</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--right-down js-down js-right" onclick="text(event, 'Culture')">
                              <div class="glasses"><img src="View/img/glasses.png" alt="" width="34"/></div>
                              <div class="line">culture</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--right-top js-right">
                              <div class="arbo"><img src="View/img/arbo.png" alt="" width="33"/></div>
                              <div class="line">asbl mapping</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--down jsdownb">
                              <div class="location"><img src="View/img/location.png" alt="" width="33"/></div>
                              <div class="line">infos pratiques</div>
                           </span>
                </li>
            </ul>
        </nav>
    </div>
    <!---------------conteneur présentation------------------->
    <div id="conteneur">
        <div class=column_A>
            <div class=zoom>
                <div class="col-lg-1 padbot30 gallery_img lorem" id="grandephoto">
                    <a href="View/images/gallery/murs_512.jpg" data-gal="prettyPhoto[gal]">
                        <i></i>
                        <img src="View/images/gallery/murs_512.jpg" alt="" style="width: 100%;
    height: 100%;" /></a>
                </div>
            </div>

            <script type="text/javascript">
                function afficheGrandePhoto(imageCliquee) {
                    /* je récupère dans l'attribut alt de l'image cliquée son nom */
                    console.log("afficheGrandePhoto : " + imageCliquee.alt);
                    /* URL de la vignette cliquée ? */
                    var URLvignette = imageCliquee.getAttribute("src");
                    console.log("URL de la photo cliquée : " + URLvignette);
                    /* Enlever dans l'URL de ma vignette le "128" et le remplacer par "512" pour avoir l'URL de la grande photo correspondante */
                    var URLgrandephoto = URLvignette.substr(0,(URLvignette.length - 7)) + "512.jpg";
                    console.log(URLgrandephoto);
                    /* Modifier l'attribut src de la grande photo */
                    var grandePhoto = document.querySelector("#grandephoto img");
                    grandePhoto.setAttribute("src", URLgrandephoto);
                    grandePhoto.setAttribute("alt", imageCliquee.alt);
                }
            </script>
            <div id="global">
                <section>


                </section>
                <section id="vignettes">
                    <ul>
                        <li><img src="View/images/gallery/brico_128.jpg" alt="" width="128" height="96" onclick="afficheGrandePhoto(this);" /></li>
                        <li><img src="View/images/gallery/group_128.jpg" alt="" width="128" height="96" onclick="afficheGrandePhoto(this);"/></li>
                        <li><img src="View/images/gallery/murs_128.jpg" alt="" width="128" height="96" onclick="afficheGrandePhoto(this);" /></li>
                        <li><img src="View/images/gallery/skeleton_128.jpg" alt="" width="128" height="96" onclick="afficheGrandePhoto(this);" /></li>
                        <li><img src="View/images/gallery/tapis_128.jpg" alt="" width="128" height="96" onclick="afficheGrandePhoto(this);" /></li>
                    </ul>
                </section>
            </div>
            <div class="imagePara">
                <p>L’ASBL Entraide et Culture, créée en 1983 à Forest par des bénévoles, apporte une aide et un soutien à un public précarisé et fragilisé.</p>
            </div>
        </div>
        <div class=column_B>
            <div id="myDIVpresentation"></div>
            <div class="titlePresentation"><?php
                $take = $listView[1];
                echo $take->getThetitle();
                ?></div>
            <h2>sommes-nous ?</h2>
            <div class="paraPresentation">
                <h2></h2>
                <br>
                <br>
                <?php echo $take->getThetext();
                ?>
            </div>

        </div>
    </div>
    <!--------------- END conteneur présentation------------------->
</div>