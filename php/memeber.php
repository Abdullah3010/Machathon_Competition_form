<?php
 require 'connection.php';
   session_start();
  $_SESSION['done']=false;
 if(isset($_POST["submit"]) && isset($_SESSION['done']))
 {
  
    $nleader=$_SESSION['tel'];
    $teamname=$_SESSION['team'];
  
    $check5=$conn->query("SELECT nleader FROM ourteam WHERE nleader='$nleader");
    if($check5->num_rows>0)
    {
     header("Location:failed.php");
    }   

    $name1=$_POST['name1'];
    $tel1=$_POST['tel1'];
    $email1=$_POST['email1'];
    $uni1=$_POST['uni1'];
    $faculty1=$_POST['faculty1'];
    $department1=$_POST['department1'];
    $grad1=$_POST['grad1'];
    ///
    $b1=$_POST["check1"];
    if($b1!="check1")
   {$name2=$_POST['name2'];
    $tel2=$_POST['tel2'];
    $email2=$_POST['email2'];
    $uni2=$_POST['uni2'];
    $faculty2=$_POST['faculty2'];
    $department2=$_POST['department2'];
    $grad2=$_POST['grad2'];
   }
   $b2=$_POST["check2"];
    ///
    if($b2!="check2")
   { $name3=$_POST['name3'];
    $tel3=$_POST['tel3'];
    $email3=$_POST['email3'];
    $uni3=$_POST['uni3'];
    $faculty3=$_POST['faculty3'];
    $department3=$_POST['department3'];
    $grad3=$_POST['grad3'];
   }
    //
  
    if(empty($name1) || empty($tel1) || empty($email1) || empty($uni1) || empty($faculty1) || empty($department1) || empty($grad1))
    {
        echo"<script>alert('error')</script>";
    }
    else if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
        echo"<script>alert('error')</script>";
        header("Location:../team-members.php");
       
      }
    else if(!is_numeric($tel1) || !is_numeric($grad1))
    {
        echo"<script>alert('error')</script>";
        header("Location:../team-members.php");//de worong
    }
    else if (!preg_match("/^[a-zA-Z-' ]*$/",$name1)) {
      echo"<script>alert('error')</script>";
      header("Location:../team-members.php");
     }
    else
    {
       if($faculty1=="Other")
       {
         $faculty1=$_POST["other-fac1"];
       }
       if($uni1=="Other")
       {
         $uni1=$_POST["other-uni1"];
       }
       if($department1=="Other1")
       {
         $department1=$_POST["other-dep1"];
       }
       if (!preg_match("/^[a-zA-Z-' ]*$/",$uni1) || !preg_match("/^[a-zA-Z-' ]*$/",$faculty1) || !preg_match("/^[a-zA-Z-' ]*$/",$department1)) {
        echo"<script>alert('error')</script>";
        header("Location:../team-members.php");
        }
        $check1=$conn->query("SELECT number FROM leader WHERE number='$tel1'");
        $check2=$conn->query("SELECT email FROM leader WHERE email='$email1'");
        $check3=$conn->query("SELECT number FROM members WHERE number='$tel1'");
        $check4=$conn->query("SELECT email FROM members WHERE email='$email1'");
        if($check1->num_rows == 0 && $check3->num_rows==0)
        {   if($check2->num_rows==0 && $check4->num_rows==0)  
           { $stmt_insert=$conn->prepare("INSERT INTO members (name,number,email,uni,faculty,department,grad,nleader) VALUES 
                (?,?,?,?,?,?,?,?)");
                $stmt_insert->bind_param("sissssii" , $name1 , $tel1,$email1,$uni1,$faculty1,$department1,$grad1,$nleader);
                if (!$stmt_insert->execute())
                echo"<script>alert('error')</script>";
                //////
                 $team=$conn->prepare("INSERT INTO ourteam(name,nleader,tel)VALUES (?,?,?)");
                 $team->bind_param("sii",$teamname,$nleader,$tel1);
                 if(!$team->execute())
                 echo"<script>alert('error')</script>";
                
              
           }
           else{
            echo"<script>alert('This e-mail already exists!'); window.location.href='../team-members.php';</script>";}
           
        }
        else
        {
           echo"<script>alert('This phone number already exists!'); window.location.href='../team-members.php';</script>";}

    }
    ///
    if($b1!="check1")
   { if(empty($name2) || empty($tel2) || empty($email2) || empty($uni2) || empty($faculty2) || empty($department2) || empty($grad2))
    {
        //echo"<script>alert('error')</script>";
    }
    else if (!filter_var($email2, FILTER_VALIDATE_EMAIL)) {
        echo"<script>alert('error')</script>";
        header("Location:../team-members.php");
       
      }
    else if(!is_numeric($tel2) || !is_numeric($grad2))
    {
        echo"<script>alert('error')</script>";
        header("Location:../team-members.php");
    }
    else if (!preg_match("/^[a-zA-Z-' ]*$/",$name2)) {
      echo"<script>alert('error')</script>";
      header("Location:../team-members.php");
     }
    else
    {
       if($faculty2=="Other")
       {
         $faculty2=$_POST["other-fac2"];
       }
       if($uni2=="Other")
       {
         $uni2=$_POST["other-uni2"];
       }
       if($department2=="Other2")
       {
         $department2=$_POST["other-dep2"];
       }
       if (!preg_match("/^[a-zA-Z-' ]*$/",$uni2) || !preg_match("/^[a-zA-Z-' ]*$/",$faculty2) || !preg_match("/^[a-zA-Z-' ]*$/",$department2)) {
        echo"<script>alert('error')</script>";
        header("Location:..team-members.php");
        }
        $check1=$conn->query("SELECT number FROM leader WHERE number='$tel2'");
        $check2=$conn->query("SELECT email FROM leader WHERE email='$email2'");
        $check3=$conn->query("SELECT number FROM members WHERE number='$tel2'");
        $check4=$conn->query("SELECT email FROM members WHERE email='$email2'");
        if($check1->num_rows == 0  && $check3->num_rows==0)
        {   if($check2->num_rows==0  && $check4->num_rows==0)  
           { $stmt_insert=$conn->prepare("INSERT INTO members (name,number,email,uni,faculty,department,grad,nleader) VALUES 
                (?,?,?,?,?,?,?,?)");
                $stmt_insert->bind_param("sissssii" , $name2 , $tel2,$email2,$uni2,$faculty2,$department2,$grad2,$nleader);
                if (!$stmt_insert->execute())
                echo"<script>alert('error')</script>";
                 //////
                 $team=$conn->prepare("INSERT INTO ourteam(name,nleader,tel)VALUES (?,?,?)");
                 $team->bind_param("sii",$teamname,$nleader,$tel2);
                 if(!$team->execute())
                 echo"<script>alert('error')</script>";
                 
           }

           
           else{
            echo"<script>alert('This e-mail already exists!'); window.location.href='../team-members.php';</script>";}
           
        }
        else
        {
           echo"<script>alert('This phone number already exists!'); window.location.href='../team-members.php';</script>";}

    }
  }
    /////
    if($b2!="check2")
   { if(empty($name3) || empty($tel3) || empty($email3) || empty($uni3) || empty($faculty3) || empty($department3) || empty($grad3))
    {
       // echo"<script>alert('error')</script>";
    }
    else if (!filter_var($email3, FILTER_VALIDATE_EMAIL)) {
        echo"<script>alert('error')</script>";
        header("Location:../team-members.html");
       
      }
    else if(!is_numeric($tel3) || !is_numeric($grad3))
    {
        echo"<script>alert('error')</script>";
        header("Location:../team-members.html");
    }
    else if (!preg_match("/^[a-zA-Z-' ]*$/",$name3)) {
      echo"<script>alert('error')</script>";
      header("Location:../team-members.html");
     }
    else
    {
       if($faculty3=="Other")
       {
         $faculty3=$_POST["other-fac3"];
       }
       if($uni3=="Other")
       {
         $uni3=$_POST["other-uni3"];
       }
       if($department3=="Other3")
       {
         $department3=$_POST["other-dep3"];
       }
       if (!preg_match("/^[a-zA-Z-' ]*$/",$uni3) || !preg_match("/^[a-zA-Z-' ]*$/",$faculty3) || !preg_match("/^[a-zA-Z-' ]*$/",$department3)) {
        echo"<script>alert('error')</script>";
        header("Location:../team-members.php");
        }
        $check1=$conn->query("SELECT number FROM leader WHERE number='$tel3'");
        $check2=$conn->query("SELECT email FROM leader WHERE email='$email3'");
        $check3=$conn->query("SELECT number FROM members WHERE number='$tel3'");
        $check4=$conn->query("SELECT email FROM members WHERE email='$email3'");
        if($check1->num_rows == 0  && $check3->num_rows==0)
        {   if($check2->num_rows==0  && $check4->num_rows==0)  
           { $stmt_insert=$conn->prepare("INSERT INTO members (name,number,email,uni,faculty,department,grad,nleader) VALUES 
                (?,?,?,?,?,?,?,?)");
                $stmt_insert->bind_param("sissssii" , $name3 , $tel3,$email3,$uni3,$faculty3,$department3,$grad3,$nleader);
                if (!$stmt_insert->execute())
                echo"<script>alert('error')</script>";
                 //////
                 $team=$conn->prepare("INSERT INTO ourteam(name,nleader,tel)VALUES (?,?,?)");
                 $team->bind_param("sii",$teamname,$nleader,$tel3);
                 if(!$team->execute())
                 echo"<script>alert('error')</script>";
                 
           }
           else{
            echo"<script>alert('This e-mail already exists!'); window.location.href='../team-members.php';</script>";}
           
        }
        else
        {
           echo"<script>alert('This phone number already exists!'); window.location.href='../team-members.php';</script>";}

    }
  }
     header("Location:failed.php");
    

 }
 else{
 header("Location:failed.php");
 }
?>