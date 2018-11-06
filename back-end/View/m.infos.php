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
            <h1>infos pratiques</h1>
            <div class="zoom_link"><span class="panel__zoom js-zoom">entraide & culture</span></div>
        </div>
        <?php include 'm.menu.view.php';?>
    </div>
</div>
</div>
    </div>
    <!---------------conteneur infos pratiques------------------->
    <div id="conteneur">
        <div class=column_A_accueil>
            <span class="panel__zoom2 js-zoom">
                  <div class="cerclem">
                     <div class="logo"><img src= "View/img/logo-without.png" alt=""/></div>
                  </div>
               </span>
        </div>
            <div class=column_A_accueil>
                <div class="rowmap">
                    <div class="col-lg-4 col-md-4 padbot30">
                        <div id="map">
                            <iframe height="300" style="border:none; scrolling:no; marginheight:0; marginwidth:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26448.534201747054!2d-118.24590761238238!3d34.042158170531856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+California%2C+Stati+Uniti!5e0!3m2!1sit!2sit!4v1422286433932">
                            </iframe>
                        </div>
                    </div>
                </div>

        <div class=column_A>
            <div class="padbot30">
                <div class="clients_description">
                    <div class="blocPartenaires">
                        <div class="titrePartenaires">
                            <h3></h3>
                        </div>
                        <br>
                        <div class="textePartenaires">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>   </div>
            <div class=column_B_accueil style="overflow: auto;">

                <div id="myDIVentraide"></div>
                <div class="mainTexte">
                    <p>ASBL FONDÉE EN 1983 APPORTE UNE AIDE ET </br> UN SOUTIEN À UN PUBLIC PRÉCARISÉ ET FRAGILISÉ.</p>
                </div>
                <div class="formeinfo1">
                    <div class="col-lg-4 col-md-4 padbot30 our_office_wrap">
                        <div id="contact-form">
                            <div id="sendmessage">Votre message a été bien envoyé. Merci!</div>
                            <form class="contactForm" action="contact/contact.php" method="post" >
                                <div class="form-group">
                                    <input id="name" type="text" name="name" placeholder="Nom" data-rule="maxlen:4" data-msg="SVP, entrer minimun 4 charactères" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" name="email" placeholder="E-mail" data-rule="email" data-msg="Votre e-mail" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="Message" data-rule="required" data-msg="SVP, écrire votre message"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <button type="submit">Envoyer message</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="formeinfo2">
                    <section id="contacts">
                        <!-- Container contacts -->
                        <div class="adresse">
                            <div class="page_title center">
                            </div>
                            <!-- Row -->

                            <div class="col-md-4 padbot30 our_office_wrap">
                                <h6>Notre location</h6>
                                <p>Avenue Van Volxem,<br>525 à 1190 Forest</p>
                                <p>E-mail : secretariat@entraideetculture.be</p>
                                <p>Tél. : 02 539 43 60</p>
                                <p>Fax : 02 539 43 70</p>
                                <br>
                                <h6>Réseau social</h6>
                                <div class="socialgAccueil">
                                    <div class="socialf"><a href="https://www.facebook.com/entraideetculture/" class="social">
                                            <img src="View/img/facebook.png" alt="facebook"/></a>
                                    </div>
                            </div>

                        </div>
                        <!-- //Row -->
                </div>
        <div class=column_Binfo style="
             grid-column: 1/3;
                margin-top: 45px;
                ">
            <div class="titleInfo">Nos soutients</div>
            <div class="padbot30">
                <div class="row clients_wrap">
                    <a class="client_logo" href="http://www.actiris.be/tabid/173/language/fr-BE/A-propos-d-Actiris.aspx" target="_blank" style="    grid-column: 1;
    grid-row: 1;"><img src="View/img/AC.png" alt=""  style="width: 60%;"/></a>

                    <a class="client_logo" href="https://www.spfb.brussels/" target="_blank" style=" grid-column: 2; grid-row: 1; " ><img src="View/img/CO.png" alt="" style="width: 80%; padding-bottom: 30%;"/></a>

                    <a class="client_logo" href="http://www.forest.irisnet.be/" target="_blank" style=" grid-column: 1; grid-row: 2; "><img src="View/img/FR.png" alt=""  style="width: 80%;   padding-bottom: 30%;" /></a>

                    <a class="client_logo" href="http://www.federation-wallonie-bruxelles.be/" target="_blank" style="grid-column: 2;
    grid-row: 2;"><img src="View/img/RE.png" alt=""  style="width: 80%;"/></a>

                    <a class="client_logo"href="http://www.one.be/" target="_blank" style="grid-column: 1;
    grid-row: 3;"><img src="View/img/NE.png" alt=""  style="width: 80%;padding-bottom: 30%;" /></a>

                    <a class="client_logo" href="http://www.cpasforest.irisnet.be/" target="_blank" style="grid-column: 2; grid-row: 3;"><img src="View/img/CP.png" alt=""  style="width: 80%;" /></a>

                    <a class="client_logo" href="http://www.lire-et-ecrire.be/bruxelles" target="_blank" style="grid-column: 1; grid-row: 4;"><img src="View/img/LE.png" alt=""  style="width: 80%;padding-bottom: 30%;" /></a>

                    <a class="client_logo" href="http://www.foodbank-brabant.be/" target="_blank" style="grid-column: 2; grid-row: 4;"><img src="View/img/FD.png" alt=""  style="width: 80%;"/></a>

                    <a class="client_logo" href="http://www.fse.be/" target="_blank" style="grid-column: 1; grid-row: 5;padding-bottom: 30%;"><img src="View/img/EU.png" alt=""  style="width: 80%;    padding-bottom: 10%;" /></a>


                    <a class="client_logo" href="https://www.mi-is.be/fr" target="_blank" style="grid-column: 2; grid-row: 5;"><img src="View/img/INT.png" alt=""  style="width: 80%;    padding-bottom: 10%;" /></a>
                </div>
            </div>
        </div>
                        <div class="socialgAccueil">
                            <div class="socialf">
                                <p>&copy;<?php echo date("Y");?></p>
                            </div>
                        </div>
                <!---------------END conteneur infos pratiques------------------->
            </div>
    </div>


