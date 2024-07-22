<?php
        require_once "database_conn.php";
        $form_name=$_POST["form_name"];
        $username=$_POST["username"];
        $password=$_POST["password"];
    

    if($form_name==='register_form'){
        $last_name=$_POST["lastname"];
        $first_name=$_POST["firstname"];
        $email=$_POST["email"];
      
        $query="select * from users 
        where username = '" . $username . "' ";
        //echo $query;
        $result= mysqli_query($conn,$query);
        //print_r($result);
        //die();

        if($result->num_rows==1){
            header('Location: sign-up.php?msg2=error');
        }
        
        else{
            $query = "insert into users values(null, '$username',  '$password',  '$first_name','$last_name','$email', 1)";
            $result= mysqli_query($conn,$query);
            header('Location: index.php?msg1=successful_register');    
            }
    }

    if($form_name==='login_form'){

        $query1="select * from users 
        where username = '" . $username . "' ";
        $result1= mysqli_query($conn,$query1);
    
        
        $query2="select * from users 
        where username = '" . $username . "'  and password = '" . $password . "' ";
        //echo $query;
        $result2= mysqli_query($conn,$query2);
        //print_r($result);
        //die();
        $user=mysqli_fetch_array($result2);
        
        
        if($result1->num_rows==0){
            header('Location: sign-in.php?msg2=error');
        }
        else{
            if($result2->num_rows==1){
                session_start();
                $_SESSION['user'] = $user;
                header('Location: index.php');
            }
            else{
                header('Location: sign-in.php?msg3=error');
            }
            
        }

    if($form_name==='grade_form'){
        $user_id=$_POST["id"];
        $quiz_id=$_POST["quiz_id"];
        $grade=$_POST["grade"];
        
        $query3="select * from quiz_grades 
        where user_id = '" . $user_id . "' and quiz_id = '" . $quiz_id . "'  ";
        $result3= mysqli_query($conn,$query3);  
        $saved_quiz=mysqli_fetch_array($result3);

        if($result3->num_rows==0){
            $query = "insert into quiz_grades values(null, '$user_id',  ' $quiz_id',  '$grade')"; 
        }
        else{
            $current_grade=$saved_quiz['grade'];
            if($current_grade<$grade){
                $query = "update quiz_grades set  grade='$grade') 
                where user_id = '" . $user_id . "' and quiz_id = '" . $quiz_id . "'  ";

            }

        }



    }
    
    }




    




    



    // an uparxei to username---> error(msg1)---->msg1='Username already exists' + button gia metabash sto login CHECK
    //an den uparxei to username---> sign up with any password ---> msg account created CHECK
    