
alert('Hello from control Js file ');

$(function() { 
    'use strict' ;
 
    $('[placeholder]').focus(function() {
        // 1) Saving the value of 'placeholder' attriubute as a value of new attriubute 'data-text' :
        $(this).attr('text-data', $(this).attr('placeholder') ) ;
        
        // 2) Making the value of 'placeholder' attribute is empty value :        
        $(this).attr('placeholder', '' );
        
    }).blur(function() { 
        // Setting the placeholder attribute value with teh saved 'text-data' attribute value:     
        $(this).attr( 'placeholder', $(this).attr('text-data') );
    });
});