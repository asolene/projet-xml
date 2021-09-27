<?php

$actuXml = simplexml_load_file("../assets/xml/actu.xml");
$footballXml = simplexml_load_file("../assets/xml/football.xml");
$basketXml = simplexml_load_file("../assets/xml/basket.xml");
$tennisXml = simplexml_load_file("../assets/xml/tennis.xml");
$rugbyXml = simplexml_load_file("../assets/xml/rugby.xml");


echo $actuXml->channel[0]->title;

/// ?????????????????????????????????????????????????????????

    // if (file_exists('actu.xml')) {
    //     $actuXml = simplexml_load_file('actu.xml');

    //     print_r($actuXml);
    // } else {
    //     exit('Echec lors de l\'ouverture du fichier actu.xml.');
    // }

    // if (file_exists('football.xml')) {
    //     $footballXml = simplexml_load_file('football.xml');

    //     print_r($footballXml);
    // } else {
    //     exit('Echec lors de l\'ouverture du fichier football.xml.');
    // }

    // if (file_exists('basket.xml')) {
    //     $basketXml = simplexml_load_file('basket.xml');

    //     print_r($basketXml);
    // } else {
    //     exit('Echec lors de l\'ouverture du fichier basket.xml.');
    // }
    
    // if (file_exists('tennis.xml')) {
    //     $tennisXml = simplexml_load_file('tennis.xml');

    //     print_r($tennisXml);
    // } else {
    //     exit('Echec lors de l\'ouverture du fichier tennis.xml.');
    // }    

    // if (file_exists('rugby.xml')) {
    //     $rugbyXml = simplexml_load_file('rugby.xml');

    //     print_r($rugbyXml);
    // } else {
    //     exit('Echec lors de l\'ouverture du fichier rugby.xml.');
    // }       

/// ?????????????????????????????????????????????????????????

// noeuds des flux >>>

// title
// link
// description
// lastBuildDate 
// docs
// generator
// language


?>