<?php

$actuXml = simplexml_load_file("../assets/xml/actu.xml");
$footballXml = simplexml_load_file("../assets/xml/football.xml");
$basketXml = simplexml_load_file("../assets/xml/basket.xml");
$tennisXml = simplexml_load_file("../assets/xml/tennis.xml");
$rugbyXml = simplexml_load_file("../assets/xml/rugby.xml");


echo ($actuXml=>channel=>title);
$items=$actuXml=>channel=>item;
foreach ($items as $key => $value) {
    var_dump($value);
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