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


foreach($actuXml->children() as $actu) {
    echo $actu->title . "<br>" .
         $actu->link . "<br>" .
         $actu->description . "<br>" .
         $actu->lastBuildDate . "<br>" .
         $actu->docs . "<br>" .
         $actu->generator . "<br>" .
         $actu->language . "<br>";
  }












// noeuds des flux >>>
// title
// link
// description
// lastBuildDate 
// docs
// generator
// language


?>