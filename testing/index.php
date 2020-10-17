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
	<section id="banner">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="img/slides/1.jpg"/>
                <div class="flex-caption">
                <!--    <h3>Innovative</h3> 
					<p>original and creative in thinking</p> 
					-->
					 
                </div>
              </li>
              <li>
                <img src="img/slides/2.jpg"/>
                <div class="flex-caption">
                    <!--  <h3>Creative</h3> 
					<p>Success depends on our work</p> 
					 -->
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->
 
	</section> 

	
	<section id="content">
	
	
	<div class="container">
	    	<div class="row">
			<div class="col-md-12">
				<div class="aligncenter"><h2 class="aligncenter">Our Services</h2>
				WORLD EMPOWER, an organisation established way back in 2014, is a training company which is truly strengthening the education system in the country. It is proudly living its motto – <p style="font-family:garamond;color:#002699;font-size:25px">Bringing Transformation Through Empowerment!</font>
				</div>
				<br/>
			</div>
		</div>

	 <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-bell-o"></i>
                <div class="info-blocks-in">
                    <h3>Motivational Seminars and Workshops</h3>
                    <p>We conduct & Teacher Motivational Seminars (2hrs To 5hrs) and Workshops (1 Day To 7 Days) for Students, Parent & teachers, as per requirement.</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-hdd-o"></i>
                <div class="info-blocks-in">
                    <h3>Teachers Training Workshop</h3>
                    <p>We conduct Transformative Training Workshops      (1 Day to 7 Days) exclusively for Teachers.</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-lightbulb-o"></i>
                <div class="info-blocks-in">
                    <h3>Successful Parenting Seminars</h3>
                    <p>We conduct Successful  Parenting Workshops
	  	(2Hrs To 5Hrs) and Personal Parenting Counselling as well.</p>
                </div>
            </div>
        </div>
	<div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-code"></i>
                <div class="info-blocks-in">
                    <h3>Career Guidance Seminars</h3>
                    <p>We conduct Career Guidance Seminars and one to one sessions to choose the best career.</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-compress"></i>
                <div class="info-blocks-in">
                    <h3>Target Merit Course</h3>
                    <p>We conduct Target Merit Course for Students (Std. 8th to Std. 12th and upto UPSC) to ensure their massive success.</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-html5"></i>
                <div class="info-blocks-in">
                    <h3>Dermatoglyphics Multiple Intelligence Test(DMIT)</h3>
                    <p>We help you to unleash your inborn potential and select right path of career.</p>
                </div>
            </div>
        </div>
	</div>
		 <?php include('count.php');  ?>
	<div class="about home-about">
		<div class="container">
			<div class="row">
				<?php include('testimonials.php'); ?>
			</div>
		</div>
	</div>
		<?php include('clientslider.php'); ?>
	</section>
	
	 <?php include('footer.php');  ?>
	
	

					
					

	
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.rcbrand.js"></script>
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
<script>

$('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    
    </script>
    
    
<script type="text/javascript">

$(window).load(function() {
    $("#rcbrand2").rcbrand({
        visibleItems: 4,
        itemsToScroll: 1,
        autoPlay: {
            enable: true,
            interval: 3000,
            pauseOnHover: true
        }
    });

 

});
</script>
</body>
</html>