<?php
    require_once "database_conn.php";
    session_start();

    $form_name=$_POST['form_name'];
    
    function check_user_level_upgrade($user_id,$user_current_level){
        echo 'Current level is'.(string)$_SESSION['user']['current_level'];
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
            echo"You are connected<br>";
        }
        else{
            echo"You could not connect<br>";
        }
    

        if($user_current_level==1){
            echo 'I am in check level==1 statement ';
            $query = "SELECT grade FROM quiz_grades WHERE user_id = '" . $user_id . "' AND quiz_id BETWEEN 1 AND 9";
            $result= mysqli_query($conn,$query);
            $sum=0;
            foreach ($result as $row) {
                echo $row['grade'].'<br>';
                $sum+=$row['grade'];
            }
            echo 'Sum is:'.(string)$row['grade'].'<br>';
            if($sum>=720){
                $update_grade_query = "UPDATE users set current_level= 2 
                where user_id = '" . $user_id . "' ";
                $result= mysqli_query($conn,$update_grade_query);
                $_SESSION['user']['current_level'] =2;
                header('Location: quiz.php?msg1=level_up');
            }
        }
        // else means that current_level==2
        else{
            echo 'I am in check level==2 statement ';
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
                $_SESSION['user']['current_level'] =3;
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
        $result= mysqli_query($conn,$query);

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
        echo'I find form name';
        $user_id=(int)$_SESSION['user']['user_id'];
        $quiz_id=(int)$_POST["quiz_id"];
        $grade=(int)$_POST["grade"];
        $user_current_level=(int)$_SESSION['user']['current_level'];
  
        
        $query3="SELECT * from quiz_grades 
        where user_id = '" . $user_id . "' and quiz_id = '" . $quiz_id . "'  ";
        $result3= mysqli_query($conn,$query3);  
        $saved_quiz=mysqli_fetch_array($result3);

        if($result3->num_rows==0){
            echo'I insert query';
            $insert_grade_query = "INSERT into quiz_grades values (null, $quiz_id, $user_id, $grade)";
            $result= mysqli_query($conn,$insert_grade_query);
            $quiz_level=ceil($quiz_id/9);
            echo 'Current user level and quiz level are'.(string)$user_current_level.'and'.(string)$quiz_level;
            if($user_current_level!=3 and $user_current_level==$quiz_level){
                echo'Check function called after insert';
                check_user_level_upgrade($user_id,$user_current_level);
            }
            // This means that user is solving a quiz that is not at this level, so its current_level status cannot be influenced...So just redirect to quiz 
            else{header('Location: quiz.php');}
            }

        //This means that the user has already solved this quiz, and we check if an update is to be done.    
        else{
            $current_grade=$saved_quiz['grade'];
            if($current_grade<$grade){
                echo'I update query';
                $update_grade_query = "UPDATE quiz_grades set grade= $grade 
                where user_id = '" . $user_id . "' and quiz_id = '" . $quiz_id . "'  ";
                $result= mysqli_query($conn,$update_grade_query);
                $quiz_level=ceil($quiz_id/9);
                echo 'Current user level and quiz level are'.(string)$user_current_level.'and'.(string)$quiz_level;
                //if current level==3--> expert user level--->no need to check if his level can be upgraded.
                if($user_current_level!=3 and $user_current_level==$quiz_level){
                    echo'Check function called after update';
                    check_user_level_upgrade($user_id,$user_current_level);
                }
                // This means that user is solving a quiz that is not at this level, so its current_level status cannot be influenced...So just redirect to quiz 
                else{header('Location: quiz.php');}
            }
            else{header('Location: quiz.php');}
        }
    }
