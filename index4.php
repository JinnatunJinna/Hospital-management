<?php
include("auth.php");
include("top.php");
require 'db.php';
$email=$_SESSION["email"];
$sql=mysqli_query($con,"select *from users where email='$email'");

$s=mysqli_fetch_array($sql);

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hospital Management System</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />


</head>

<body>
  <body style="background-color:#0013A8">
<div class="">
	<!--header start-->
	<div class="row">
    	<div class="col-sm-12">
        	<div class="header bg-white">
            			<h3 style="background:#0083FF;padding:20px;color:#FFFFFF;margin:0px">

							<span id="blinker"><span style="font-size:15px; color:white";><?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new;
							?></span></span>
							<span style="margin-left:350px; font-size:30px;">** Hospital Management **</span>
</h3>

            </div>
        </div>
    </div>



            	<div class="col-sm-12">


<div class="col-sm-6" style="margin-left:20px">
    <h1>
    <span ><p align="left" style="padding-top:40px;font-size:33px;color:white;"> Jinnatun Jinna </p></span>
    </h1>
    <h2>
    <span ><p align="left" style="padding-top:5px;font-size:27px;color:white;"> Electronics & Communication Engineering </p></span>
    </h2>
    <h3>
    <span ><p align="left" style="padding-top:5px;font-size:27px;color:white;"> HSTU </p></span>
    </h3>
    <h1>
    <span ><p align="left" style="font-size:25px;color:white;">Phone:01738-000000</p></span>
    </h1>

    <h1>
    <span ><p align="left" style=" font-size:25px;color:white;">Dinajpur,5200 . </p></span>

    </h1>
</div>

<div class="col-sm-5">
  <img src="image/jinna.jpg"  alt="my-image"align="right" style="margin-top:50px;height:300px;width:250px;">

</div>


				<div align="center">
					<?php
		 @$page= $_GET['page'];
		 if($page!="")
		 {
			 switch($page)
			 {
			 case 'add-doctor':
			 include('add-new-doctor.php');
			 break;

			 case 'doctor-list':
			 include('doctor_details.php');
			 break;

			case 'add-patient':
			 include('add-new-patient.php');
			 break;

			 case 'patient-list':
			 include('patient_details.php');
			 break;

			 case 'add-appointment':
			 include('add-new-appointment.php');
			 break;

			 case 'appointment-list':
			 include('appointment_details.php');
			 break;

			 }
		 }
		 else
		 {
		 ?>

		 <?php
		 }
		  ?>

                </div>
           </div>






    <!--footer start-->
    <div class="row">
    	<div class="col-sm-12">
        	<div class="footer bg-#990000">
            	<div class="copyright">
                	<p align="center"style="color:white; padding-top:100px;" >Copyright &copy;&nbsp;&nbsp;<span>jinnatun</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
