<?php
include('../regex.php');
$error=[];
$verif = null;


if ($_SERVER['REQUEST_METHOD'] =='POST') {
    $darkmod = intval(trim(filter_input(INPUT_POST,'darkMod',FILTER_SANITIZE_NUMBER_INT)));     
    if ($darkmod != 0 && $darkmod !=1) {
        $error['darkmod'] ='Mauvaise valeur sur le choix';
    }
    $actu = intval(trim(filter_input(INPUT_POST,'actu',FILTER_SANITIZE_NUMBER_INT)));
    if ($actu != 0 && $actu !=1 && $actu !=2) {
        $error['actu'] = 'Mauvaise valeur sur le choix';
    }
    $category = filter_input(INPUT_POST,'category',FILTER_SANITIZE_NUMBER_INT,FILTER_REQUIRE_ARRAY);    
    foreach ($category as $key =>  $value) {        
        if ($value < 0 || $value > 4 ) {
            $error['category'] = 'La valeur choisit n\est valable';
        }
    }   
    
    
}

include(dirname(__FILE__).'/../views/templates/header.php');
include(dirname(__FILE__).'/../views/parameters.php');
include(dirname(__FILE__).'/../views/templates/footer.php');

?>