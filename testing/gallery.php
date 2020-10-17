<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php');  ?>
</head>
<body>
<div id="wrapper" class="home-page">
<?php include('topbar.php');  ?>
	<!-- start header -->
<?php include('nav.php');  ?>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Gallery</h2>
			</div>
		</div>
	</div>
	</section>
	  <section id="gallery-1" class="content-block section-wrapper gallery-1">
    	 	<div class="container">

			<br><br>
            
            
            <div class="row">
                <div id="isotope-gallery-container">
                   
                       
						<?php
						include('conn.php');
						$result = mysqli_query($con,"SELECT * FROM tbl_gallery order by photoid desc") or die('Query Not Executed');
						while($row = mysqli_fetch_array($result))
						{
						$name=$row[1];
						$title=$row[2];
						echo "<div class='col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper'>";
							echo "<div class='gallery-item'>";
								echo "<div class='gallery-thumb'>";
									echo "<img src='gallery/$name' class='img-responsive' alt='$title'>";
									echo "<div class='image-overlay''''></div>";
									echo "<a href='gallery/$name' class='gallery-zoom'><i class='fa fa-eye'></i></a>";
								echo "</div>";	
								echo "<div class='gallery-details'>";
									echo "<div class='editContent'>";
										echo "<h5>$title</h5>";
									echo "</div>";
								echo "</div>";
							echo "</div>";
						echo "</div>";	
						}
						?>
								
                    </div>
                  
                    
                </div>
                <!-- /.isotope-gallery-container -->
            </div>
            <!-- /.row --> 
        <!-- /.container -->
		</div>
    </section>
	 <?php include('footer.php');  ?>
	
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>  
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script> 
</body>
</html>