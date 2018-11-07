<div class="panel" data-x-pos="0"  data-y-pos="0">
    <div class="headframe">
        <div style="padding:20px;" class="formulaire">
            <div class="box">

            </div>
        </div>
        <div class="head_T">
            <h1>entraide</h1>
            <div class="zoom_link"><span class="panel__zoom js-zoom">entraide & culture</span></div>
        </div>
        <?php include 'm.menu.view.php';?>
    </div>
</div>
</div>
    </div>
    <!---------------conteneur entraide------------------->
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
                <div class="col-lg-1 padbot30 gallery_img lorem"><a href="View/img/entraide.png" data-gal="prettyPhoto[gal]"><i></i><img src="View/img/entraide.png" alt="" style="width: 100%;" /></a></div>
            </div>
            <div class="imagePara">
                <p>L’ASBL Entraide et Culture, créée en 1983 à Forest par des bénévoles, apporte une aide et un soutien à un public précarisé et fragilisé.</p>
            </div>
        </div>
        <div class=column_B>
            <div id="myDIVentraide"></div>
            <div class="tab">
                <button class="tablinks" onclick="document.location.href='?m=entraide#Entraide';">Entraide</button>
                <button class="tablinks" onclick="document.location.href='?m=entraide#ServiceS';">Service Social</button>
                <button class="tablinks" onclick="document.location.href='?m=entraide#AideAd';">Aide à domicile</button>
                <button class="tablinks" onclick="document.location.href='?m=entraide#AideA';">Aide alimentaire</button>
                <button class="tablinks" onclick="document.location.href='?m=entraide#VestiaireS';">Vestiaire social</button>
            </div>
            <div class="titleParaPoleEntraide"><?php
                $take = $listView[2];
                echo $take->getSoustitre();
                ?></div>
            <div id="Entraide" class="tabcontent">
                <h2><?php

                echo $take->getThetitle();
                    ?></h2>
                <div class="paraEntraide">
                    <h2></h2>
                    <br>
                    <br>
                    <?php echo $take->getThetext();
                    ?>
                </div>
            </div>
            <div class="titleParaPoleEntraide"><?php
                $take = $listView[12];
                echo $take->getSoustitre();
                ?></div>
            <div id="SocialS" class="tabcontent">

                <h2><?php
                    echo $take->getThetitle();
                    ?></h2>
                <div class="paraEntraide">

                    <br>


                    <?php echo $take->getThetext();
                    ?>

                </div>
            <div class="titleParaPoleEntraide"><?php
                $take = $listView[13];
                echo $take->getSoustitre();
                ?></div>
            <div id="AideAd" class="tabcontent">
                <h2><?php
                    echo $take->getThetitle();
                    ?></h2>
                <div class="paraEntraide">

                    <br>
                    <br>
                    <?php echo $take->getThetext();
                    ?>

                </div>
            </div>
            <div class="titleParaPoleEntraide"><?php
                $take = $listView[14];
                echo $take->getSoustitre();
                ?></div>
            <div id="AideA" class="tabcontent">
                <h2><?php
                    echo $take->getThetitle();
                    ?></h2>
                <div class="paraEntraide">

                    <br>
                    <br>
                    <?php echo $take->getThetext();
                    ?>
                </div>
            </div>
            <div class="titleParaPoleEntraide"><?php
                $take = $listView[15];
                echo $take->getSoustitre();
                ?></div>
            <div id="VestiaireS" class="tabcontent">
                <h2><?php

                    echo $take->getThetitle();
                    ?></h2>
                <div class="paraEntraide">

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
    <!---------------END conteneur entraide------------------->
</div>