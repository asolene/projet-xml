<?php
$urlActu = "https://rmcsport.bfmtv.com/rss/fil-sport/";
$actuXml = simplexml_load_file($urlActu);

$urlFoot = "https://rmcsport.bfmtv.com/rss/football/";
$footballXml = simplexml_load_file($urlFoot);

$urlBasket = "https://rmcsport.bfmtv.com/rss/basket/";
$basketXml = simplexml_load_file($urlBasket);

$urlTennis = "https://rmcsport.bfmtv.com/rss/tennis/";
$tennisXml = simplexml_load_file($urlTennis);

$urlRugby = "https://rmcsport.bfmtv.com/rss/rugby/";
$rugbyXml = simplexml_load_file($urlRugby);

// $actuXml = simplexml_load_file("../assets/xml/actu.xml");
// $footballXml = simplexml_load_file("../assets/xml/football.xml");
// $basketXml = simplexml_load_file("../assets/xml/basket.xml");
// $tennisXml = simplexml_load_file("../assets/xml/tennis.xml");
// $rugbyXml = simplexml_load_file("../assets/xml/rugby.xml");


$actuNews = $actuXml->channel->item;
$footNews = $footballXml->channel->item;
$basketNews = $basketXml->channel->item;
$tennisNews = $tennisXml->channel->item;
$rugbyNews = $rugbyXml->channel->item;


include(dirname(__FILE__).'/../views/templates/header.php');
include(dirname(__FILE__).'/../index.php');
include(dirname(__FILE__).'/../views/templates/footer.php');


?>