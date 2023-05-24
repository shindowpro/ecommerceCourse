<?php 
    function lang($phrase) {
        static $lang = array(
            // home page : 
            'MESSAGE' => 'اهلا بك في موقعنا ' ,
            'ADMIN' => 'شادي',
            
            // setting page : 
            'USER' => 'علي' ,
            'ADMIN' => 'شادي',
        );

        return $lang[$phrase];
    }

?>