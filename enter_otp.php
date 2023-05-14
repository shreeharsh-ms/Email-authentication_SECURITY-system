<html lang="en">
<!-- THIS CODE IS WRITTERN BY SHREEHARSH SHIVPUJE AS MINIOR PROECT FOR MAJORE PROJECT
THIS IS NOT COMPLEATLY ACCURATE WEBSITE (NOT RESPONSIVE)
ITS JUST SAMPLE VERSION FOR MAJORE PROJECT -->
<head>
    <!-- LINKS -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/input_limit.js"></script>
    <!-- BOX ICON LINK -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- LINKS FOR ADDING EXTERNAL GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <!-- IMPORTING EXTERNAL CSS -->
    <link rel="stylesheet" href="css/project.css">
    <!-- IMPORTING EXTERNAL JS -->
    <!-- <script src="js/project.js"></script> -->
    <title>Minor project 2</title>
    <link rel="ICON" type="image/png" href="imgs/lock.png">
    <style>
        body {
            background-image: url(imgs/back.jpg);
        }
    </style>
</head>
<body>
    <?php
    error_reporting(0);
    $email = $_POST['EMAIL'];
    $ver = $_GET["id"];
  $conn = new mysqli('localhost', 'root', '', 'email_auth');
         $el = mysqli_query($conn, "SELECT id FROM email_tried WHERE email =  '$email' ");
         $cout = mysqli_num_rows($el);
    ?>
    <!-- header including navbar and logo -->
    <header>
        <!-- Designing Navbar -->
        <div class="nav_bar">
            <!-- Logo and text  -->
            <div class="logo">
                <img style="width: 50px; height: 50px;" src="imgs/lock.png" alt="lock">
                <p
                    style=" text-decoration: underline; font-size: 21px; font-weight: bold; color: rgb(182, 187, 228); font-family: 'Oswald', sans-serif;">
                    Authentication</p>
            </div>
            <!-- Links to different pages -->
            <div class="nav-main">
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">About us</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Login and Signin button -->
            <div class="log-sign">

                <a href="#" class="hyperlink_s">Log
                    In</a>
                <a href="#" class="hyperlink_s">SignIn</a>
            </div>
        </div>
    </header>
    <!-- Header Compleated -->
    <!-- Main body of page -->
    <main>
        <div class="outerbox">
            <div class="innerbox" style="border-radius: 20px;">
                <!-- FORM FOR OTP START -->
                <form action="validate.php" method="POST">
                <?php
                    require "otp.php";
                ?>
                <div>
                    <div style="display: flex;">

                    <!-- IMG IN REQUEST OTP -->
                        <img style="width: 50px; height: 50px; margin-left: 30px; margin-top: 20px;" src="imgs/lock.png"
                            alt="lock">
                        <p
                            style=" margin-left: 5px; margin-top: 35px; color: aquamarine; font-weight: bold; font-size: 20px;">
                            Request otp

                        </p>
                    </div>
                    <!-- UNDERLINE WITH DIV-->
                    <div
                        style="margin-top: 10px; width: 60%; float: left; margin-left: 40px; height: 4px; border-radius: 50px; background-color: aquamarine;">
                    </div><br>
                    <!-- DIV CONTAINING INPUT AND BUTTON-->
                    <div id="id2" style="display:block;">
                        <div class="request_for_otp2">
                            <?php
                               $id = $_GET["id"];
                                 if($id == 15)
                                    {
                                       echo '
                                       <div class="box_error">
                                       <p style="font-size: 21px; color: red;">
                                           Wrong otp !
                                       </p>
                                     </div> 
                                       ' ;
                                    }
                                  else if($cout == 1){
                                    echo '
                                    <div class="box_error">
                                    <p style="font-size: 21px; color: red;">
                                        Something Went Wrong !
                                    </p>
                                    </div> 
                                    ' ;
                                  }
                                  else{

                                    echo '
                                    <div class="box_error" style="background-color: rgb(166, 215, 199); border:1px solid green;">
                                    <p style="font-size: 21px; color: green;">
                                        Check Your Mail for otp !
                                    </p>
                            </div> 
                                    ';
                            //         echo '
                                    
                            //         <div class="box_error" style="margin-top:-170px; background-color:transparent; border:none;">
                            // </div> 
                            //         ';
                                 }     
                                if($id == 1)
                                    {
                                        $em = $_GET["em"];
                                        $conn = new mysqli('localhost', 'root', '', 'email_auth');
                                        $sql_up = "DELETE From email_tried where email = '$em';";

                                        $run_up =mysqli_query($conn, $sql_up);
                                          if($run_up)
                                            {
                                                echo'<script>
                                                window.location.href="frontpage.php";
                                                </script>';
                                            }
                                    }  
                            ?>
                            <?php
                               if($cout != 1)
                                 {?>
                                    <p class="otp" style="color: aquamarine; font-size: 30px; margin-top: -10px;">Enter otp</p>
                                    <div
                                    style="width: 55%; height: 50px; display: flex; justify-content: space-between; align-items: center;">
                                    <input type="text" class="input_box_for_otp" maxlength="1" id="o1" onkeyup="auto_blur(this, 'o2')" onkeypress="checkkey(event)" name="otp1">
                                    <input type="text" class="input_box_for_otp" maxlength="1" id="o2" onkeyup="auto_blur(this, 'o3')" onkeypress="checkkey(event)" name="otp2">
                                    <input type="text" class="input_box_for_otp" maxlength="1" id="o3" onkeyup="auto_blur(this, 'o4')" onkeypress="checkkey(event)" name="otp3">
                                    <input type="text" class="input_box_for_otp" maxlength="1" id="o4" onkeyup="auto_blur(this, 'o1')" onkeypress="checkkey(event)" name="otp4">
                                </div>
                                
                                <button class="button_sub" style="margin-top: 50px; width: 55%;">Submit</button>
                                 <?php 
                                  if($id != 15)
                                   {
                                  echo "<input type=\"text\" name=\"email_alpha\" value=\"$email\" style=\"display:none;\">";
                                   }
                                   if($id == 15)
                                   {
                                     $el = $_GET["em"];
                                     echo "<input type=\"text\" name=\"email_alpha\" value=\"$el\" style=\"display:none;\">";
                                   }
                                   
                                }
                            ?>
                        </div>
                    </div>
                                </div>
         </form>
         <div style="width:430px; text-align:center;">
         <?php
              echo " <a class=\"try_again\" href=\"enter_otp.php?id=1&em=$email\" style=\"text-align:center; font-weight:bold; color:white;\">try again</a> ";
         ?>
         </div>

                <!-- FORM ENDED -->
            </div>
        </div>
    </main>
    <!-- MAIN BODY ENDED -->
    <!-- FOOTER START -->

    <footer>
        <!-- WHITE LINE -->
        <div style="width: 100%; background-color: aliceblue; height: 20px; margin-top: 43.5%; border-radius: 50px; ">
        </div>

        <!-- STARTING OF FOOTER CONTENT -->

        <div class="foot_of_web">

            <!-- DIV'S CONTAINING DIFFENRENT SOCIAL MEDIA ACCOUNT LOGOS AND LINKS -->

            <div class="foot_max">
                <div class="div_com one_div">
                    <i class='bx bxl-linkedin-square' style="font-size: 55px; color: rgb(142, 203, 243);"></i>
                    <a href="https://bit.ly/41zQYgY" target="_blank">
                        <p class="text_">
                            https://bit.ly/41zQYgY
                        </p>
                    </a>
                </div>
                <div class="div_com one_div">
                    <i class='bx bxl-twitter' style="font-size: 55px; color: rgb(142, 203, 243);"></i>
                    <p class="text_">
                        @shivpuje_ss
                    </p>
                </div>
                <div class="div_com one_div" style="font-size: 55px; color: rgb(142, 203, 243);">
                    <i class='bx bxl-discord-alt'></i>
                    <p class="text_">
                        Archemedis#2684
                    </p>
                </div>
                <div class="div_com one_div">
                    <i class='bx bxl-github' style="font-size: 55px; color: rgb(142, 203, 243);"></i>
                    <a href="https://github.com/shreeharsh-ms" target="_blank">
                        <p class="text_">
                            https://github.com/shreeharsh-ms</p>
                    </a>
                </div>
            </div>
            <!-- ENDED LOGO AND LINK -->

            <!-- MINI FOOTER START CONTAINING EMAIL AND QUARY TEXT -->

            <div class="foot-min">
                <div class="inner_wave1">
                    <p style="list-style: decimal; color: white; font-family: 'IBM Plex Sans', sans-serif;">Feel free to
                        ask
                        any question or
                        contact me</p>
                    <p style="font-family: 'Poppins', sans-serif; color: rgb(180, 243, 204);">
                        shreeharsh.shivpuje.ss@gmail.com</p>
                </div>
                <div class="inner_wave2">
                    <p style="margin-right: 80px; margin-top: -20px;">MINOR PROJECT 2</p>
                </div>
            </div>
        </div>

        <!-- FOOT OF WEB CLOSED/ENDED -->

        <!-- DIV FOR COPYRIGHT AND CONTRIBUTION STATUS -->
        <div class="_class_footer">
            <p class="footer_c">
                Made by
                Shreeharsh Shivpuje © 2023</p>
        </div>
    </footer>

    <!-- Header compleated -->
</body>

<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';
  require 'vendor/autoload.php';
  if($conn->connect_error){
      die('Connection faild :' .$conn->connect_error);
  }
  else{
    if($cout == 0)
      {
           $smtp = $conn->prepare("insert into email_tried(email,otp1,otp2,otp3,otp4) values(?,?,?,?,?)"); 
           $smtp -> bind_param("siiii", $email, $otp_1, $otp_2, $otp_3, $otp_4);
           $smtp -> execute();
           echo "Ragistration succesfully...";
           $smtp -> Close();
           $conn -> Close(); 
           $mail = new PHPMailer(true);
           try {
               //Server settings
               $mail->SMTPDebug = 1;                      //Enable verbose debug output
               $mail->isSMTP();                                            //Send using SMTP
               $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
               $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
               $mail->Username   = 'tempmail.may2023@gmail.com';                     //SMTP username
               $mail->Password   = 'pclzbxlevdgljdaj';                               //SMTP password
               $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
               $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
               //Recipients
               $mail->setFrom('tempmail.may2023@gmail.com', 'MAJOR PROJECT HEAD');
               $mail->addAddress($email, 'Joe User');     //Add a recipient
               // $mail->addAddress('ellen@example.com');               //Name is optional
               // $mail->addReplyTo('info@example.com', 'Information');
               // $mail->addCC('cc@example.com');
               // $mail->addBCC('bcc@example.com');
               // //Attachments
               // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
               // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
               // Content
               $mail->isHTML(true);                                  //Set email format to HTML
               $mail->Subject = 'Thanks for using our service';
               $mail->Body    = "<div style='border:1px solid black; height:50px; width:200px; margin:auto; background:white; text-align:center;'><h1> $otp_1$otp_2$otp_3$otp_4<h1></div><h3>Use this otp to verify your account<h3>";
               $mail->AltBody = 'Thank you !!!';      
               $mail->send();
               echo 'Message has been sent';
           } catch (Exception $e) {
               echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
           }
        }
        else{
            echo "Alredy tried"; 
         }        
  //Create an instance; passing `true` enables exceptions
  }
?>
</html>
