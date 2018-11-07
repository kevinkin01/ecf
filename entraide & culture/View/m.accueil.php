<div class="panel" data-x-pos="0"  data-y-pos="0">
    <div class="headframe">
        <div style="padding:20px;" class="formulaire">
            <div class="box">

            </div>
        </div>
        <div class="head_T">
            <h1>accueil</h1>
            <div class="zoom_link"><span class="panel__zoom js-zoom">entraide & culture</span></div>
        </div>
        <?php include 'm.menu.view.php';?>
    </div>
    <!---------------conteneur accueil------------------->
    <div id="conteneur">
        <div class=column_A_accueil>
            <span class="panel__zoom2 js-zoom">
                  <div class="cercle">
                     <div class="logo"><img src= "View/img/logo-without.png" alt=""/></div>
                  </div>
               </span>
        </div>
        <div class=column_B_accueil>
         <div id="myDIVentraide"></div>
        <div class="mainTexte">
            <p>ASBL FONDÉE EN 1983 APPORTE UNE AIDE ET </br> UN SOUTIEN À UN PUBLIC PRÉCARISÉ ET FRAGILISÉ.</p>
        </div>
        <div class="formetitre1">
            <div class="texteculture">
                     <span class="panel__nav panel__nav--left js-left">
                        <div class="e-yellow">
                           <img src= "View/img/e-yellow.png" onclick="document.location.href='?m=entraide#Entraide';"/>
                        </div>
                        <button class="e0" onclick="document.location.href='?m=entraide#Entraide';">Entraide</button>
                        <div class="panel__nav">
                           <button class="e3" onclick="document.location.href='?m=entraide#AideA';">Aide alimentaire</button>
                           <br>
                           <button class="e3" onclick="document.location.href='?m=entraide#AideAd';">Aide à domicile</button>
                           <br>
                           <button class="e3" onclick="document.location.href='?m=entraide#VestiaireS';">Vestiaire social</button>
                        </div>
                     </span>
            </div>
        </div>
        <div class="formetitre2">
            <div class="texteculture">
                     <span class="panel__nav panel__nav--right js-right">
                        <div class="c-green">
                           <img src= "View/img/c-green.png" onclick="document.location.href='?m=culture#Culture';"/>
                        </div>
                        <button class="e1" onclick="document.location.href='?m=culture#Culture';">Culture</button>
                        <div class="panel__nav">
                           <div class="anext">
                              <button class="e2"  onclick="document.location.href='?m=culture#Alphabetisation';" >alphabétisation</button>
                              <br>
                              <button class="e2" onclick="document.location.href='?m=culture#Ecole';">école des devoirs</button>
                              <br>
                              <button class="e2" onclick="document.location.href='?m=culture#Ntic';">n.t.i.c</button>
                           </div>
                     </span>
            </div>
        </div>
        </div>

  </div>
    <div class="panel__animation-list">
    </div>
    <div class="socialgAccueil">
        <div class="socialf"><a href="https://www.facebook.com/entraideetculture/" class="social">
                <img src="View/img/facebook.png" alt="facebook"/></a></hr><p>&copy;<?php echo date("Y");?></p>
        </div>
    </div>
</div>
</div>