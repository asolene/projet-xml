<?php

// "entête" de l'article

echo $actuXml->channel->title . "<br>" .
     $actuXml->channel->link . "<br>" .
     $actuXml->channel->description . "<br>" .
     $actuXml->channel->lastBuildDate . "<br>" .
     $actuXml->channel->docs . "<br>" .
     $actuXml->channel->generator . "<br> <br>" ;

echo $footballXml->channel->title . "<br>" .
     $footballXml->channel->link . "<br>" .
     $footballXml->channel->description . "<br>" .
     $footballXml->channel->lastBuildDate . "<br>" .
     $footballXml->channel->docs . "<br>" .
     $footballXml->channel->generator . "<br> <br>" ;     

echo $basketXml->channel->title . "<br>" .
     $basketXml->channel->link . "<br>" .
     $basketXml->channel->description . "<br>" .
     $basketXml->channel->lastBuildDate . "<br>" .
     $basketXml->channel->docs . "<br>" .
     $basketXml->channel->generator . "<br> <br>" ;    

echo $tennisXml->channel->title . "<br>" .
     $tennisXml->channel->link . "<br>" .
     $tennisXml->channel->description . "<br>" .
     $tennisXml->channel->lastBuildDate . "<br>" .
     $tennisXml->channel->docs . "<br>" .
     $tennisXml->channel->generator . "<br> <br>" ;    

echo $rugbyXml->channel->title . "<br>" .
     $rugbyXml->channel->link . "<br>" .
     $rugbyXml->channel->description . "<br>" .
     $rugbyXml->channel->lastBuildDate . "<br>" .
     $rugbyXml->channel->docs . "<br>" .
     $rugbyXml->channel->generator . "<br> <br>" ;    


//artiles > boucle pour les afficher

foreach ($actuNews as $key => $news) {
    echo 
    $news->title . '<br>' . 
    $news->link . '<br>' .
    $news->pubDate . '<br>' .
    $news->description . '<br>' .
    $news->enclosure . '<br>' 
    ;
}

foreach ($footNews as $key => $news) {
    echo 
    $news->title . '<br>' . 
    $news->link . '<br>' .
    $news->pubDate . '<br>' .
    $news->description . '<br>' .
    $news->enclosure . '<br>' 
    ;
}

foreach ($basketNews as $key => $news) {
    echo 
    $news->title . '<br>' . 
    $news->link . '<br>' .
    $news->pubDate . '<br>' .
    $news->description . '<br>' .
    $news->enclosure . '<br>' 
    ;
}

foreach ($tennisNews as $key => $news) {
    echo 
    $news->title . '<br>' . 
    $news->link . '<br>' .
    $news->pubDate . '<br>' .
    $news->description . '<br>' .
    $news->enclosure . '<br>' 
    ;
}

foreach ($rugbyNews as $key => $news) {
    echo 
    $news->title . '<br>' . 
    $news->link . '<br>' .
    $news->pubDate . '<br>' .
    $news->description . '<br>' .
    $news->enclosure . '<br>' 
    ;
}

?>