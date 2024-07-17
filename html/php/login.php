<?php

require_once "database_conn.php";


    $_username=$_POST["username"];
    $_password=$_POST["password"];

    $query1="select * from users 
    where user = '" . $_username . "' ";
    $result1= mysqli_query($conn,$query1);

    
    $query2="select * from users 
    where user = '" . $_username . "'  and password = '" . $_password . "' ";
    //echo $query;
    $result2= mysqli_query($conn,$query2);
    //print_r($result);
    //die();
    if($result1->num_rows==0){
        header('Location: sign-in.php?msg2=error');
    }
    else{
        if($result2->num_rows==1){
            session_start();
        $_SESSION['user'] = 1;
        header('Location: home.html');
        }
        else{
            header('Location: sign-in.php?msg3=error');
        }
        
    }



//den uparxei to username---->error---->print(Username does not exist. Sign up first) + emfanish button gia signup CHECK
// uparxei to username alla oxi to pass----> error---> print(Invalid password)  CHECK
//uparxei to username & to pass---> header(dashboard)  CHECK




