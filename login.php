<?php
include 'init.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="description" content="Description of your site goes here">
        <meta name="keywords" content="Eurotrade, Servis, Eurotrade servis">
        <link href="css/login.css" rel="stylesheet" type="text/css">
    </head>
    <body>

  
  <div class="login-card">
    <h1>Log-in</h1><br>
  <form >
    <input type="text" name="user" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
<?php
$user = mysql_real_escape_string($_GET['user']);
$pass = mysql_real_escape_string($_GET['pass']);


if (!empty($_GET['login'])){
if (login($user, $pass)===TRUE){
  $_SESSION['username'] = $user;
  header('location: index.php');
}
else{
  echo '<script>
alert("Uneseni netočni podaci!")
</script>';
}
}
?>
  
</div>


  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>
  
  </body>
  </html>