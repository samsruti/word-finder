<?php 

    // First we execute our common code to connection to the database and start the session 
    require("common.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    
     
    // Everything below this point in the file is secured by the login system 
     
    // We can display the user's username to them by reading it from the session array.  Remember that because 
    // a username is user submitted content we must use htmlentities on it before displaying it to the user. 
?> 

<?php
  include_once('header.php');
?>

  <div class="uou-block-3a">
    <div class="container">
      <ul class="breadcrumbs">
        <li><a href="index.html">Home</a></li>
        <li><span>Contact Us</span></li>
      </ul>
    </div>
  </div>

  <div class="subheader subheader-v2 has-bg-image" data-bg-image="img/contact-header.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="block-title">Contact Us</h1>
          <p class="block-secondary-title invert">Reach us out, we're willing to help  </p>
        </div>
      </div>
    </div>
  </div>

  <div>
    <img src="img/campus15.png"/ style="height: 500px;">
  </div>

  <div class="contact has-bg-image" data-bg-color="f5f5f5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="contact-form">
            <form action="#">
              <input type="text" placeholder="Name & Surname">
              <input type="text" placeholder="E-mail Address">
              <input type="text" placeholder="Phone Number">
              <textarea name="message" placeholder="Your message"></textarea>
              <div class="text-center">
                <button class="btn btn-primary" onclick="sendMessage()">Send message</button>
              </div>
            </form>
          </div>  
        </div>
      </div>
    </div>
  </div>


  <div class="uou-block-4a secondary">
    <div class="container">
      <ul class="social-icons">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
      </ul>

      <p>Copyright © 2015 Quck Finder. All Rights reserved.</p>
    </div>
  </div>
</div>

<div class="uou-block-11a">
  <h5 class="title">Menu</h5>
  <a href="#" class="mobile-sidebar-close">&times;</a>
  <nav class="main-nav">
      <ul>
        <li class="active"><a href="#">Home</a></li>

          <li class="pl10"><a href="index.html">Home 1</a></li>
          <li class="pl10"><a href="index2.html">Home 2</a></li>

        <li class="active"><a href="#">Jobs</a></li>
          <li class="pl10"><a href="index_jobs.html">Jobs Index(Default)</a></li>
          <li class="pl10"><a href="single_job.html">Job Single</a></li>
          <li class="pl10"><a href="profile_company.html">Company Profile</a></li>
          <li class="pl10"><a href="profile_company2.html">Company Profile (2)</a></li>

        <li class="active"><a href="#">Businesses</a></li>
          <li class="pl10"><a href="index_business1.html">Business Index(Default)</a></li>
          <li class="pl10"><a href="index_business2.html">Business Index(2)</a></li>
          <li class="pl10"><a href="index_business3.html">Business Index(3)</a></li>
          <li class="pl10"><a href="index_business4.html">Business Index(4)</a></li>
          <li class="pl10"><a href="index_business5.html">Business Index(5)</a></li>
          <li class="pl10"><a href="single_business.html">Business Single</a></li>

        <li class="active"><a href="#">Restaurants</a></li>
          <li class="p10"><a href="index_restaurant.html">Restaurant Index</a></li>
          <li class="p10"><a href="single_restaurant.html">Restaurant Single</a></li>
        
        <li class="active"><a href="#">Features</a></li>
          <li class="p10"><a href="box-variation1.html">Box Variation 1</a></li>
          <li class="p10"><a href="box-variation2.html">Box Variation 2</a></li>
          <li class="p10"><a href="box-variation3.html">Box Variation 1</a></li> 
          <li class="p10"><a href="gui-kit.html">GUI kit</a></li>
        
        <li class="active"><a href="about.html"></a></li>
        <li class="active"><a href="blog.html"></a></li>
        <li class="active"><a href="contact.html">Contact</a></li>


      </ul>
  </nav>

  <hr>

</div>

<!-- Scripts -->
<script>
  function sendMessage() {
    
    alert("Message has been sent");

  }

</script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/plugins/superfish.min.js"></script>
<script src="js/jquery.ui.min.js"></script>
<script src="js/plugins/rangeslider.min.js"></script>

<script src="js/plugins/jquery.flexslider-min.js"></script>

<script src="js/uou-accordions.js"></script>

<script src="js/uou-tabs.js"></script>
<script src="js/plugins/select2.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/gmap3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>