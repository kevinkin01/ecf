<div class="panel" data-x-pos="1"  data-y-pos="0">
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
            <h1>culture</h1>
            <div class="zoom_link"><span class="panel__zoom js-zoom">entraide & culture</span></div>
        </div>
        <nav class="main-nav">
            <ul>
                <li>
                           <span class="panel__nav panel__nav--left js-left">
                              <div class="smile"><img src="View/img/smile.png" alt="" width="31"/></div>
                              <div class="line">accueil</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--left-top js-up js-left">
                              <div class="visit"><img src="View/img/visit.png" alt="" width="35"/></div>
                              <div class="line">presentation</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--left moveM2xP1y">
                              <div class="whee"><img src="View/img/wheelses.png" alt="" width="32"/></div>
                              <div class="line">ancrage local</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--left jsleftc" onclick="texts(event, 'Entraide')">
                              <div class="hands"><img src="View/img/hands.png" alt="" width="33"/></div>
                              <div class="line">entraide</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__selected">
                              <div class="glasses"><img src="View/img/glasses.png" alt="" width="34"/></div>
                              <div class="line">culture</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--up js-up">
                              <div class="arbo"><img src="View/img/arbo.png" alt="" width="33"/></div>
                              <div class="line">asbl mapping</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--left-down js-down js-left">
                              <div class="location"><img src="View/img/location.png" alt="" width="33"/></div>
                              <div class="line">infos pratiques</div>
                           </span>
                </li>
            </ul>
        </nav>
    </div>
    <!---------------conteneur culture------------------->
    <div id="conteneur">
        <div class=column_A>
            <div class=zoom>
                <div class="col-lg-1 padbot30 gallery_img lorem">
                    <a href="View/img/culture.png" data-gal="prettyPhoto[gal]"><i></i><img src="View/img/culture.png" alt="" style="width: 100%;" /></a>
                </div>
            </div>
            <div class="imagePara">
                <p>L’ASBL Entraide et Culture, créée en 1983 à Forest par des bénévoles, apporte une aide et un soutien à un public précarisé et fragilisé.</p>
            </div>
        </div>
        <div class=column_B>
            <div id="myDIVculture"></div>
            <div class="tab">
                <button class="tablink" onclick="text(event, 'Culture')">Culture</button>
                <button class="tablink" onclick="text(event, 'Alphabetisation')">Alphabétisation</button>
                <button class="tablink" onclick="text(event, 'Ecole')">Ecole des devoirs</button>
                <button class="tablink" onclick="text(event, 'Ntic')">N.T.I.C</button>
            </div>
            <div class="titleParaPoleCulture">Pôle</div>

            <div id="Culture" class="tabcontent1">
                <h2><?php
                    $take = $listView[6];
                    echo $take->getThetitle();
                    ?></h2>
            <div class="paraCulture">

                <br>
                <br>
                <?php echo $take->getThetext();
                ?>

                </div>
            </div>
            <div id="Alphabetisation" class="tabcontent1">
                <h2><?php
                    $take = $listView[10];
                    echo $take->getThetitle();
                    ?></h2>
                <div class="paraCulture">

                    <br>
                    <br>
                    <?php echo $take->getThetext();
                    ?>

                </div>
            </div>
            <div id="Ecole" class="tabcontent1">
                <h2><?php
                    $take = $listView[11];
                    echo $take->getThetitle();
                    ?></h2>
                <div class="paraCulture">

                    <br>
                    <br>
                    <?php echo $take->getThetext();
                    ?>
                </div>
            </div>
            <div id="Ntic" class="tabcontent1">
                <h2><?php
                    $take = $listView[12];
                    echo $take->getThetitle();
                    ?></h2>
                <div class="paraCulture">

                    <br>
                    <br>
                    <?php echo $take->getThetext();
                    ?>
                </div>
            </div>

        </div>
    </div>
    <!---------------END conteneur culture------------------->
</div>