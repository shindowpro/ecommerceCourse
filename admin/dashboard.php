<?php 
    // Starting Session [This is Critical for this page responding and linking with the redirected from other pages ] :
    session_start();
    
    // Including the {init.php} page of and {footer.php} with in the {dashboard.php} page : 
    
    if ( isset($_SESSION['Username']) ) {    
        echo '<br>' . '<br>' . '<br>' . 'Hello ' . $_SESSION['Username'] . ' ' . '<br>' . ' Welcome to <span style="color:red; font-size:20px"> Dashboard page </span> ' . '<br>' ; 
        
        include 'init.php' ;
    
        include $tpl . 'footer.php' ; 

        // include $languages .'en.php';

        // include $tpl . 'navbar.php' ;
        
    } else {
        
        // Relocating the page into the index page incase of unlegal logging :
            header('Location: index.php');
        }
        
    ?>


    