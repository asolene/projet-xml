<?php

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


//artiles 

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