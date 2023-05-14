<html lang="en">

<!-- THIS CODE IS WRITTERN BY SHREEHARSH SHIVPUJE AS MINIOR PROECT FOR MAJORE PROJECT
THIS IS NOT COMPLEATLY ACCURATE WEBSITE (NOT RESPONSIVE)
ITS JUST SAMPLE VERSION FOR MAJORE PROJECT -->

<head>

    <!-- LINKS -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <script>
        function validateEmail(emailField) {
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

            if (reg.test(emailField.value) == false) {
                alert('Invalid Email Address');
                return false;
            }

            return true;
        }
    </script>
</head>

<body>


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

                <form action="enter_otp.php" method="POST" class="otp send">
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

                    <div id="id1">
                        <div class="request_for_otp">
                            <div class="hiden1">
                                <i class='bx bxs-envelope'
                                    style="color: rgb(0, 123, 231); font-size: 40px; margin-right: 20px;"></i>
                                <input type="email" placeholder="Enter your email address" style="color: rgb(0, 0, 0);"
                                    name="EMAIL" onblur="validateEmail(this);">
                            </div>
                            <div class="hiden1 one_of">
                            </div>
                            <button class="button_sub" onclick="fun()">Submit</button>
                        </div>
                    </div>
                </form>

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

<!-- SENDING OTP -->

</html>
