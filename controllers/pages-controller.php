<?php

$topic = filter_input(INPUT_GET,'topic', FILTER_SANITIZE_STRING);

$urlActu = "https://rmcsport.bfmtv.com/rss/fil-sport/";
$urlFoot = "https://rmcsport.bfmtv.com/rss/football/";
$urlBasket = "https://rmcsport.bfmtv.com/rss/basket/";
$urlTennis = "https://rmcsport.bfmtv.com/rss/tennis/";
$urlRugby = "https://rmcsport.bfmtv.com/rss/rugby/";

switch ($topic) {
    case 'actu':
        $xml = simplexml_load_file($urlActu);
        $feed = $xml->channel->item;
        break;
    
    case 'football':
        $xml = simplexml_load_file($urlFoot);
        $feed = $xml->channel->item;
        break;

    case 'basket':
        $xml = simplexml_load_file($urlBasket);
        $feed = $xml->channel->item;
        break;
    
    case 'tennis':
        $xml = simplexml_load_file($urlTennis);
        $feed = $xml->channel->item;
        break;

    case 'rugby':
        $xml = simplexml_load_file($urlRugby);
        $feed = $xml->channel->item;
        break;
}


include(dirname(__FILE__).'/../views/templates/header.php');
include(dirname(__FILE__).'/../views/pages.php');
include(dirname(__FILE__).'/../views/templates/footer.php');

?>