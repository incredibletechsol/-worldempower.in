<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include('head.php');  ?>
      <style>
      #snackbar {
      visibility: hidden;
      min-width: 250px;
      margin-left: -125px;
      background-color: #333;
      color: #fff;
      text-align: center;
      border-radius: 2px;
      padding: 16px;
      position: fixed;
      z-index: 1;
      left: 50%;
      bottom: 30px;
      font-size: 17px;
    }

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
   </head>
   <body onLoad="myFunction()">
       <div id="snackbar">Thank You for Contacting Us ! We will get back to you.</div>
      <div id="wrapper" class="home-page">
         <?php include('topbar.php');  ?>
         <!-- start header -->
         <?php include('nav.php');  ?>
         <!-- end header -->
         <section id="inner-headline">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <h2 class="pageTitle">Contact Us</h2>
                  </div>
               </div>
            </div>
         </section>
         <section id="content">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <!-- Form itself -->
                     <form name="sentMessage" id="contactForm" action="contact1.php" method="post">
                        <h3>Contact Us</h3>
                        <div class="control-group">
                           <div class="controls">
                              <input type="text" class="form-control" 
                                 placeholder="Full Name" id="name" required
                                 data-validation-required-message="Please enter your name" name="name"/>
                              <p class="help-block"></p>
                           </div>
                        </div>
                        <div class="control-group">
                           <div class="controls">
                              <input type="email" class="form-control" placeholder="Email" 
                                 id="email" required
                                 data-validation-required-message="Please enter your email" name="email"/>
                              <p class="help-block"></p>
                           </div>
                        </div>
                        <div class="control-group">
                           <div class="controls">
                              <input type="text" name="mobileno" class="form-control" placeholder="Mobile No" 
                                 id="mobileno" required
                                 data-validation-required-message="Please enter your Mobile No" />
                              <p class="help-block"></p>
                           </div>
                        </div>
                        <div class="control-group">
                           <div class="controls">
                              <textarea rows="10" cols="100" class="form-control" 
                                 placeholder="Message" id="message" required
                                 data-validation-required-message="Please enter your message" minlength="5" 
                                 data-validation-minlength-message="Min 5 characters" 
                                 maxlength="999" style="resize:none" name="message"></textarea>
                           </div>
                        </div>
                        <div id="success"> </div>
                        <!-- For success/fail messages -->
                        <input type="submit" class="btn btn-primary pull-right" value="Send" name="submit"/>
                     </form>
                  </div>
                  <div class="col-md-6">
                     <br>
                     <h5 class="widgetheading">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Address</h5>
                     <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hubio Impex Pvt. Ltd</strong><br>
                     <span class="contact-icon"><i class="fa fa-map-marker" style="font-size:24px;color:red"></i></span>&nbsp;&nbsp;   Registered Office :- Sr.No. 1/7/ 1/17,<br>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bldg Aditya, Wing A & B,<br>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Shop No.05,Haveli,Shivne (Part)<br>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (N.V.),Pune,MH - 411023<br><br>
                     <span class="contact-icon"><i class="fa fa-phone" style="font-size:24px;color:red"></i></span>&nbsp; (+91) 020 21055600<br><br>
                     <span class="contact-icon"><i class="fa fa-envelope" style="font-size:24px;color:red"></i></span>&nbsp; hubioimpex@gmail.com
                     </address>
                  </div>
               </div>
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
      <script>
function myFunction() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 7000);
}
</script>
   </body>
</html>