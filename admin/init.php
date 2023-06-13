<?php 
    // 1) Including the {connect.php} file into hte {init.php} file : 
    include 'connect.php' ;
    

    // 2) Routes variables : 
   
    $tpl = 'includes/templates/' ;
    $css = 'layout/css/' ;
    $js = 'layout/js/' ;
    $lang = 'includes/langs/' ; 

    // Including important files  :
        include $lang . 'en.php' ;
        include $tpl . 'header.php' ;
        

    // Adding condition of not including the navbar page in case of the page is contiaining the vcariable of {$noNavbar} 
    if (!isset($noNavbar) )  {
        include $tpl . 'navbar.php' ; 
    }

?>

