<?php 
    // Importing the {init.php} file :  
    include 'init.php' ;
    // Merging the routs ($tpl) -> in the path of included {header.php} : 
    include $tpl . 'header.php' ;
    include 'includes/langs/en.php';
?>


<form  class="login">
    <h4 class="text-center"> Login Form </h4>
    <input type="text"     name="user"  placeholder="username"  autocomplete="off"           class="form-control input-lg"   /> 
    <input type="password" name="pass"  placeholder="password"  autocomplete="new-password"  class="form-control input-lg"   /> 
    <input type="submit"   value="login"     class="btn btn-primary btn-block input-lg"   /> 
</form>


<?php 
    include $tpl . 'footer.php' ;
?>