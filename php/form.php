<?php
 require 'connection.php';
 if(isset($_POST["submit"]))
 {
    $name=$_POST['name'];
    $tel=$_POST['tel'];
    $email=$_POST['email'];
    $nmember=$_POST['expected'];
    $uni=$_POST['uni'];
    $faculty=$_POST['faculty'];
    $department=$_POST['department'];
    $grad=$_POST['grad'];
    
    if(empty($name) || empty($tel) || empty($email) ||empty($nmember) || empty($uni) || empty($faculty) || empty($department) || empty($grad))
    {
      echo"<script>alert('error!'); window.location.href='../index.html';</script>";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo"<script>alert('error!'); window.location.href='../index.html';</script>";
       
      }
    else if(!is_numeric($tel) || !is_numeric($nmember) || !is_numeric($grad))
    {
      echo"<script>alert('error!'); window.location.href='../index.html';</script>";
    }
    else if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      echo"<script>alert('error!'); window.location.href='../index.html';</script>";
    }
    else
    { 
      // echo $faculty;
      // echo $uni;
      // echo $department;
      
       if($faculty=="Other")
       {
         $faculty=$_POST["other-fac"];
       }
       if($uni=="Other")
       {
         $uni=$_POST["other-uni"];
       }
       if($department=="Other")
       {
         $department=$_POST["other-dep"];
       }
        if (!preg_match("/^[a-zA-Z-' ]*$/",$uni) || !preg_match("/^[a-zA-Z-' ]*$/",$faculty) ||!preg_match("/^[a-zA-Z-' ]*$/",$department)) {
          echo"<script>alert('error!'); window.location.href='../index.html';</script>";
        }
        $check1=$conn->query("SELECT number FROM leader WHERE number='$tel'");
        $check2=$conn->query("SELECT email FROM leader WHERE email='$email'");
        $check3=$conn->query("SELECT number FROM members WHERE number='$tel'");
        $check4=$conn->query("SELECT email FROM members WHERE email='$email'");

        if($check1->num_rows == 0 && $check3->num_rows==0)
        {   if($check2->num_rows==0 && $check4->num_rows==0)  
           { $stmt_insert=$conn->prepare("INSERT INTO leader (name,number,email,nmember,uni,faculty,department,grad) VALUES 
                (?,?,?,?,?,?,?,?)");
                $stmt_insert->bind_param("sisisssi" , $name , $tel,$email,$nmember,$uni,$faculty,$department,$grad);
                if (!$stmt_insert->execute())
                echo"<script>alert('error!'); window.location.href='../index.html';</script>";
           }
           else{
            echo"<script>alert('This e-mail already exists!'); window.location.href='../index.html';</script>";}
           
        }
        else
        {
           echo"<script>alert('This phone number already exists!'); window.location.href='../index.html';</script>";}

    }
    echo"<script>alert('Thank you! We will contact you soon'); window.location.href='https://stp-org.com/';</script>";}
?>