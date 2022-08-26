<?php 
    session_start();
    include "config.php";
    if(isset($_POST['signup_button'])){

        $registerName = $_POST['registerName'];
        $registerUsername = $_POST['registerUsername'];
        $registerEmail = $_POST['registerEmail'];
        $registerPassword = $_POST['registerPassword'];
        $registerRepeatPassword = $_POST['registerRepeatPassword'];
        $registerCheck = isset($_POST['registerCheck']) ?: 0;
        $error = "";

        $checkemail = mysqli_query($con,'SELECT * from users where email = "'.$registerEmail.'"');
	    $ce = mysqli_fetch_array($checkemail);

        $checkusername = mysqli_query($con,'SELECT * from users where username = "'.$registerUsername.'"');
	    $cu = mysqli_fetch_array($checkusername);

        if(empty($registerName)){
            $error .= "<li>Please enter name!</li>";
        }
        if(empty($registerUsername)){
            $error .= "<li>Please enter username!</li>";
        }
        if(empty($registerEmail)){
            $error .= "<li>Please enter email!</li>";
        }
        if(empty($registerPassword)){
            $error .= "<li>Please enter password!</li>";
        }
        if(empty($registerRepeatPassword)){
            $error .= "<li>Please enter repeat password!</li>";
        }
        if($registerCheck == 0){
            $error .= "<li>Please Check the term and condition checkbox!</li>";
        }
        if(($registerPassword != $registerRepeatPassword) && (!empty($registerPassword) && !empty($registerRepeatPassword))){
            $error .= "<li>Password and repeat password doesnot match!</li>";
        }
        if($ce){
            $error .= "<li>Email Already exists!</li>";
        }
        if($cu){
            $error .= "<li>Username Already exists!</li>";
        }

        if($error!=""){
            $_SESSION['errors'] = $error;
        }
        else{
            $insert = mysqli_query($con,'INSERT INTO `users`(`name`, `username`, `email`, `password`) VALUES ("'.$registerName.'","'.$registerUsername.'","'.$registerEmail.'","'.$registerPassword.'")');
            if($insert){
               ?>
               <script>
                alert("Registration Successfully done");
                window.location.href = "signup.php"
               </script>
               <?php
            }
            else{
                $_SESSION['errors'] = "<li>Registration failed due to unknown reason!</li>";
            }
        }


    }

    if(isset($_POST['loginin_button'])){

        $registerEmail = $_POST['email'];
        $registerPassword = $_POST['password'];
        $error = "";

        if(empty($registerEmail)){
            $error .= "<li>Please enter email!</li>";
        }
        if(empty($registerPassword)){
            $error .= "<li>Please enter password!</li>";
        }

        $checkuser = mysqli_query($con,'SELECT * from users where email = "'.$registerEmail.'" && password = "'.$registerPassword.'"');
	    $cu = mysqli_fetch_array($checkuser);

        if($error!=""){
            $_SESSION['errors'] = $error;
        }
        else{
            if(!$cu){
                $_SESSION['errors'] = "<li>Invalid username or password entered!</li>";
            }
            else{
                $_SESSION['login_user'] = $cu['id'];
                ?>
               <script>
                alert("Logged In");
                window.location.href = "index.php"
               </script>
               <?php
            }
        }


    }

    if(isset($_GET['logout'])){
        unset($_SESSION['login_user']);
    }

?>