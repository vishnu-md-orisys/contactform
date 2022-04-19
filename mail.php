<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $country=$_POST['country'];
   print_r($name);
   
    $errorEmpty=false;
    $errorEmail=false;

//     if(empty($name) || empty($email) ||empty($country)){
//         echo("<span class='form-error'>Fill in all the fields!</span>");
//         $errorEmpty=true;
//     }
//     elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//         echo("<span class='form-error'>write a valid EmailId!</span>");
//         $errorEmail=true;  
//     }
// else{
//     echo("<span class='form-error'>Fill in all the fields!</span>");
 
// }
}
else{
    echo("There was an error");
}
?>
