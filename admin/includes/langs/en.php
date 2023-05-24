<?php 
    function lang($phrase) {
        static $lang = array(
            // home page : 
            'MESSAGE' => 'Welcome to the our website' ,
            'ADMIN' => 'Shadi',
            
            // setting page : 
            'USER' => 'ALI' ,
            'ADMIN' => 'SHADI',
        
        );

        return $lang[$phrase];
    }

?>