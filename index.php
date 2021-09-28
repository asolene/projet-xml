<?php

// "entête" de l'article

// echo $actuXml->channel->title . "<br>" .
//      $actuXml->channel->link . "<br>" .
//      $actuXml->channel->description . "<br>" .
//      $actuXml->channel->lastBuildDate . "<br>" .
//      $actuXml->channel->docs . "<br>" .
//      $actuXml->channel->generator . "<br> <br>" ;

//artiles > boucle pour les afficher

// foreach ($actuNews as $key => $news) {
//     echo 
//     $news->title . '<br>' . 
//     $news->link . '<br>' . 
//     $news->pubDate . '<br>' . 
//     $news->description . '<br>' . 
//     $news->enclosure . '<br>' 
//     ;
// }


// foreach ($footNews as $key => $news) {
//     echo 
//     $news->title . '<br>' . 
//     $news->link . '<br>' .
//     $news->pubDate . '<br>' .
//     $news->description . '<br>' .
//     $news->enclosure . '<br>' 
//     ;
// }

// foreach ($basketNews as $key => $news) {
//     echo 
//     $news->title . '<br>' . 
//     $news->link . '<br>' .
//     $news->pubDate . '<br>' .
//     $news->description . '<br>' .
//     $news->enclosure . '<br>' 
//     ;
// }

// foreach ($tennisNews as $key => $news) {
//     echo 
//     $news->title . '<br>' . 
//     $news->link . '<br>' .
//     $news->pubDate . '<br>' .
//     $news->description . '<br>' .
//     $news->enclosure . '<br>' 
//     ;
// }

// foreach ($rugbyNews as $key => $news) {
//     echo 
//     $news->title . '<br>' . 
//     $news->link . '<br>' .
//     $news->pubDate . '<br>' .
//     $news->description . '<br>' .
//     $news->enclosure . '<br>' 
//     ;
// }


?>

<section class="home">
    <div class="container">
    <?php 

    // var_dump($actuNews);
    // die;

        foreach ($actuNews as $key => $news) {

            
    ?>
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="line top">
                    <div class="textnew">L'actualité du sport en continu.</div>
                </div>
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
        </div>

    <?php
        }
    ?>
    </div>
</section>

<a href="controllers/parameters-controller.php">Allez sur le formulaire</a>
