<section class="home">
    <div class="container">

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Actu sport</h1>
            </div>
        </div>
    </div>
    <br>

    <?php 


        for ($i=0; $i <=2 ; $i++) { 

            $news = $actuNews[$i];

    ?>

        <div class="container">
            <div class="row">
                <article class="col-md-12 article-list">
                    <div class="inner">
                        <figure>
                            <img src="<?=$news->enclosure['url']?>" alt="Photo article">
                        </figure>
                        <div class="details">
                            <div class="detail">
                                <div class="time"><?=$news->pubDate?></div>
                            </div>
                        <h1><?=$news->title?></h1>
                            <p>
                                <?=strip_tags($news->description)?>
                            </p>
                            <footer>
                                <a class="btn btn-primary more" href="<?=$news->link?>" target="_blank">
                                    <div>Lire l'article</div>
                                    <div><i class="ion-ios-arrow-thin-right"></i></div>
                                </a>
                            </footer>
                        </div>
                    </div>
                </article>       
            </div>
        </div>       


    <?php
        }
    ?>
    
<!-- //////// -->

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Actu basket</h1>
            </div>
        </div>
    </div>
    <br>

    <?php 


        for ($i=0; $i <=2 ; $i++) { 

            $news = $basketNews[$i];

    ?>

        <div class="container">
            <div class="row">
                <article class="col-md-12 article-list">
                    <div class="inner">
                        <figure>
                            <img src="<?=$news->enclosure['url']?>" alt="Photo article">
                        </figure>
                        <div class="details">
                            <div class="detail">
                                <div class="time"><?=$news->pubDate?></div>
                            </div>
                        <h1><?=$news->title?></h1>
                            <p>
                                <?=strip_tags($news->description)?>
                            </p>
                            <footer>
                                <a class="btn btn-primary more" href="single.html">
                                    <div>Lire l'article</div>
                                    <div><i class="ion-ios-arrow-thin-right"></i></div>
                                </a>
                            </footer>
                        </div>
                    </div>
                </article>       
            </div>
        </div>       


    <?php
        }
    ?>

<!-- //////// -->

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 mb-2 text-center ">
                <h1>Actu rugby</h1>
            </div>
        </div>
    </div>
    <br>

    <?php 


    for ($i=0; $i <=2 ; $i++) { 

        $news = $rugbyNews[$i];

    ?>

    <div class="container">
        <div class="row">
            <article class="col-md-12 article-list">
                <div class="inner">
                    <figure>
                        <img src="<?=$news->enclosure['url']?>" alt="Photo article">
                    </figure>
                    <div class="details">
                        <div class="detail">
                            <div class="time"><?=$news->pubDate?></div>
                        </div>
                    <h1><?=$news->title?></h1>
                        <p>
                            <?=strip_tags($news->description)?>
                        </p>
                        <footer>
                            <a class="btn btn-primary more" href="single.html">
                                <div>Lire l'article</div>
                                <div><i class="ion-ios-arrow-thin-right"></i></div>
                            </a>
                        </footer>
                    </div>
                </div>
            </article>       
        </div>
    </div>       


    <?php
    }
    ?>

    </div>
</section>

