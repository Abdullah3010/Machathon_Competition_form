<?php
 session_start();
 require 'connection.php';
 if(isset($_POST["submit"]))
 {
    
   $phone=$_POST['leader-tel'];
    $name=$_POST['team-name'];
   $check1=$conn->query("SELECT number FROM leader WHERE number='$phone'");
  
   $check2=$conn->query("SELECT name FROM ourteam WHERE name='$name'");
   $check3=$conn->query("SELECT nleader FROM ourteam WHERE nleader='$phone'");
   $check4=$conn->query("SELECT number FROM members WHERE number='$phone'");
   $_SESSION['tel']=$phone;
   $_SESSION['team']=$name;
   $_SESSION['done']=false;
   if($check1->num_rows == 0 || $check2->num_rows>0  || $check4->num_rows>0)
   {
     //echo"error1";
    // var_dump($_SESSION['done']);
    echo"<script>alert('error!'); window.location.href='failed.php';</script>";
     
   }
   else if($check3->num_rows>0)
   {
   // echo"error";
   // var_dump($_SESSION['done']);
   echo"<script>alert('error!'); window.location.href='failed.php';</script>";
   }
   else{
    // echo"true";
    $_SESSION['done']=true;
   // var_dump($_SESSION['done']);
     header("Location:../team-members.php");
   }
 }
?>