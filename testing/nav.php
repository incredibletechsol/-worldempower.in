<header>
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo" style="margin-top:0px;"/></a>
			</div>
			<div class="navbar-collapse collapse ">
				<ul class="nav navbar-nav">
					<?php
					  $pageName = basename($_SERVER['PHP_SELF']);
					  if($pageName == "index.php")
							{
							echo "<li class='active'><a href='index.php'>Home</a></li>"; 
							echo "<li><a href='aboutus.php'>About Us</a></li>";
							echo "<li><a href='services.php'>Services</a></li>";
							echo "<li><a href='team.php'>Franchise</a></li>";
							echo "<li><a href='videos.php'>Videos</a></li>";
							echo "<li><a href='gallery.php'>Gallery</a></li>";
							echo "<li><a href='http://www.worldempower.in/blog/'>Blogs</a></li>";
							echo "<li><a href='contactus.php'>Contact</a></li>";
							}
					if($pageName == "aboutus.php")
							{
							echo "<li><a href='index.php'>Home</a></li>"; 
							echo "<li class='active'><a href='aboutus.php'>About Us</a></li>";
							echo "<li><a href='services.php'>Services</a></li>";
							echo "<li><a href='team.php'>Franchise</a></li>";
							echo "<li><a href='videos.php'>Videos</a></li>";
							echo "<li><a href='gallery.php'>Gallery</a></li>";
							echo "<li><a href='http://www.worldempower.in/blog/'>Blogs</a></li>";
							echo "<li><a href='contactus.php'>Contact</a></li>";
							}
					if($pageName == "services.php")
							{
							echo "<li><a href='index.php'>Home</a></li>"; 
							echo "<li><a href='aboutus.php'>About Us</a></li>";
							echo "<li class='active'><a href='services.php'>Services</a></li>";
							echo "<li><a href='team.php'>Franchise</a></li>";
							echo "<li><a href='videos.php'>Videos</a></li>";
							echo "<li><a href='gallery.php'>Gallery</a></li>";
							echo "<li><a href='http://www.worldempower.in/blog/'>Blogs</a></li>";
							echo "<li><a href='contactus.php'>Contact</a></li>";
							}	
					if($pageName == "team.php")
							{
							echo "<li><a href='index.php'>Home</a></li>"; 
							echo "<li><a href='aboutus.php'>About Us</a></li>";
							echo "<li><a href='services.php'>Services</a></li>";
							echo "<li class='active'><a href='team.php'>Franchise</a></li>";
							echo "<li><a href='videos.php'>Videos</a></li>";
							echo "<li><a href='gallery.php'>Gallery</a></li>";
							echo "<li><a href='http://www.worldempower.in/blog/'>Blogs</a></li>";
							echo "<li><a href='contactus.php'>Contact</a></li>";
							}	
					if($pageName == "videos.php")
							{
							echo "<li><a href='index.php'>Home</a></li>"; 
							echo "<li><a href='aboutus.php'>About Us</a></li>";
							echo "<li><a href='services.php'>Services</a></li>";
							echo "<li><a href='team.php'>Franchise</a></li>";
							echo "<li class='active'><a href='videos.php'>Videos</a></li>";
							echo "<li><a href='gallery.php'>Gallery</a></li>";
							echo "<li><a href='http://www.worldempower.in/blog/'>Blogs</a></li>";
							echo "<li><a href='contactus.php'>Contact</a></li>";
							}	
					if($pageName == "gallery.php")
							{
							echo "<li><a href='index.php'>Home</a></li>"; 
							echo "<li><a href='aboutus.php'>About Us</a></li>";
							echo "<li><a href='services.php'>Services</a></li>";
							echo "<li><a href='team.php'>Franchise</a></li>";
							echo "<li><a href='videos.php'>Videos</a></li>";
							echo "<li class='active'><a href='gallery.php'>Gallery</a></li>";
							echo "<li><a href='http://www.worldempower.in/blog/'>Blogs</a></li>";
							echo "<li><a href='contactus.php'>Contact</a></li>";
							}	
					if($pageName == "contactus.php" || $pageName == "contact2.php")
							{
							echo "<li><a href='index.php'>Home</a></li>"; 
							echo "<li><a href='aboutus.php'>About Us</a></li>";
							echo "<li><a href='services.php'>Services</a></li>";
							echo "<li><a href='team.php'>Franchise</a></li>";
							echo "<li><a href='videos.php'>Videos</a></li>";
							echo "<li><a href='gallery.php'>Gallery</a></li>";
							echo "<li><a href='http://www.worldempower.in/blog/'>Blogs</a></li>";
							echo "<li class='active'><a href='contactus.php'>Contact</a></li>";
							}				
					?>
				</ul>
			</div>
		</div>
	</div>
</header>
<br><br>
