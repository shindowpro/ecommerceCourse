<?php 
    function lang($phrase) {
        static $lang = array(
            // home page : 
            'MESSAGE' => 'Welcome to the our website' ,
            'ADMIN' => 'Shadi',
            
            // Setting page : 
            'USER' => 'ALI' ,
            'ADMIN' => 'SHADI',
        
            // Dashbaoord page:
                'HOME_ADMIN' => 'ShindowPro' ,
                '' => ' ' ,
                '' => ' ' ,
        );

        return $lang[$phrase];
    }

?>