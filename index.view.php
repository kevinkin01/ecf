
<!DOCTYPE html>
<html lang="fr">
<?php include "View/head.view.php";?>

    <body>
        <div class="display-1 text-white" style="background-color: #1c2331!important; display: flex;padding: 25px 0px 0px 25px;flex-wrap:wrap;">
            <a href="./"><img src="./public/images/logo.png" style="height: 200px;"></a>
            <div class="mobile-hidden" style="margin-left: 25px;">
                <h1 class="fletter">Academie</h1>
                <h1 class="fletter">Bruxelloise</h1>
                <h1 class="fletter">Haltérophilie</h1>
            </div>
            <div class="mobile-hidden"><h3 class="bg-semitrans d-inline-block p-3 text-muted font-weight-bold mt-4">Application & transversalité dans la préparation physique</h3></div>
        </div>
        <section>

            <?php include "View/menu.view.php";?>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators carousel-rnew">
                        <?php
                            $i=0;
                         foreach ($slider as $item0) {
                          ?>
                        <?=$item0['titre'];?></li>
                        <?php $i++;} ?>

                    </ol>
                    <div class="carousel-inner">
                        <?php
                            foreach ($slider as $item1) {
                                if(in_array("active", $item1)){
                                    echo '<div class="carousel-item active">';
                                } else {
                                    echo '<div class="carousel-item">';
                                }
                                ?>



                            <div class="intro-1 text-white" style="background: url(<?=$item1['image'];?>)no-repeat center center;">
                                <div class="container" style="padding-bottom: 50px; height: 500px;">

                                </div>
                            </div>
                        </div>
                            <?php } ?>
                        
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </section>
        <section id="srl2" class="mt-10 position-relative intro-2">
            <div class="bg-semitrans p-3 w-45" style="transform: translateY(-70px);">
                <h1 class="text-yellow-dark">DANIEL</h1>
                <h1 class="ml-4 text-yellow-light">NSENGA</h1>
                <p class="text-white">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
            </div>
            <div class="d-flex justify-content-end">
                <div class="bg-semitrans p-3 w-45 d-inline-block ">
                    <h1 class="text-yellow-dark">DANIEL</h1>
                    <h1 class="ml-4 text-yellow-light">NSENGA</h1>
                    <p class="text-white">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
                </div>
            </div>
        </section>
        <section id="srl3" style="background: url(./public/images/header6.jpg)no-repeat;background-size: cover;">
            <h1 class="text-center text-white mt-5">Nos Activités</h1>
            <div class="container">
                <div class="d-flex justify-content-around flex-wrap">
                    <div class="p-2">
                        <div class="hexagon"><span><h6>HALTÉROPHILE</h6><i class="_i1"></i></span></div>
                    </div>
                    <div class="p-2">
                        <div class="hexagon"><span><h6>HALTÉROPHILE</h6><i class="_i2"></i></span></div>
                    </div>
                    <div class="p-2 ">
                        <div class="hexagon"><span><h6>HALTÉROPHILE</h6><i class="_i3"></i></span></div>
                    </div>
                    <div class="p-2 ">
                        <div class="hexagon"><span><h6>HALTÉROPHILE</h6><i class="_i4"></i></span></div>
                    </div>
                </div>
                <div class="d-flex justify-content-around flex-wrap">
                    <div class="p-2">
                        <div class="hexagon"><span><h6>HALTÉROPHILE</h6><i class="_i5"></i></span></div>
                    </div>
                    <div class="p-2">
                        <div class="hexagon"><span><h6>HALTÉROPHILE</h6><i class="_i6"></i></span></div>
                    </div>
                    <div class="p-2 ">
                        <div class="hexagon"><span><h6>HALTÉROPHILE</h6><i class="_i7"></i></span></div>
                    </div>
                </div>
            </div>
        </section>

        <?php include "View/footer.view.php";?>
            <script>
                window.onscroll = function() {
                    myFunction()
                };

                var header = document.getElementById("myHeader");
                var sticky = header.offsetTop;

                function myFunction() {
                    if (window.pageYOffset > sticky) {
                        header.classList.add("sticky");
                    } else {
                        header.classList.remove("sticky");
                    }
                }
            </script>
    </body>

</html>