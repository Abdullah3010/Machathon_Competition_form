<?php
 session_start();
 $_SESSION['done']=false;
 $_SESSION['tel']="";
 $_SESSION['team']="";
// unset($_SESSION['done']);
 session_unset();
 session_destroy();
//  var_dump($_SESSION['done']);
 header("Location:../leader-phone.html");
?>