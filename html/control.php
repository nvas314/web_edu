<?php
    //require_once "database_conn.php";
    session_start();
    $db_server="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="ergasia_acropolis_db";
    $conn="";
    //connection to the mysql DB
        try{
            $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
        }
        catch(mysqli_sql_exception){
            echo"Could not connect to the database<br>";
        }
    if($conn){
        //echo"You are connected<br>";
    }
    else{
        //echo"You could not connect<br>";
    }


    $form_name=$_POST['form_name'];
    //print_r($_SESSION);


    function check_user_level_upgrade($user_id,$user_current_level){
        $db_server="localhost";
        $db_user="root";
        $db_pass="";
        $db_name="ergasia_acropolis_db";
        $conn="";
        //connection to the mysql DB
            try{
                $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
            }
            catch(mysqli_sql_exception){
                echo"Could not connect to the database<br>";
            }
        if($conn){
            //echo"You are connected<br>";
        }
        else{
            //echo"You could not connect<br>";
        }
    
        if($user_current_level==1){
            $query = "SELECT grade FROM quiz_grades WHERE user_id = '" . $user_id . "' AND quiz_id BETWEEN 1 AND 9";
            $result= mysqli_query($conn,$query);
            $sum=0;
            foreach ($result as $row) {
                echo $row['grade'] . "<br>";
                $sum+=$row['grade'];
            }
            if($sum>=720){
                $update_grade_query = "UPDATE users set current_level= 2 
                where user_id = '" . $user_id . "' ";
                $result= mysqli_query($conn,$update_grade_query);
                header('Location: quiz.php?msg1=level_up');
            }
        }
        else{
            $query = "SELECT grade FROM quiz_grades WHERE user_id = '" . $user_id . "' AND quiz_id BETWEEN 10 AND 18";
            $result= mysqli_query($conn,$query);
            $sum=0;
            
            foreach ($result as $row) {
                echo $row['grade'] . "<br>";
                $sum+=$row['grade'];

            }
            if($sum>=720){
                $update_grade_query = "UPDATE users set current_level=3 
                where user_id = '" . $user_id . "' ";
                $result= mysqli_query($conn,$update_grade_query);
                header('Location: quiz.php?msg2=level_up');
            }
        }
    }

    

    if($form_name==='register_form'){
        $username=$_POST["username"];
        $password=$_POST["password"];
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
            $query = "INSERT INTO users values(null, '$username',  '$password',  '$first_name','$last_name','$email', 1)";
            $result= mysqli_query($conn,$query);
            header('Location: index.php?msg1=successful_register');    
            }
    }

    if($form_name==='login_form'){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $query1="SELECT * from users 
        where username = '" . $username . "' ";
        $result1= mysqli_query($conn,$query1);
    
        
        $query2="SELECT * from users 
        where username = '" . $username . "'  and password = '" . $password . "' ";
        $result2= mysqli_query($conn,$query2);
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
    }

    if($form_name==='grade_form'){
        $user_id=(int)$_SESSION['user']['user_id'];
        $quiz_id=(int)$_POST["quiz_id"];
        $grade=(int)$_POST["grade"];
        $user_current_level=(int)$_SESSION['user']['current_level'];
  
        
        $query3="SELECT * from quiz_grades 
        where user_id = '" . $user_id . "' and quiz_id = '" . $quiz_id . "'  ";
        $result3= mysqli_query($conn,$query3);  
        $saved_quiz=mysqli_fetch_array($result3);

        if($result3->num_rows==0){
            $insert_grade_query = "INSERT into quiz_grades values (null, $quiz_id, $user_id, $grade)";
            $result= mysqli_query($conn,$insert_grade_query);
            check_user_level_upgrade($user_id,$user_current_level);

        }
        else{
            $current_grade=$saved_quiz['grade'];
            if($current_grade<$grade){
                $update_grade_query = "UPDATE quiz_grades set grade= $grade 
                where user_id = '" . $user_id . "' and quiz_id = '" . $quiz_id . "'  ";
                $result= mysqli_query($conn,$update_grade_query);

                $quiz_level=ceil($quiz_id/9);
                //if current level==3--> expert user level--->no need to check if his level can be upgraded.
                if($user_current_level!=3 and $user_current_level==$quiz_level){
                    check_user_level_upgrade($user_id,$user_current_level);
                }

            }

        }
    }


