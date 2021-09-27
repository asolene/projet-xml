<?php

$actuXml = simplexml_load_file("../assets/xml/actu.xml");
$footballXml = simplexml_load_file("../assets/xml/football.xml");
$basketXml = simplexml_load_file("../assets/xml/basket.xml");
$tennisXml = simplexml_load_file("../assets/xml/tennis.xml");
$rugbyXml = simplexml_load_file("../assets/xml/rugby.xml");


// echo $actuXml->channel[0]->title . '<br>';
// echo $actuXml->channel[0]->link . '<br>';
// echo $actuXml->channel[0]->description . '<br>';
// echo $actuXml->channel[0]->lastBuildDate . '<br>';
// echo $actuXml->channel[0]->docs . '<br>';
// echo $actuXml->channel[0]->generator . '<br>';
// echo $actuXml->channel[0]->language;


echo $actuXml->channel->item[0]->title . '<br>'.
     $actuXml->channel->item[0]->link . '<br>'.
     $actuXml->channel->item[0]->pubDate . '<br>'.
     $actuXml->channel->item[0]->description . '<br>'.
     $actuXml->channel->item[0]->enclosure . '<br>' ; 

;

echo $actuXml->channel->item[1]->title . '<br>'.
     $actuXml->channel->item[1]->link . '<br>'.
     $actuXml->channel->item[1]->pubDate . '<br>'.
     $actuXml->channel->item[1]->description . '<br>'.
     $actuXml->channel->item[1]->enclosure . '<br>' ; 

;



// faire un for > pour chaque tableau, echo ce qu'il y a au dessus 

// foreach($actuXml->children() as $actu) {

//     echo $actu->title . "<br>" .
//          $actu->link . "<br>" .
//          $actu->description . "<br>" .
//          $actu->lastBuildDate . "<br>" .
//          $actu->docs . "<br>" .
//          $actu->generator . "<br>" .
//          $actu->language . "<br>";

//   }











// noeuds des flux >>>
// title
// link
// description
// lastBuildDate 
// docs
// generator
// language

///////////////
// title
// link
// pubDate
// description
// enclosure



?>