<?php 

    // First we execute our common code to connection to the database and start the session 
    require("common.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    
     
    // Everything below this point in the file is secured by the login system 
     
    // We can display the user's username to them by reading it from the session array.  Remember that because 
    // a username is user submitted content we must use htmlentities on it before displaying it to the user. 
?> 

<?php
  $page = 'qpapers';
  include_once('header.php');
?>

  <div class="uou-block-3a">
    <div class="container">
      <ul class="breadcrumbs">
        <li><a href="index.html">Home</a></li>
        <li><span>Question Papers</span></li>
      </ul>
    </div>
  </div>

  <div class="subheader subheader-v2 has-bg-image" data-bg-image="img/about-header.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="block-title">Question Papers</h1>
          <p class="block-secondary-title invert">Find previous year CAT Question Papers  </p>
        </div>
      </div>
    </div>
  </div>

  <div class="about has-bg-image" data-bg-color="f5f5f5">

    
    
    <div class="team">
      <div class="container pb30">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title-section">
              Question Papers Lists
            </h3>
          </div>
          <div class="col-sm-12">
          <h3 style="text-align: justify;">CAT Previous Year Question Papers –&nbsp;Downloading links&nbsp;</h3>
          <table border="1" width="100%" cellspacing="0">
            <tbody>
            <tr>
            <td style="text-align: center;" width="259"><strong>Year</strong></td>
            <td style="text-align: center;" width="210"><strong>Question Paper</strong></td>
            <td style="text-align: center;" width="192"><strong>Solution</strong></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 2010 With Solution</td>
            <td style="text-align: center;" colspan="2" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfcTdrUVRUZjZPZk0/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 2009 With Solution</td>
            <td style="text-align: center;" colspan="2" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfZGF1d3BPblJqOFU/preview" target="_blank"> Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 2008</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfa19KZWRWUDJxRW8/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfbGpILVZWWk1iS2M/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 2007</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfaU9HQUN0TVgzUjg/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfTGVJVF85aC1WelE/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 2006</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfSS00R2IxRnhRZDQ/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfMHBXUEFIc0dMVkE/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 2005</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfYi00b05SS3JzV2M/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfRzdLSmowelY2OTA/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 2004</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfbVFZbW11UFZ3WTA/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfaFczekRMb0VaM28/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 2003</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfdldPOUpFdlVVaFk/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfOC1vZEI2MXNiZFE/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 2003 Re- Test</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfLW5Jb1RudXJHWUE/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfeTlBaTZENkN6R00/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 2002</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfQTA3RWFfNDF1eXc/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfWVhDTzZIc0pfaTg/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 2001</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfZDA5UDhCd084ZUk/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfbXRoUDJPMEd3dDA/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 2000</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfSm5TYmdEMDFYc1k/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfMkhwemxCcTkyVmc/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 1999</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfY1RvWjZ3Mm4wOGs/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfMkxoUGg0a2hsd0U/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 1998</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfOUpnUHdFNkxtNFU/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfUVFwNHBjQ20yaDg/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 1997</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfeDVLUlhrRkZuT3M/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfODNRSTFCX3pOZUU/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 1996</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfTFY4Z0RLLTFqelE/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfdHNFN0FlSThpMWs/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 1995</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfdlJyNTZkRHhhelE/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfSWlleENuMUVVNW8/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 1994</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfcFJUbWVUT3M1YWM/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfekhVZGlJckZVTk0/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 1993</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfZmlDSE5HQWRrdE0/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfZmlDSE5HQWRrdE0/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 1992</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfTUc5M29fb1l5cUk/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfeEdpeE5LWGFFd1k/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 1991</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfUERVeXV0MmpiWnM/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfRFdWRkw5MTEzME0/preview" target="_blank">Download Here</a></td>
            </tr>
            <tr>
            <td style="text-align: justify;" width="259">CAT Paper 1990</td>
            <td style="text-align: center;" width="210"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfWXhQVHI0bmxhbUk/preview" target="_blank">Download Here</a></td>
            <td style="text-align: center;" width="192"><a href="http://files2.entrancecorner.com/file.php?file=https://drive.google.com/file/d/0B8fY5tFZhFvfWW55Z0ZpQTJ5UlE/preview" target="_blank">Download Here</a></td>
            </tr>
            </tbody>
      </table>
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

      <p>Copyright © 2017 Word Finder. All Rights reserved.</p>
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