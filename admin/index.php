<?php 
    // Starting Session : 
        session_start();

    // Defining variable of no inclding the navbar page :
        $noNavbar = ''; 
   
    // Checking if there is a session defined within page :
        if (isset($_SESSION['Username']) ) {
            // header('Location:dashboard.php');
            print_r($_SESSION['username']) . '<br>' ;            
        }

    // Importing the {init.php} file :  
        include 'init.php' ;
    
    // Merging the routs ($tpl) -> in the path of included {header.php} -> [moved into the init.php] : 
        // include 'includes/langs/en.php';
        // include $tpl . 'header.php' ;
 
    // Checking if the incomming data from the Form is by using Post Request :   
        if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            

            // Encrypting the [password] variable -> using the {sha1} method :
            $hashedPass = sha1($password) ;
            
            // Creating a statemnt of preparing of customized Select of {username} & {password} :
            $stmt = $con-> prepare("SELECT username AND password FROM users WHERE username = ? AND password = ? AND groupID = 1 ") ;
            
            // Executing the previous statment by passing through the previous variables :
            $stmt-> execute(array ($username , $hashedPass) ) ;

            // Defining count variable of the count of result statement  :
            $count = $stmt-> rowCount() ;
            // echo 'Please insert your data' ; 
            
            // Checking if the count is bigger than 0 => that means the user data is existed in the Database, and Admin  :
            if ($count > 0) {
                echo 'Your count = ' . $count . '<br>';
                echo 'Welcome Admin ' . $username . '<br>';
                echo $hashedPass . '<br>' ;
                $_SESSION['Username'] = $username;
                header('Location:dashboard.php');
                exit();
            }
        }


        if (isset($_SESSION['Username'])) { 
            print_r('Hello your session username is ' . $_SESSION['username']);
        }
?>


<form  class="login" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST" >
    <h4 class="text-center"> Login Form </h4>
    <input type="text"     name="username"  placeholder="username"  autocomplete="off"           class="form-control input-lg"   /> 
    <input type="password" name="password"  placeholder="password"  autocomplete="new-password"  class="form-control input-lg"   /> 
    <input type="submit"   value="login"     class="btn btn-primary btn-block input-lg"   /> 
</form>



<?php 
    include $tpl . 'footer.php' ;
?>