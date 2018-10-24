<div class="panel" data-x-pos="0"  data-y-pos="0">
    <div class="headframe">
        <div class="socialgAccueil">
            <div class="socialf"><a href="https://www.facebook.com/entraideetculture/" class="social">
                    <img src="View/img/facebook.png" alt="facebook"/></a>
            </div>

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
            <h1>accueil</h1>
            <div class="zoom_link"><span class="panel__zoom js-zoom">entraide & culture</span></div>
        </div>
        <nav class="main-nav">
            <ul>
                <li>
                           <span class="panel__nav panel__selected">
                              <div class="smile">
                                 <img src="View/img/smile.png" alt="" width="31"/>
                              </div>
                              <div class="line">accueil</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--up js-up">
                              <div class="visit">
                                 <img src="View/img/visit.png" alt="" width="35"/>
                              </div>
                              <div class="line">presentation</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--left-top js-up js-left">
                              <div class="whee">
                                 <img src="View/img/wheelses.png" alt="" width="32"/>
                              </div>
                              <div class="line">ancrage local</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--left js-left" onclick="texts(event, 'Entraide')">
                              <div class="hands">
                                 <img src="View/img/hands.png" alt="" width="33"/>
                              </div>
                              <div class="line">entraide</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--right js-right" onclick="text(event, 'Culture')">
                              <div class="glasses">
                                 <img src="View/img/glasses.png" alt="" width="34"/>
                              </div>
                              <div class="line">culture</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--right-top js-up js-right">
                              <div class="arbo">
                                 <img src="View/img/arbo.png" alt="" width="33"/>
                              </div>
                              <div class="line">asbl mapping</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--down js-down">
                              <div class="location">
                                 <img src="View/img/location.png" alt="" width="33"/>
                              </div>
                              <div class="line">infos pratiques</div>
                           </span>
                </li>
            </ul>
        </nav>
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
                           <img src= "View/img/e-yellow.png" onclick="texts(event, 'Entraide')"/>
                        </div>
                        <button class="e0" onclick="texts(event, 'Entraide')">Entraide</button>
                        <div class="panel__nav">
                           <button class="e3" onclick="texts(event, 'AideA')">Aide alimentaire</button>
                           <br>
                           <button class="e3" onclick="texts(event, 'AideAd')">Aide à domicile</button>
                           <br>
                           <button class="e3" onclick="texts(event, 'VestiaireS')">Vestiaire social</button>
                        </div>
                     </span>
            </div>
        </div>
        <div class="formetitre2">
            <div class="texteculture">
                     <span class="panel__nav panel__nav--right js-right">
                        <div class="c-green">
                           <img src= "View/img/c-green.png" onclick="text(event, 'Culture')"/>
                        </div>
                        <button class="e1" onclick="text(event, 'Culture')">Culture</button>
                        <div class="panel__nav">
                           <div class="anext">
                              <button class="e2" onclick="text(event, 'Alphabetisation')">alphabétisation</button>
                              <br>
                              <button class="e2" onclick="text(event, 'Ecole')">école des devoirs</button>
                              <br>
                              <button class="e2" onclick="text(event, 'Ntic')">n.t.i.c</button>
                           </div>
                     </span>
            </div>
        </div>
        </div>
  </div>
    <div class="panel__animation-list">
    </div>
</div>
</div>