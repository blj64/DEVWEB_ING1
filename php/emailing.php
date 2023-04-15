<?php
    session_start();
    ob_start(); 
    
    $_SESSION["nameErr"] = $_SESSION["emailErr"] = $_SESSION["messageErr"] = $name = $email = $message = "";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $namePattern = "/^[a-zA-Z ]*$/";

    //Name Validation  
    if (empty($name)) 
    {  
        $_SESSION["nameErr"] = "Name is required";  
    } else {  
        //$name = input_data($name);  
            // check if name only contains letters and whitespace  
            if (!preg_match($namePattern,$name)) {  
                $_SESSION["nameErr"] = "Only alphabets and white space are allowed";  
            }  
    }  

    //Email Validation
    if (empty($email)) {  
        $_SESSION["emailErr"] = "Email is required";  
    }
    else
    {
        if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
            $_SESSION["emailErr"] = "Email is invalid";
        }   
    }

    //Message Validation  
    if (strlen ($message) < 10) 
    {
        $_SESSION["messageErr"] = "Message must be at least 10 characters long";
    }  

    //Redirection
    if (empty($_SESSION["nameErr"]) && empty($_SESSION["emailErr"]) && empty($_SESSION["messageErr"]))
    {

        echo "<script>alert('The message has been sent successfully !');
        window.location.href='/index.php';
        </script>";
    }
    else
    {
        header('Location: /php/contact.php');
    }
    
?>