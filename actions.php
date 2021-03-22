

<?php

    include("functions.php");

    $error = "";

    if ($_GET['action'] == "validateID"){

        $query = "SELECT * FROM college_id WHERE `clg_id` = '".mysqli_real_escape_string($link, $_POST['valID'])."' LIMIT 1";

        $result = mysqli_query($link, $query);

        $row = mysqli_fetch_assoc($result);

        if($row['status'] == "pending"){
            echo 1;
        }        

    }

    if ($_GET['action'] == "checkUsername"){

        $query = "SELECT * FROM users WHERE `username` = '".mysqli_real_escape_string($link, $_POST['userName'])."' LIMIT 1";

        $result = mysqli_query($link, $query);

        $row = mysqli_fetch_assoc($result);

        if($row['username'] != ""){
            echo 1;
        }        

    }

    if ($_GET['action'] == "register"){
        $email = $_POST['userName']."@college-connect.in";
        $query = "INSERT INTO users (`clg_id`, `username`, `email`, `first_name`, `last_name`, `password`, `alter_email`, `gender`, `role`, `stream`)
                    VALUES ('".mysqli_real_escape_string($link, $_POST['clg_id'])."',
                    '". mysqli_real_escape_string($link, $_POST['userName'])."',
                    '". mysqli_real_escape_string($link, $email)."',
                    '". mysqli_real_escape_string($link, $_POST['firstName'])."', 
                    '". mysqli_real_escape_string($link, $_POST['lastName'])."',
                    '". mysqli_real_escape_string($link, $_POST['password'])."', 
                    '". mysqli_real_escape_string($link, $_POST['alterEmail'])."',
                    '". mysqli_real_escape_string($link, $_POST['gender'])."',
                    '". mysqli_real_escape_string($link, $_POST['role'])."', 
                    '". mysqli_real_escape_string($link, $_POST['stream'])."')";
        
        

        if(mysqli_query($link, $query)){
            $_SESSION['id'] = mysqli_insert_id($link);
                    
            $query = "UPDATE users SET password = '". md5(md5($_SESSION['id']).$_POST['password']) ."' WHERE id = ".$_SESSION['id']." LIMIT 1";
            
            if(mysqli_query($link, $query)){
                $active = "active";
                $query = "UPDATE college_id SET `status` = '".mysqli_real_escape_string($link, $active)."'
                                                WHERE `clg_id` = '".mysqli_real_escape_string($link, $_POST['valID'])."' LIMIT 1";
                mysqli_query($link, $query);
                echo 1;

            }

            

            
        }      

    }

    if ($_GET['action'] == "login"){

        $query = "SELECT * FROM users WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
            
        $result = mysqli_query($link, $query);
        
        $row = mysqli_fetch_assoc($result);
            
            if ($row['password'] == md5(md5($row['id']).$_POST['password'])) {
                
                echo 1;
                
                $_SESSION['id'] = $row['id'];
                
            } else {
                echo "Enter correct username/password";
            }

    }

    if ($_GET['action'] == "updatePassword"){

        $query = "SELECT * FROM users WHERE `id` = '".mysqli_real_escape_string($link, $_SESSION['id'])."' LIMIT 1";

        $result = mysqli_query($link, $query);

        $row = mysqli_fetch_assoc($result);

        

        if ($row['password'] == md5(md5($_SESSION['id']).$_POST['oldPassword'])) {
                    
            $query = "UPDATE users SET password = '". md5(md5($_SESSION['id']).$_POST['newPassword']) ."' WHERE id = ".$_SESSION['id']." LIMIT 1";
            mysqli_query($link, $query);

            echo 1;
            
            
        } else {
            
            echo "Please Enter Correct Old password";
            

        }

    }

?>

