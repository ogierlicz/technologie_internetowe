<?php
    function optimizeInput($input){
        $input = stripslashes($input);
        $input = htmlentities($input);
        echo $input;
    }
    
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    //    print_r($_POST);
     $requiredFields =["firstName", "lastName", "email", "confirm_email", "password", "confirm_password", "birthday"];
 
     $errors[] = "";
     foreach ($requiredFields as $key => $value){
         // echo "$key: $value<br>";
         if (empty($_POST[$value])){
             // echo "$key: $value<br>";
             $errors[] = "Pole <b>$value</b> jest wymagane";
         }
     }
 
     if ($_POST['email'] != $_POST['confirm_email']){
         $errors[] = "Adresy email muszą być identyczne";
     }
 
     if ($_POST['additional_email'] != $_POST['confirm_additional_email']){
         $errors[] = "Dodatkowe adresy email muszą być identyczne";
     }
 
     if ($_POST['password'] != $_POST['confirm_password']){
         $errors[] = "Hasła muszą być identyczne";
     }
 
     $_SESSION['error_message'] = implode("<br>", $errors);
    //  echo $_SESSION['error_message'];
     echo "<script>history.back();</script>";

    optimizeInput($_POST["firstName"]);

    foreach ($requiredFields as $key => $value){

    }
   
    }else{
    header(header: "location: ../pages/view/register.php");
   }

?>