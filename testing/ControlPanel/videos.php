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
			target:"newsdate",
			dateFormat:"%Y-%m-%d"
			
		});
		new JsDatePick({
			useMode:2,
			target:"newsdate1",
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
			  			  
			 /* Link validation */ 		  
			 if (form.link.value == "") {
				error_link.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter You Tube Link";
				setTimeout(function () {error_link.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_link.innerHTML ="";
				setColor(form.link, bgGood);
			  }
			  	  
			  /* Description  validation */ 		  
			 if (form.description.value == "") {
				error_description.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter Video Description";
				setTimeout(function () {error_description.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_description.innerHTML ="";
				setColor(form.description, bgGood);
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
			 if (form.dateofjoin1.value == "") {
				error_dateofjoining1.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select Date Of Joining";
				setTimeout(function () {error_dateofjoining1.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_dateofjoining1.innerHTML ="";
				setColor(form.dateofjoin1, bgGood);
			  }
			  
			  /* Photo validation  		  
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
	
	
	function save()
		{
		var b=new Boolean();	
		b=checkInput(document.addvideo);
		if (!b) 
			{
			ERROR.innerHTML ="<h4><img src='images/cross.png' border='0'>&nbsp;&nbsp;Error : Please correct the fields and try submitting again</h4>";
			setTimeout(function () {ERROR.innerHTML =""}, 12000);
			}
		else
			{
			document.addvideo.action="videosactions.php?msg=save";
			document.addvideo.submit();			
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
				
			</div>	
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3>All Videos</h3>
							 <div align='right'>
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                              Add Video
							</button>
							</div>
                        </div>
						
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Description</th>
											<th>Video</th>
											<th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
										include('conn.php');
										include('zoom.php');
										$fetch_basic_profile="select * from tbl_videos order by id desc";	
										
										$basic_profile_rs= mysqli_query($con,$fetch_basic_profile);

										while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
											{
											$id=$basic_profile_row[0];
											$date=$basic_profile_row[1];
											$desc=$basic_profile_row[2];
											$link=$basic_profile_row[3];
											echo "<tr>";
											echo "<td>".$date."</td>";
											echo "<td>".$desc."</td>";
											echo "<td><iframe width='300' height='200' src='$link' allowFullScreen='allowFullScreen'></iframe></td>";
											echo "<td><a href='videosactions.php?id=$id&msg=delete'><img src='images/cross.png'></a></td>";
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
            
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
			
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Add Video</h4>
			</div>
			<div class="modal-body">
			<DIV id="ERROR" style="color:red;font-weight:bold;"></DIV>
				<form name="addvideo" method="post">
				 <table border=0 style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0" width="80%" height="100">
					
						<tr>
							<td height="49" width="312"><b>*Description</b></td>
							<td height="49"><b>:</b></td>
							<td height="49" width="755">
							<input name="description" type="text" class="form-control" />
							<br><DIV id="error_description" style="color:red;"></DIV>
							</td>
							<td width="0" valign="top" height="49"></td>		
						</tr>
														
						<tr>
							<td height="49" width="312"><b>*You Tube Link</b></td>
							<td height="49"><b>:</b></td>
							<td height="49" width="755">
							<input name="link" type="text" class="form-control" id="link" /><br><DIV id="error_link" style="color:red;"></DIV>
							</td>
							<td width="0" valign="top" height="41"></td>		
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
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
