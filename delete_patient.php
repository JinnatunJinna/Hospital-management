<?php
 include('top.php');
 include('db.php');
 include('auth.php');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete Patient</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />

 <style>
  .btn-glyphicon {
padding:8px;
background:#ffffff;
margin-right:4px;
}
.icon-btn {
padding: 1px 15px 3px 2px;
border-radius:5px;
}
  </style>

</head>

<body>
<body style="background-color:#AAAbba">
<div class="">
	<!--header start-->
	<div class="row">
    	<div class="col-sm-12">
        	<div class="header bg-white">
            			<h3 style="background:#990000;padding:20px;color:#FFFFFF;margin:0px">


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
        	<div class="left-sidebar bg-#aaabba"></div>

        </div>

            <!--main content-->

            	<div class="col-sm-10">



	<div align="center">
				<h3 align="left" style="color:white;"><b>Patient List</b></h3>
	<hr>
<table class="table table-responsive table-bordered">

                <tr class="danger">
                    <th> S.no</th>
                    <th>Patient Name</th>
                    <th>Patient Address</th>
					<th>Patient Gender</th>
					<th>Modify</th>
					<th>Delete</th>
					</tr>

<?php
extract($_POST);
$del=$_GET['rno'];
mysqli_query($con,"update patient SET patient_available='NOT' where patient_id='$del' ;");
$rs1=mysqli_query($con,"SELECT * from patient where patient_available='YES' order by
patient_name;");
$sno=1;
while( $row=mysqli_fetch_array($rs1)) {
 echo "<tr class='success'>
<td>$sno</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td><a class='btn icon-btn btn-success' href=patient_update.php?rno=".$row[0]."><span class='glyphicon btn-glyphicon glyphicon-edit img-circle text-danger'></span> Edit</a></td><td> <a class='btn icon-btn btn-danger' href=delete_patient.php?rno=".$row[0]."><span class='glyphicon btn-glyphicon glyphicon-trash img-circle text-danger'></span> Delete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td colspan='6' align='center'><font size=4 color=red>Records
Not Found.</font></td></tr>";

?>

        </table>


<hr />

<h3 align="left" style="color:white;"><b>Deleted Records</b></h3>

	<hr>
<table class="table table-responsive table-bordered">




                <tr class="danger">
                      <th> S.no</th>
                    <th>Patient Name</th>
                    <th>Patient Address</th>
					<th>Patient Gender</th>
					<th>Options</th>
					</tr>

					<?php


$que=mysqli_query($con,"SELECT * from patient where patient_available='NOT' order by patient_name;");
$sno=1;
while( $row=mysqli_fetch_array($que)) {
 echo "<tr class='success'><td>$sno</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td><a class='btn icon-btn btn-danger' href=undelete_patient.php?rno=".$row[0]."><span class='glyphicon btn-glyphicon glyphicon-trash img-circle text-danger'></span> Undelete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td colspan='6' align='center'><font size=4 color=red>Records
Not Found.</font></td></tr>";
?>

        </table>
		<hr>

                </div>
           </div>


        <!--right sidebar-->
        <div class="col-sm-1">
        	<div class="main-content bg-#aaabba"></div>


        </div>
  	</div>



    <!--footer start-->
    <div class="row">
    	<div class="col-sm-12">
        	<div class="footer bg-#990000">
            	<div class="copyright">
                	<p align="center" style="padding-top:10px;">Copyright &copy; &nbsp;&nbsp;&nbsp;<span style="color:#CC0033">tanmayhstu103@gmail.com</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>


</html>
