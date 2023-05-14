<?php
// error_reporting(0);
 $otp1 = $_POST['otp1'];
 $otp2 = $_POST['otp2'];
 $otp3 = $_POST['otp3'];
 $otp4 = $_POST['otp4'];
 $email_from = $_POST['email_alpha'];
 date_default_timezone_set("Asia/Kolkata");



$sql1 = "SELECT * FROM email_tried";
 $conn = new mysqli('localhost', 'root', '', 'email_auth');
 $result = mysqli_query($conn,$sql1);
 $num_result = mysqli_num_rows($result);

 $sql2 = "SELECT * FROM email_tried WHERE email = '$email_from'";
 $run = $conn->query($sql2);
 $row = $run->fetch_assoc(); 
$date_stored = $row["curdate"];

 $result_new = mysqli_query($conn, "SELECT DATE_ADD('$date_stored', INTERVAL 15 MINUTE);");
 $date = mysqli_fetch_row($result_new)[0];

 
 $result_now = mysqli_query($conn, "SELECT now()");
 $date_now = mysqli_fetch_row($result_now)[0];

 if($otp1 == $row["otp1"] && $otp2 ==  $row["otp2"] && $otp3 ==  $row["otp3"] && $otp4 ==  $row["otp4"]
    && $date_stored < $date_now
   )
   {
    //  echo"YOU ARE VERIFIED YOOOO";
   }
 else{
    header("location:enter_otp.php?id=15&em=$email_from");
 }  
?>
<html>
    <head>
      <link rel="stylesheet" href="css/validated.css">
    </head>
     <body>
        <div class="box">
            <img src="imgs/lock_opened.png" alt="opend_lock" class="img_class">
            <br>
            <h1 style="color:white; margin-top:-50px;">Verified succesfully !</h1>
            <br>
            <a href="frontpage.php" class="link">Head back to register page</a>
        </div>    
    </body>
</html>
