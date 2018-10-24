<div class="panel" data-x-pos="-1"  data-y-pos="1">
    <div class="headframe">
        <div class="head-l">
            <div class="socialg">
                <div class="socialf"><a href="https://www.facebook.com/entraideetculture/" class="social"><img src="img/facebook.png" alt="facebook"/></a></div>
            </div>
            <span class="panel__zoom1 js-zoom">
                    <div class="cercle1">
                       <div class="logo1"><img src= "img/logo-without.png" alt=""/></div>
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
            <h1>ancrage local</h1>
            <div class="zoom_link"><span class="panel__zoom js-zoom">entraide & culture</span></div>
        </div>
        <nav class="main-nav">
            <ul>
                <li>
                           <span class="panel__nav panel__nav--right-down js-down js-right">
                              <div class="smile"><img src="img/smile.png" alt="" width="31"/></div>
                              <div class="line">accueil</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--right js-right">
                              <div class="visit"><img src="img/visit.png" alt="" width="35"/></div>
                              <div class="line">presentation</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__selected">
                              <div class="whee"><img src="img/wheelses.png" alt="" width="32"/></div>
                              <div class="line">ancrage local</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--down js-down" onclick="texts(event, 'Entraide')">
                              <div class="hands"><img src="img/hands.png" alt="" width="33"/></div>
                              <div class="line">entraide</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--right-down jsrightb" onclick="text(event, 'Culture')">
                              <div class="glasses"><img src="img/glasses.png" alt="" width="34"/></div>
                              <div class="line">culture</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--right jsleftb">
                              <div class="arbo"><img src="img/arbo.png" alt="" width="33"/></div>
                              <div class="line">asbl mapping</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--right-down jsupb">
                              <div class="location"><img src="img/location.png" alt="" width="33"/></div>
                              <div class="line">infos pratiques</div>
                           </span>
                </li>
            </ul>
        </nav>
    </div>
    <!---------------conteneur ancrage local------------------->
    <div id="conteneur">
        <div class=column_A>
            <div class=zoom>
                <div class="col-lg-1 padbot30 gallery_img lorem" id="grandephotoancrage">
                    <a href="images/gallery/ae_512.jpg" data-gal="prettyPhoto[gal]">
                        <i></i>
                        <img src="images/gallery/ae_512.jpg" alt="" style="width: 100%;
    height: 100%;" /></a>
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
                    var URLgrandephoto = URLvignette.substr(0,(URLvignette.length - 7)) + "512.jpg";
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
                        <li><img src="images/gallery/fire_128.jpg" alt="" width="128" height="96" onclick="afficheGrandePhotoancrage(this);"/></li>
                        <li><img src="images/gallery/ae_128.jpg" alt="" width="128" height="96" onclick="afficheGrandePhotoancrage(this);" /></li>
                        <li><img src="images/gallery/cercle_128.jpg" alt="" width="128" height="96" onclick="afficheGrandePhotoancrage(this);" /></li>
                    </ul>
                </section>
            </div>
            <div class="imagePara">
                <p>L’ASBL Entraide et Culture, créée en 1983 à Forest par des bénévoles, apporte une aide et un soutien à un public précarisé et fragilisé.</p>
            </div>
        </div>
        <div class=column_B>
            <div id="myDIVpresentation"></div>
            <div class="titlePresentation">ancrage</div>
                <h2>local</h2>
            <div class="paraPresentation">
                <strong>« Revitaliser : apporter une vitalité nouvelle. »</strong><br>
                <br>
                Grâce à la région de Bruxelles-Capital dans le cadre d’un large programme appelé « Politique de la Ville », la commune de Forest a pu bénéficier d’un financement permettant de revitaliser le quartier Saint-Antoine.
                Pour ce faire, 4 acteurs communaux et associatifs œuvrent depuis janvier 2018 au développement du site de l’Imprimerie, au développement de partenariats et à l’amélioration de la visibilité de ce qui existe déjà dans le quartier. <br>
                Naturellement, des démarches participatives et inclusives pour les habitants du quartier sont privilégiées. <br>
                Entraide & Culture est l’un de ces acteurs avec la Maison de Quartier Saint-Antoine, la Cellule Environnement de la commune et Forest Quartier Santé. <br>
                <br>
                Le site Imprimerie (située au n°5 de la rue de l’Imprimerie) prend place dans un quartier qui propose peu d’espaces verts et récréatifs où, pourtant, la densité de population est élevée. Ce site, avec son potager pédagogique comme vitrine, présente un riche potentiel de convivialité, d’espaces publics et d’amélioration du cadre de vie. <br>
                L'enjeu à relever dans les trois années à venir sera de faire de ce lieu un réel pôle d’activités œuvrant au mieux-vivre ensemble et à l’amélioration du cadre de vie des habitants.
                <br><br>
                Pour rendre le potager visible et accessible à tous, un panel varié d’activités est proposé aux habitants pour qu’ils se rencontrent autour de thématiques porteuses de sens et de convivialité, de découvrir certaines infrastructures de leur quartier en le décloisonnant, de développer collectivement un regard citoyen sur celui-ci et de le réinvestir positivement. <br><br>
                En résumé, depuis le début de l’année Entraide & Culture a organisé : <br>
                -	Une séance de sensibilisation aux écrans en février <br>
                -	Une séance d’information sur le vote communal en mars <br>
                -	La fête des voisins du quartier Saint-Antoine en mai <br>
                -	Une marche exploratoire en juin <br>
                -	Une soirée pizza avec retransmission des huitièmes de final des Diables en juillet <br>
                -	Une soirée pizza cinéma en août <br>
                -	Une bourse de matériel scolaire en septembre <br><br>
                Ont également été lancé la gazette de quartier nommée « La Gazette d’Antoine » et le blog qui va avec. Celui-ci permet de retrouver toute l’actu de quartier. Cliquez ici pour le consulter et cliquez ici pour télécharger la dernière Gazette. <br>
                <br>
                <a href="http://www.leblogdantoine.be/">http://www.leblogdantoine.be/</a>
                </br></br></br></br></br></br></br></br></br>
            </div>
        </div>
    </div>
    <!--------------- END conteneur ancrage locale------------------->
</div>
