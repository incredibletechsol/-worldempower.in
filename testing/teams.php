<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>WorldEmpower</title>



<link href="ControlPanel/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="ControlPanel/assets/js/dataTables/jquery.dataTables.js"></script>
<script src="ControlPanel/assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
	$(document).ready(function () {
		$('#dataTables-example').dataTable( {
        "order": [[ 0, "desc" ]]
		});
	});
</script>

	
<div class="col-md-12">
	<!-- Advanced Tables -->
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>Franchise</th>
							</tr>
						</thead>
						<tbody>
							<?php
							include('conn.php');
							$fetch_basic_profile="select * from tbl_faculty order by id desc";	
							
							$basic_profile_rs= mysqli_query($con,$fetch_basic_profile);
		
							while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
								{
								$id=$basic_profile_row[0];
								$name=$basic_profile_row[1];
								$designation=$basic_profile_row[2];
								$location=$basic_profile_row[3];
								$target_path="Team/";	
								echo "<tr>";
								echo "<td align='center'><img src='$target_path/$basic_profile_row[4]' width='160' height='160'>";
								echo "<h6>$name,$designation</h5>$location</td>";
								echo "</tr>";
								} 
							?>
						</tbody>
					</table>
			</div>
			
		</div>
	</div>
</div>
