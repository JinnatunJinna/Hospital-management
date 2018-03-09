<?php
include('top.php');
include("auth.php");
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

    <!--sidebar and content-->
  	<div class="row">
    	<!--left sidebar-->
		<div class="col-sm-1">
        	<div class="left-sidebar bg-#28d4c3"></div>

        </div>

            <!--main content-->

            	<div class="col-sm-10">
<!--
					<table class="table table-bordered"  border="1" width ="850px" height="30px" align ="center">




					</td>
					<td  width="90%" align="center" valign="center">

					<?php //require('header.php'); ?>

					</td>
				</tr>


			</table> -->
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


        <!--right sidebar-->
        <div class="col-sm-1">
        	<div class="main-content bg-#28D4C3"></div>


        </div>
  	</div>



    <!--footer start-->
    <div class="row">
    	<div class="col-sm-12">
        	<div class="footer bg-#990000">
            	<div class="copyright">
                	<p align="center" style="padding-top:10px;color:white;">Copyright &copy;  &nbsp;&nbsp;&nbsp;<span style="color:white">jinnatun</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
