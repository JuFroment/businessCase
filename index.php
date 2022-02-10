<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include 'global-stylesheets.php';
    include "global-scripts.php";
    ?>

    <title>La Nîmes'alerie</title>
</head>
<header>
    <?php include 'header.php' ?>
</header>
<section>
    <!--carousel principal-->
    <div id="mainCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slider4.png" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-white">Envoyer vos animaux dans l'espace, c'est possible !</h5>
                    <p class="text-white">Pour la première fois <span class="">AU MONDE</span>, et exclusivement avec
                        votre
                        Nîmes'alerie préférée, offrez le plus beau des cadeaux à votre animal de compagnie !</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/slider5.png" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Une location sans animaux ? Un mariage qui se profile et vous n'avez pas le temps pour vos
                        bichons
                        ?</h5>
                    <p>La Nîmes'alerie vous propose des options de gardiennage !</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/slider7.png" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Envie de bichonner vos compagnons du quotidien ?</h5>
                    <p>Ici, nous toilettons vos bichons et aux bébés d'amour, afin qu'ils illuminent encore plus votre
                        quotidien !</p>
                </div>
            </div>
        </div>
        <!--        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">-->
        <!--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
        <!--            <span class="visually-hidden">Previous</span>-->
        <!--        </button>-->
        <!--        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">-->
        <!--            <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
        <!--            <span class="visually-hidden">Next</span>-->
        <!--        </button>-->
    </div>
    <!--fin carousel principal-->
    <div class="bgmain">
        <!--section QSM-->
        <section>
            <div class="container mb-5">
                <div class="row align-items-center">
                    <div class="card bgcard shadow shadow-lg">
                        <h2 class="text-center my-3" id="qsmTitle">
                            La Nîmes'alerie, c'est quoi ?
                        </h2>
                        <div class="card-body">
                            <p class="card-text" id="qsmText">La Nîmes'alerie c'est <strong><em>votre</em></strong>
                                animalerie de proximité. Ici nos conseillers sont là pour vous et aussi pour le
                                bien-être de
                                vos chers animaux de compagnie. Venez profiter de notre expertise dans de nombreux
                                domaines.
                                Vous retrouverez chez nous tout le nécessaire pour le bien-être et l'épanouissement de
                                vos
                                animaux de compagnie.</p>

                            <div class="d-flex justify-content-center">
                                <a href="contact.php" class="btn btn-primary buttonStyle">Nous contacter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--fin section QSM-->
        <!--carousel produits-->
        <div class="container card bgcard shadow shadow-lg mb-3">
            <h2 class="text-center my-4">Nos produits du moment !</h2>
            <div id="carouselProduit" class="carousel carousel-dark slide" data-bs-ride="carousel">
<!--                <button class="carousel-control-prev" type="button" data-bs-target="#carouselProduit"-->
<!--                        data-bs-slide="prev">-->
<!--                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--                    <span class="visually-hidden">Previous</span>-->
<!--                </button>-->
<!--                <button class="carousel-control-next" type="button" data-bs-target="#carouselProduit"-->
<!--                        data-bs-slide="next">-->
<!--                    <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--                    <span class="visually-hidden">Next</span>-->
<!--                </button>-->
                <div class="carousel-inner">
                    <!--page 1 carousel-->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-4 mb-3">
                                <div class="card shadow shadow-lg">
                                    <img class="img-fluid" alt="100%x280"
                                         src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                    <div class="card-body">
                                        <h4 class="card-title">Produit 1</h4>
                                        <p class="card-text">Description 1</p>
                                        <button class="buttonStyle">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="card shadow shadow-lg">
                                    <img class="img-fluid" alt="100%x280"
                                         src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                    <div class="card-body">
                                        <h4 class="card-title">Produit 2</h4>
                                        <p class="card-text">Description 2</p>
                                        <button class="buttonStyle">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="card shadow shadow-lg">
                                    <img class="img-fluid" alt="100%x280"
                                         src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                    <div class="card-body">
                                        <h4 class="card-title">Produit 3</h4>
                                        <p class="card-text">Description 3</p>
                                        <button class="buttonStyle">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--page 2 carousel-->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-4 mb-3">
                                <div class="card  shadow shadow-lg">
                                    <img class="img-fluid" alt="100%x280" src="images/slider2.png">
                                    <div class="card-body">
                                        <h4 class="card-title">Produit 4</h4>
                                        <p class="card-text">Description 4</p>
                                        <button class="buttonStyle">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="card  shadow shadow-lg">
                                    <img class="img-fluid" alt="100%x280" src="images/slider1.png">
                                    <div class="card-body">
                                        <h4 class="card-title">Produit 5</h4>
                                        <p class="card-text">Description 5</p>
                                        <button class="buttonStyle">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="card shadow shadow-lg">
                                    <img class="img-fluid" alt="100%x280"
                                         src="unused_img/matthew-henry-U5rMrSI7Pn4-unsplash.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Produit 6</h4>
                                        <p class="card-text">Description 6</p>
                                        <button class="buttonStyle">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--page 3 carousel-->
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-4 mb-3">
                                <div class="card card shadow shadow-lg">
                                    <img class="img-fluid" alt="100%x280"
                                         src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                    <div class="card-body">
                                        <h4 class="card-title">Produit 7</h4>
                                        <p class="card-text">Description 7</p>
                                        <button class="buttonStyle">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="card card shadow shadow-lg">
                                    <img class="img-fluid" alt="100%x280"
                                         src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                    <div class="card-body">
                                        <h4 class="card-title">Produit 8</h4>
                                        <p class="card-text">Description 8</p>
                                        <button class="buttonStyle">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="card card shadow shadow-lg">
                                    <img class="img-fluid" alt="100%x280"
                                         src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                    <div class="card-body">
                                        <h4 class="card-title">Produit 9</h4>
                                        <p class="card-text">Description 9</p>
                                        <button class="buttonStyle">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-indicators mt-4">
                <button type="button" data-bs-target="#carouselProduit" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselProduit" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselProduit" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
        </div>
</section>
<!--fin carousel produits-->
<!--avis-->
<section class="mt-3">
    <!-- avis 1 -->
    <div class="container card bgcard shadow shadow-lg mt-5">
        <h2 class=" text-center mt-3">Les avis de nos clients</h2>
        <div class="row" id="review">
            <div class="col-lg-4 col-sm-4 my-3 mx-auto bgReviewRating py-3" id="rating">
                <div class="text-center fa-3x">
                    <p>5 / 5</p>
                    <i class="fas fa-star py-3"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><br>
                    <button class="btn buttonStyle btn-lg">Laissez-nous un avis !</button>
                </div>
            </div>
            <div class="col-lg-6 col-sm-7 my-auto bgReviewRating">
                <div class="py-4  d-flex justify-content-center position-relative ">
                    <i class="fas fa-quote-left fa-2x position-absolute top-0 start-0"></i>
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <p class="reviewText"><br><br>Missa satisfait de voussa boutique !</p>
                        </blockquote>
                        <figcaption class="my-0">
                            <cite title="Source Title" class="reviewAuthor">JarJar B.</cite>
                        </figcaption>
                    </figure>
                    <i class="fas fa-quote-right fa-2x position-absolute bottom-0 end-0"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- fin Avis1 -->
</section>
</div>
<footer class="footer py-5 backgroundfooter">
    <?php include "footer.php" ?>
</footer>
</body>
</html>