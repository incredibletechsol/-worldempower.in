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

	<script src="assets/js/jquery-1.10.2.js"></script>
	
	<script type="text/javascript">

	
	function save()
		{
			document.addPhoto.action="customeractions.php?msg=save";
			document.addPhoto.submit();			
	
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
				<div class="col-md-6 col-sm-12 col-xs-12">                     
				    <?php

                        include('conn.php');
                        
                        $fetch_customers="select total from tbl_customers where id=1";	
                        
                        $customer_rs= mysqli_query($con,$fetch_customers);
                        
                        $customer_row = mysqli_fetch_array($customer_rs);
                        
                        $totalCustomers= $customer_row[0];
                        
                        
                        
                        ?>
				               
					<div class="panel panel-default">
						<div class="panel-heading">
							<b>Update Customers</b>
						</div>
						<div class="panel-body">
						<form name="addPhoto" enctype="multipart/form-data" method="post">
							<table>
								<tr>
									<td height="43" width="188" align="center"><FONT face=Verdana color=#e30102 size=-2>
									*</FONT><FONT face="Verdana, Arial, Helvetica" color=#000000 size=2>
									 Total Customers</font>
									</td>
									<td height="43" width="234"><DIV id="error_title" style="color:red;"></DIV><br><input type="text" name="title" class="form-control" value="<?php echo $totalCustomers; ?>"/>
									
									</td>
								</tr>
								
								<tr>
									<td align='center'><a href="#" class="btn btn-primary"  onClick="save();">Update</a></td>
								</tr>
							<table>
						</form>	
						</div>
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
 
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
