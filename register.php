<?php

include 'database.php';


if(isset($_POST['submit'])){

 
  $fields = [
    	"uname",
      "fname",
      "lname",
      "pwd",
      "email"
  ];

$obj = new HelperFunctions();
$no_error = $obj->has_provided_input_for_required_fields($fields);

  
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
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="registerStyle">
    <form method="POST" class="loginForm">       
      <h2 class="form-signin-heading">&nbsp&nbsp&nbsp&nbspRegistreren</h2>

      <input type="text" class="formRegister" name="voorletter" placeholder="Voorletter" maxlength="1" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required autofocus/><br><br>

      <input type="text" class="formRegister" name="tussenvoegsel" placeholder="Tussenvoegsel" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" /><br><br>

      <input type="text" class="formRegister" name="achternaam" placeholder="Achternaam" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required/><br><br>

      <input type="text" class="formRegister" name="adres" placeholder="Adres" required/><br><br>

      <input type="text" class="formRegister" name="postcode" placeholder="Postcode" required/><br><br>

      <input type="text" class="formRegister" name="woonplaats" placeholder="Woonplaats" required/><br><br>

      <input type="text" class="formRegister" name="geboortedatum" placeholder="Geboortedatum" required/><br><br>

      <input type="gebruikersnaam" class="formRegister" name="gebruikersnaam" placeholder="Gebruikersnaam" required /><br><br>

      <input type="password" class="formRegister" name="password" placeholder="Password" required=""/><br><br>

      <button class="button" type="submit">Registreren</button>   
    </form>
  </div>




   
</body>
</html> 