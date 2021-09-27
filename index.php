<?php

echo $actuXml->channel->title . "<br>" .
     $actuXml->channel->link . "<br>" .
     $actuXml->channel->description . "<br>" .
     $actuXml->channel->lastBuildDate . "<br>" .
     $actuXml->channel->docs . "<br>" .
     $actuXml->channel->generator . "<br> <br>" ;


//artiles >

foreach ($actuNews as $key => $news) {
    echo $news->title . '<br>' . 
    $news->link . '<br>' .
    $news->pubDate . '<br>' .
    $news->description . '<br>' .
    $news->enclosure . '<br>' 
    ;
}

