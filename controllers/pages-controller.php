<?php

$topic = filter_input(INPUT_GET,'topic', FILTER_SANITIZE_STRING);

switch ($topic) {
    case 'actu':
        $xml = simplexml_load_file("../assets/xml/actu.xml");
        $feed = $xml->channel->item;
        break;
    
    case 'football':
        $xml = simplexml_load_file("../assets/xml/football.xml");
        $feed = $xml->channel->item;
        break;

    case 'basket':
        $xml = simplexml_load_file("../assets/xml/basket.xml");
        $feed = $xml->channel->item;
        break;
    
    case 'tennis':
        $xml = simplexml_load_file("../assets/xml/tennis.xml");
        $feed = $xml->channel->item;
        break;

    case 'rugby':
        $xml = simplexml_load_file("../assets/xml/rugby.xml");
        $feed = $xml->channel->item;
        break;
}


include(dirname(__FILE__).'/../views/templates/header.php');
include(dirname(__FILE__).'/../views/pages.php');
include(dirname(__FILE__).'/../views/templates/footer.php');

?>