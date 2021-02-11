
<?php
include 'database.php';
//$obj = new database();
//$obj->loginklant('youssef', 'harry');


//$_POST = ['username'=>'youssef', 'password'=>'123']; 
$msg = '';
if(isset($_POST['submit'])){

    $fieldnames = ['username', 'password'];
    $error = false;

    foreach($fieldnames as $fieldname){
        if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
            $error = true; 
            $msg = 'error';
        }

    }

    if(!$error){
        $obj = new database();
        $obj->loginEmployee($_POST['username'], $_POST['password']);
        //yurr
    }else{
        //do something
    }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Employee FlowerPower</title>
    
<body>

<form action="medewerker.php" method="post">
        <input type="text" name="uname" placeholder="Username" required /><br>
        <input type="password" name="passw" placeholder="Password" required /><br>
        <a href="medewerker.php"><button>Log in</button></a>
        <a href="index.php">BACK</a>
    </form>

</body>
</html>

