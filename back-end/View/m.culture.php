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
            <h1>culture</h1>
            <div class="zoom_link"><span class="panel__zoom js-zoom">entraide & culture</span></div>
        </div>
        <?php include 'm.menu.view.php';?>
    </div>
</div>
</div>
    </div>
    <!---------------conteneur culture------------------->
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
                <button class="tablink" onclick="document.location.href='?m=culture#Culture';">Culture</button>
                <button class="tablink" onclick="document.location.href='?m=culture#Alphabetisation';">Alphabétisation</button>
                <button class="tablink" onclick="document.location.href='?m=culture#Ecole';">Ecole des devoirs</button>
                <button class="tablink" onclick="document.location.href='?m=culture#Ntic';">N.T.I.C</button>
            </div>
            <div class="titleParaPoleCulture">Pôle</div>

            <div id="Culture" class="tabcontent1">
                <h2><?php
                    $take = $listView[6];
                    echo $take->getThetitle();
                    ?></h2>
            <div class="paraCulture">
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
        <div class="socialgAccueil">
            <div class="socialf"><a href="https://www.facebook.com/entraideetculture/" class="social">
                    <img src="View/img/facebook.png" alt="facebook"/></a></hr><p>&copy;<?php echo date("Y");?></p>
            </div>
        </div>
    <!---------------END conteneur culture------------------->
</div>