# Email-authentication_SECURITY-system

<p style="font-size:21px; color:green;">it is am Email authentication system designed to validate user</p>

<hr><hr><br>

<p style="font-size:18px; color:white;">#It is designed with</p> <br>
1.PHP   &emsp;  //FOR accessing Database and sending OTP on mail <br>
2.SQL   &emsp; //DATABASE  <br>
3.JS &emsp; &emsp;    //Some usefull functionlities like button and input should not take unwanted value <br>
4.HTML  &emsp;  //basic structure <br>
5.CSS   &emsp;   //Designing/styling <br>
<br>

<hr><hr><br>

WE are basically sending mail using php mailer liarary which is very convainint at basic level<br>
or to understand how THNNGS WORKS<br>
<br>
whats the beauty of this project<br>
==> IT CAN HANDLE MULTIPLE USERS AT SAME TIME <br>


<p style="font-size:21px; color:blue;">STEPS TO USE IT</p> <br>
 
<div style="width:150px; height:45px; background-color:blue; border-radius:20px; font-size:20px; color:white;">REQUIREDS</div>

[FRIST CREATE NEW GMAIL (if you are using gmail smtp and on 2 factor auth and create app pass word and put it in ENTER_OTP.php file)]  
1] CONNECT WITH XAMPP SERVER <br><br>
2} CREATE A DATABASE WITH SQL <br><br>
&emsp; &emsp;create table emai_tried{ <br>
&emsp;&emsp;&emsp;ID int not null primary key auto_increment, <br>
&emsp;&emsp;&emsp;email varchar(40) not null, <br>
&emsp;&emsp;&emsp;otp1 int not null, <br>
&emsp;&emsp;&emsp;otp2 int not null, <br>
&emsp;&emsp;&emsp;otp3 int not null, <br>
&emsp;&emsp;&emsp;otp4 int not null, <br>
&emsp;&emsp;&emsp;curdate default now() <br>
}<br><br>
3} ANOTHER DATABASE
&emsp; &emsp;create table emai_tried{ <br>
&emsp;&emsp;&emsp;ID int not null primary key auto_increment, <br>
&emsp;&emsp;&emsp;email varchar(40) not null, <br>
&emsp;&emsp;&emsp;curdate default now() <br>  
  

  
  


