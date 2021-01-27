<?php

include 'database.php';
$obj = new database();
$obj->insertKlantenUser('Gideon', 'yup');

//$_POST = ['username'=>'Gideon', 'password'=>'123']; 

if(isset($_POST['submit'])){

    $fieldnames = ['username', 'password'];
    $error = false;

    foreach($fieldnames as $fieldname){
        if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
            $error = true; 
        }

    }

    if(!$error){
        //YUDJND
    }else{
        //dHUJMKMGHJKL
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Customer FlowerPower</title>
    
<body>

<form action="index.php" method="post">
        <input type="text" name="uname" placeholder="Username" required /><br>
        <input type="password" name="passw" placeholder="Password" required /><br>
        <input type="submit" value="Sign in" /><br>
        <a href="index.php">BACK</a>
    </form>



</body>
</html>




