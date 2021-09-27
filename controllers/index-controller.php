<?php

$actuXml = simplexml_load_file("../assets/xml/actu.xml");
$footballXml = simplexml_load_file("../assets/xml/football.xml");
$basketXml = simplexml_load_file("../assets/xml/basket.xml");
$tennisXml = simplexml_load_file("../assets/xml/tennis.xml");
$rugbyXml = simplexml_load_file("../assets/xml/rugby.xml");


// accueil du fil ? 
echo $actuXml->channel->title . "<br>" .
     $actuXml->channel->link . "<br>" .
     $actuXml->channel->description . "<br>" .
     $actuXml->channel->lastBuildDate . "<br>" .
     $actuXml->channel->docs . "<br>" .
     $actuXml->channel->generator . "<br> <br>" ;


//artiles >
echo $actuXml->channel->item[0]->title . '<br>'.
     $actuXml->channel->item[0]->link . '<br>'.
     $actuXml->channel->item[0]->pubDate . '<br>'.
     $actuXml->channel->item[0]->description . '<br>'.
     $actuXml->channel->item[0]->enclosure . '<br>' ; 


echo $actuXml->channel->item[1]->title . '<br>'.
     $actuXml->channel->item[1]->link . '<br>'.
     $actuXml->channel->item[1]->pubDate . '<br>'.
     $actuXml->channel->item[1]->description . '<br>'.
     $actuXml->channel->item[1]->enclosure . '<br>' ; 






// faire un for > pour chaque tableau, echo ce qu'il y a au dessus 


// noeuds des flux >>>
// title
// link
// description
// lastBuildDate 
// docs
// generator
// language osef

///////////////
// title
// link
// pubDate
// description
// enclosure



?>