<?php
include('../regex.php');
$error=[];
$verif = null;


if ($_SERVER['REQUEST_METHOD'] =='POST') {
    // $darkmod = intval(trim(filter_input(INPUT_POST,'darkMod',FILTER_SANITIZE_NUMBER_INT)));     
    // if ($darkmod != 0 && $darkmod !=1) {
    //     $error['darkmod'] ='Mauvaise valeur sur le choix';
    // }
    $actu = intval(trim(filter_input(INPUT_POST,'actu',FILTER_SANITIZE_NUMBER_INT)));
    if ($actu != 0 && $actu !=1 && $actu !=2) {
        $error['actu'] = 'Mauvaise valeur sur le choix';
    }
    $category = filter_input(INPUT_POST,'category',FILTER_SANITIZE_NUMBER_INT,FILTER_REQUIRE_ARRAY);    
    foreach ($category as $key =>  $value) {        
        if ($value < 0 || $value > 4 ) {
            $error['category'] = 'La valeur choisit n\est valable';
        }
        // foreach ($category as $key => $value) {
        //     $isSelected = ($category == $categoryValue) ? 'selected' : '';
        //     echo "<option $isSelected value=\"$categoryValue\">$categoryNameInSelect</option>";        
        // }
    }
    // setcookie(
    //     'darkmod',
    //     $darkmod,
    //     time()+3600*24*3,
    //     '/'        
    // );  
    setcookie(
        'actu',
        $actu,
        time()+3600*24*3,
        '/'        
    );
    setcookie(
        'category',
        json_encode($category),
        time()+3600*24*3,
        '/'        
    );
    
    
    
}

include(dirname(__FILE__).'/../views/templates/header.php');
include(dirname(__FILE__).'/../views/parameters.php');
include(dirname(__FILE__).'/../views/templates/footer.php');

?>