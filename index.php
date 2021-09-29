<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="home">
    <div class="container">

    <?php 
            for ($i=0; $i <=5 ; $i++) { 
                $news = $actuNews[$i];?>
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
            <?php }
    ?>
    
    </div>
</section>
</body>
</html>