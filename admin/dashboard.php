<?php 
    // Starting Session [This is Critical for this page responding and linking with the redirected from other pages ] :
    session_start();
    
    // Including the {init.php} page of and {footer.php} with in the {dashboard.php} page : 
    
    if ( isset($_SESSION['Username']) ) {    
        
        // including the {init.php} file to include all {header.php} component & {navbar.php} - if it has not the preventing variable{$noNavbar} - & all general properites in the {init.php} : 
        include 'init.php' ;
            
        // printing testing contents to be dispalyed within the page : 
        echo '<br>' . '<br>' . '<br>' . 'Hello ' . $_SESSION['Username'] . ' ' . '<br>' . ' Welcome to <span style="color:red; font-size:20px"> Dashboard page </span> ' . '<br>' ; 

        // Including {footer.php} because it has all required data and libraries to run the included {navbar.php}  :   
        include $tpl . 'footer.php' ; 

    } else {
        
        // Relocating the page into the index page incase of unlegal logging :
            header('Location: index.php');
        }
        
    ?>


    