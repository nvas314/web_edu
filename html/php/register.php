<?php
        require_once "database_conn.php";
        $_username=$_POST["username"];
        $_password=$_POST["password"];
        $query="select * from users 
        where user = '" . $_username . "' ";
        //echo $query;
        $result= mysqli_query($conn,$query);
        //print_r($result);
        //die();
    if(empty($_username) || empty($_password)){
        header('Location: sign-up.php?msg1=error');
    }
    else{
            if($result->num_rows==1){
                header('Location: sign-up.php?msg2=error');
            }
        
            else{
                $currentDt = date('Y-m-d');
                $query = "insert into users values(null, '$_username',  '$_password',  '$currentDt')";
                $result= mysqli_query($conn,$query);
                header('Location: sign-in.php?msg1=successful_register');    
            }
    }

    



    // an uparxei to username---> error(msg1)---->msg1='Username already exists' + button gia metabash sto login CHECK
    //an den uparxei to username---> sign up with any password ---> msg account created CHECK
    