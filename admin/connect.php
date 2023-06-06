<?php
    // Creating main connection varlables : 
    $dsn = 'mysql:host=localhost; dbname=shop';
    $user = 'root';
    $pass = '';
    
    // Setting connection attriubtes :   
    $option = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );

    try{
        // 1) passing through connecting variables to the connection variable [through try{} function]: 
        $con =new PDO($dsn, $user, $pass, $option);

        // 2) Setting attributes[Error mode & Exception of the Error mode] to the connection file {$con}:
        $con->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        // 3) Printing a confirmation message incase of succesful conncetion processs :
        echo 'Good, your are connected successfully to the database' . '<br>' ;
    }

    catch(PDOException $e) {
        echo 'Bad, your are not connected to the database' . $e->getMessage() . '<br>';
    }


 ?>