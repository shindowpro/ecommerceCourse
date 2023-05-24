<?php 
    // Importing the {init.php} file :  
    include 'init.php' ;

    // Merging the routs ($tpl) -> in the path of included {header.php} : 
    include $tpl . 'header.php' ;

    // Including language file : 
    // include 'includes/langs/en.php';
    include 'includes/langs/ar.php';

?>

    Hello this is index page <br>

    <button class="btn btn-danger 5x"> click </button> <br>
    <i class="fa fa-home fa-5x">testing icons </i> <br>

<?php
    echo lang('MESSAGE');
?>



<?php 
    // Merging the routs ($tpl) -> in the path of included {footer.php}
    include $tpl . 'footer.php' ;
?>