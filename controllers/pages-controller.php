<?php

$actuXml = simplexml_load_file("../assets/xml/actu.xml");
$footballXml = simplexml_load_file("../assets/xml/football.xml");
$basketXml = simplexml_load_file("../assets/xml/basket.xml");
$tennisXml = simplexml_load_file("../assets/xml/tennis.xml");
$rugbyXml = simplexml_load_file("../assets/xml/rugby.xml");

$actuNews = $actuXml->channel->item;
$footNews = $footballXml->channel->item;
$basketNews = $basketXml->channel->item;
$tennisNews = $tennisXml->channel->item;
$rugbyNews = $rugbyXml->channel->item;


include(dirname(__FILE__).'/../views/templates/header.php');
include(dirname(__FILE__).'/../views/pages.php');
include(dirname(__FILE__).'/../views/templates/footer.php');

?>