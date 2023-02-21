<?php
    
    require "./connect.php";
    
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == "" || $password == ""){
        $_SESSION['error'] = "Please input all field";
        header ('Location: ../view/LoginPage.php');
    }else{
        $stmt = $connect->prepare("SELECT * FROM user WHERE UserEmail = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $res = $stmt->get_result();
        
        if($res->num_rows ==0){
            $_SESSION['error']="The email address is not registered";
            header('Location: ../view/LoginPage.php');
        }else{
            $res = $res->fetch_assoc();
            // var_dump($res);
            if($password == $res['UserPassword']){
                $_SESSION['userid'] = $res['UserID'];
                $_SESSION['name'] = $res['UserName'];
                $_SESSION['email']=$res['UserEmail'];
                $_SESSION['error']="";
                var_dump($_SESSION);
                header('Location: ../view/HomePage.php');
            }else{
                $_SESSION['error']="The password is incorrect";
                header('Location: ../view/LoginPage.php');
            }
        }    
    }

    

?>