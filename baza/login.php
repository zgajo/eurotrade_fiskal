<?php
function login($user, $pass){
  $user = stripslashes($user);
  $pass = stripslashes($pass);
  
  $query = mysql_query("SELECT count(*) FROM fisk_user WHERE username = '$user' AND password = '$pass'");
  if (mysql_result($query, 0) == 1){
    return true;
  }
  else{
    return false;
  }
  
}
?>