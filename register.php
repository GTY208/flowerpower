<?php

include 'database.php';


if(isset($_POST['submit'])){

  // maak een array met alle name attributes
  $fields = [
    	"uname",
      "fname",
      "lname",
      "pwd",
      "email"
  ];

$obj = new HelperFunctions();
$no_error = $obj->has_provided_input_for_required_fields($fields);

  // in case of field values, proceed, execute insert
  if($no_error){
    $username = $_POST['uname'];
    $firstname = $_POST['fname'];
    $middlename = $_POST['mname'];
    $lastname = $_POST['lname'];
    $password =$_POST['pwd'];
    $email = $_POST['email'];

    $db = new database('localhost', 'root', '', 'project1', 'utf8');
    $db->create_or_update_user($username, $firstname, $middlename, $lastname, $password, $email);
    }
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Registratie</title>
  </head>

  <body>
  	<form method="post" action='register.php' method='post' accept-charset='UTF-8'>
      <fieldset >
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
        <legend>Registratie</legend>

        <input type="text" name="uname" placeholder="username" required/>
        <br>
        <input type="text" name="fname" placeholder="firstname" required/>
        <br>
      	<input type="text" name="mname" placeholder="middlename" />
        <br>  
      	<input type="text" name="lname" placeholder="lastname" required/>
        <br>
        <input type="email" name="email" placeholder="e-mail" required/>
        <br>
        <input type="password" name="pwd" placeholder="password" required/>
        <br>
        <input type="password" name="repeatpwd" placeholder="repeat password" required/>
        <br>
        <input type="submit" name='submit' value"Sign up!"/>
      </fieldset>
      <br>
      <a href="loginCustomer.php">Ik heb al een account</a>
    </form>

    <div class="container">
  <h1>FLOWERPOWER</h1>  
</div>

  </body>
</html>