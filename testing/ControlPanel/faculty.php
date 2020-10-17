<?php include('logincommon.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> <?php include('title.php'); ?></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />
	<script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>
	<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"dateofjoin",
			dateFormat:"%Y-%m-%d"
			
		});
		new JsDatePick({
			useMode:2,
			target:"dateofjoin1",
			dateFormat:"%Y-%m-%d"
			
		});
	};
	</script>
	<script src="assets/js/jquery-1.10.2.js"></script>
	
	<script type="text/javascript">

	function setColor(el, bg) 
		{
		  if (el.style) el.style.backgroundColor = bg;
		}
		
	function checkInput(form) 
		{
	
			  var bgBad = "#FF9999";
			  var bgGood = "#66FFCC";
			  var valid = true;
			  var errmsg="";
			  
			 /* Name  validation */ 		  
			 if (form.name.value == "") {
				error_name.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter Faculty Name";
				setTimeout(function () {error_name.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_name.innerHTML ="";
				setColor(form.name, bgGood);
			  }
			  	  
			  /* Designation  validation */ 		  
			 if (form.designation.value == "") {
				error_designation.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter Designation";
				setTimeout(function () {error_designation.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_designation.innerHTML ="";
				setColor(form.designation, bgGood);
			  }
                         
			  /* Date Of Joining  validation */ 		  
			 if (form.location.value == "") {
				error_location.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter Location";
				setTimeout(function () {error_location.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_location.innerHTML ="";
				setColor(form.location, bgGood);
			  }
			  
			  /* Photo validation */ 		  
			 if (form.photo.value.length < 10 ) {
				error_photo.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select a Photo to upload";
				setTimeout(function () {error_photo.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_photo.innerHTML ="";
				setColor(form.photo, bgGood);
			  }
			  		  
			return valid;
		}
	
	function checkInput1(form) 
		{
	
			  var bgBad = "#FF9999";
			  var bgGood = "#66FFCC";
			  var valid = true;
			  var errmsg="";
			  
			 /* Name  validation */ 		  
			 if (form.name1.value == "") {
				error_name1.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter Faculty Name";
				setTimeout(function () {error_name1.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_name1.innerHTML ="";
				setColor(form.name1, bgGood);
			  }
			  	  
			  /* Designation  validation */ 		  
			 if (form.designation1.value == "") {
				error_designation1.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please ente Designation";
				setTimeout(function () {error_designation1.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_designation1.innerHTML ="";
				setColor(form.designation1, bgGood);
			  }
                         
			  /* Date Of Joining  validation */ 		  
			 if (form.location1.value == "") {
				error_location1.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter Qulification";
				setTimeout(function () {error_location1.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_location1.innerHTML ="";
				setColor(form.location1, bgGood);
			  }
			  
			/*   Photo validation  		 
			 if (form.photo1.value.length < 10 ) {
				error_photo1.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select a Photo to upload";
				setTimeout(function () {error_photo1.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_photo1.innerHTML ="";
				setColor(form.photo1, bgGood);
			  }
			  		   */
			return valid;
		}	
		
	function isNumberKey(evt)
       {
		  var chCode = (evt.which) ? evt.which : event.keyCode
		  if (chCode != 46 && chCode > 31 
			&& (chCode < 48 || chCode > 57))
			 return false;
		  else
		  return true;
       }
		       
    function isAlpha(keyCode)
       {
         return ((keyCode >= 65 && keyCode <= 90) || keyCode == 8 || keyCode == 32 || keyCode == 9 || keyCode == 46)
       }
	   
	function CheckPhotoExt()
	{
		var fup = document.getElementById('photo');
     	var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "jpg" || ext == "png" || ext == "gif" || ext == "bmp" || ext == "JPG" || ext == "PNG" || ext == "GIF" || ext == "BMP")
			{
			return true;
			} 
		else
		{
			fileName="";
			error_photo.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Upload .jpg,.png,.gif,.bmp files only.";
			document.getElementById('photo').value="";
			fup.focus();
			return false;
		}
	}
	
	function save()
		{
		var b=new Boolean();	
		b=checkInput(document.addfaculty);
		if (!b) 
			{
			ERROR.innerHTML ="<h4><img src='images/cross.png' border='0'>&nbsp;&nbsp;Error : Please correct the fields and try submitting again</h4>";
			setTimeout(function () {ERROR.innerHTML =""}, 12000);
			}
		else
			{
			document.addfaculty.action="facultyactions.php?msg=save";
			document.addfaculty.submit();			
			}
		}
		
		function update()
		{
	
		var b=new Boolean();	
		b=checkInput1(document.editfaculty);
		if (!b) 
			{
			ERROR1.innerHTML ="<h4><img src='images/cross.png' border='0'>&nbsp;&nbsp;Error : Please correct the fields and try submitting again</h4>";
			setTimeout(function () {ERROR1.innerHTML =""}, 12000);
			}
		else
			{
			document.editfaculty.action="facultyactions.php?msg=update";
			document.editfaculty.submit();			
			}
		}

        function nospaces()
           {
           var name=document.addfaculty.name.value;
           var dateofjoin=document.addfaculty.dateofjoin.value;
           var designation=document.addfaculty.designation.value;

           if(name.match(/\s/g))
              {
               name=name.replace(/\s/g,'');
               document.addfaculty.name.value="";
              }

           if(dateofjoin.match(/\s/g))
              {
               dateofjoin=dateofjoin.replace(/\s/g,'');
               document.addfaculty.dateofjoin.value="";
              }
        
           if(designation.match(/\s/g))
              {
               designation=designation.replace(/\s/g,'');
               document.addfaculty.designation.value="";
              }
         }
		
	</script>
</head>
<body>
    <div id="wrapper">
        <?php include('nav.php'); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                              
            <div class="row">
				<?php
	if(isset($_GET['msg']))
		{
			$param=$_GET['msg'];
			if($param == "edit")
				{
				include("conn.php");
				$id = $_GET['id'];
				$fetch_existing_details_query="SELECT * FROM tbl_faculty where id='$id'";
				$existing_details_rs= mysqli_query($con,$fetch_existing_details_query);
				
				while($exiting_details_row = mysqli_fetch_array($existing_details_rs)) 
					{
					$id=$exiting_details_row[0];
			
					$target_path="../Team/";	
			        $name=$exiting_details_row[1];
					$designation=$exiting_details_row[2];
					$location=$exiting_details_row[3];
					$photo=$exiting_details_row[4];
					}
				?>
				<DIV id="ERROR1" style="color:red;font-weight:bold;"></DIV>
					<form name="editfaculty" enctype="multipart/form-data" method="post">
					<center><h3> * Update Franchise Details *  </h3></center>
						<table border=0 style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0" width="80%" height="210">
						<input type="hidden"  name="id" value="<?php echo $id; ?>">
						 
							<tr>
								<td height="49" width="312" align='center'><b>*Name</b></td>
								<td height="49"><b>:</b></td>
								<td height="49" width="755"><input name="name1" type="text" class="form-control" id="name1"   value="<?php echo $name; ?>"/><br><DIV id="error_name1" style="color:red;"></DIV></td>
								<td width="0" valign="top" height="49"></td>		
							</tr>
															
							<tr>
								<td height="41" width="312" align='center'><b>*Designation</b></td>
								<td height="41"><b>:</b></td>
								<td height="41" width="755"><input name="designation1" type="text"  class="form-control" id="designation1"   value="<?php echo $designation; ?>"/><br><DIV id="error_designation1" style="color:red;"></DIV></td>
								<td width="0" valign="top" height="41"></td>		
							</tr>
							
							<tr>
								<td height="41" width="312" align='center'><b>*Location</b></td>
								<td height="41"><b>:</b></td>
								<td height="41" width="755"><input name="location1" type="text"  class="form-control" id="location1"   value="<?php echo $location; ?>"/><br><DIV id="error_location1" style="color:red;"></DIV></td>
								<td width="0" valign="top" height="41"></td>		
							</tr>
							
																														
							<tr>
								<td width="312" align='center'><b>*Photo</b></td>
								<td><b>:</b></td>
								<td width="755"><input name="photo1" type="file" id="photo1" onchange="return CheckPhotoExt();" value="<?php echo $photo; ?>"/><br><DIV id="error_photo1" style="color:red;"></DIV></td>
								<td width="0" valign="top">
									<?php
									echo "<img src='$target_path/$photo' width='160' height='160'>";
									?>
								</td>		
							</tr>	
						</table>
						<div class="modal-footer">
						
							<a href="#" class="btn btn-primary"  onClick="update();">Update</a>
						</div>
					</form>	
				<?php
					
				}
		}
?>	
			
				
			</div>	
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3>All Team Members</h3>
							 <div align='right'>
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                              Add Team Member
							</button>		<a href="xlsexport/faculties.xls" class="btn btn-primary btn-lg"  onClick="save();">Export To XLS</a>
									<?php include("excel.php"); listOfFaculties(); ?>
								
							</div>
                        </div>
						
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>Sr No</th>	
                                            <th>Name</th>
										    <th>Designation</th>
                                            <th>Location</th>
											<th>Photo</th>
											<th>Edit</th>
											<th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
										include('conn.php');
										$fetch_basic_profile="select * from tbl_faculty order by id desc";	
										
										$basic_profile_rs= mysqli_query($con,$fetch_basic_profile);
                                                                                $i=0;
										while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
											{
											$id=$basic_profile_row[0];
											$type=$basic_profile_row[1];
											$target_path="../Team/";	
                                            ++$i;		
											echo "<tr>";
                                            echo "<td><input type='hidden' name='id' value='$basic_profile_row[0]'>$i</td>";
											echo "<td>".$basic_profile_row[1]."</td>";
											echo "<td>".$basic_profile_row[2]."</td>";
											echo "<td>".$basic_profile_row[3]."</td>";
											echo "<td align='center'><img src='$target_path/$basic_profile_row[4]' width='160' height='160'></td>";
											echo "<td><a href='faculty.php?id=$id&msg=edit'><img src='images/edit.png'></a></td>";
											echo "<td><a href='facultyactions.php?id=$id&msg=delete'><img src='images/cross.png'></a></td>";
											echo "</tr>";
											} 
										?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
               <br><br><br><br><br><br>  <br><br><br><br><br><br>    
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
			
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Add Team Member</h4>
			</div>
			<div class="modal-body">
			<DIV id="ERROR" style="color:red;font-weight:bold;"></DIV>
				<form name="addfaculty" enctype="multipart/form-data" method="post">
				<table border=0 style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0" width="80%" height="210">
					 
						<tr>
							<td height="49" width="312"><b>*Name</b></td>
							<td height="49"><b>:</b></td>
							<td height="49" width="755"><input name="name" type="text" class="form-control" id="txtName"   /><br><DIV id="error_name" style="color:red;"></DIV></td>
							<td width="0" valign="top" height="49"></td>		
						</tr>
														
						<tr>
							<td height="41" width="312"><b>*Designation</b></td>
							<td height="41"><b>:</b></td>
							<td height="41" width="755"><input name="designation" type="text"  class="form-control" id="txtDesignation" /><br><DIV id="error_designation" style="color:red;"></DIV></td>
							<td width="0" valign="top" height="41"></td>		
						</tr>
						
						<tr>
							<td height="41" width="312"><b>*Location/Area</b></td>
							<td height="41"><b>:</b></td>
							<td height="41" width="755"><input type="text" size="12" id="location" class="form-control" style="width:150px;" name="location"/><br><DIV id="error_location" style="color:red;" onkeyup="nospaces()"></DIV></td>
							<td width="0" valign="top" height="41"></td>		
						</tr>
						
										
						<tr>
							<td width="312"><b>*Photo</b></td>
							<td><b>:</b></td>
							<td width="755"><input name="photo" type="file" id="photo" onchange="return CheckPhotoExt();" /><br><DIV id="error_photo" style="color:red;"></DIV></td>
							<td width="0" valign="top"></td>		
						</tr>	
					</table>
					
				</form>	
			</div>
			<div class="modal-footer">
				<a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary"  onClick="save();">Save</a>
			</div>
		</div>
	</div>
</div>

	
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
     <script>
$(document).ready(function () {
$('#dataTables-example').dataTable({
"order": [[ 0, "asc" ]]
});
});
</script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
