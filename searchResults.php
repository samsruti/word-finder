<?php 

    // First we execute our common code to connection to the database and start the session 
    require("common.php"); 
    // At the top of the page we check to see whether the user is logged in or not 
    $name = "";
    if(!empty($_SESSION['user'])) 
    { 
        $name = htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8');
    } 
    $word = mysql_real_escape_string($_REQUEST['wordToBeSearched']);   
    $query = "INSERT INTO word_frequencies (username, word) VALUES (\"".$name."\",\"".$word."\");";
        
     
    try 
    { 
        // These two statements run the query against your database table. 
        $stmt = $db->prepare($query); 
        $stmt->execute(); 
        
    } 
    catch(PDOException $ex) 
    { 
        // Note: On a production website, you should not output $ex->getMessage(). 
        // It may provide an attacker with helpful information about your code.  
        die("Failed to run query: " . $ex->getMessage()); 
    } 
     
     
    // At the top of the page we check to see whether the user is logged in or not 
    
     
    // Everything below this point in the file is secured by the login system 
     
    // We can display the user's username to them by reading it from the session array.  Remember that because 
    // a username is user submitted content we must use htmlentities on it before displaying it to the user. 
?> 

<?php
  $page = 'index';
  include_once('header.php');
?>

  <div class="main-content content-business has-bg-image" data-bg-color="f5f5f5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          
          <div class="listing listing-1">
            <div class="listing-ver-1">
            <?php
                        if($_SERVER["REQUEST_METHOD"]=="POST")
                        {
                                $word=$_POST["wordToBeSearched"];
                            $lnk='http://dictionary.reference.com/browse/'.$word;
                      
              echo "<div class=\"listing-heading\">
                <h5><a href=\"single_business.html\">".$word."</a></h5>
                <a href=\"#\"><i class=\"fa fa-bookmark\"></i></a>
              </div>
              <div class=\"tab-content\">
                <div id=\"basic\" class=\"tab-pane fade in active basic\">
                  <div class=\"listing-inner\">
                    
                    <div class=\"listing-content\">
                    
                      ";

                         $flag = 0;
                        $string=file_get_contents($lnk);
                        //$string =preg_replace('/\s+/', ' ', $string);
                        if(preg_match_all('@<div class="def-content">\s+(.*)\s+<div class="def-block def-inline-example">@',$string,$match_mean))
                        {
                          //var_dump($match_mean) ;
                        }
                        else{
                          $flag = 1;
                        } if(preg_match_all('@<span class="dbox-example">(.*?)</span>@',$string,$match_ex))
                        {
                          //var_dump($match_ex) ;
                        }
                        else
                        {
                          $flag = 1;
                        }

                        if ($flag == 1) {
                          echo "No Results Found.";
                        }

                        /*echo "Normal count MM: " . sizeof($match_mean)."<br>";
                        echo "Recursive count MM: " . sizeof($match_mean,1)."<br>";

                        echo "Normal count:ME " . sizeof($match_ex)."<br>";
                        echo "Recursive count:ME " . sizeof($match_ex,1)."<br>";*/

                        $size=(sizeof($match_mean,1)-sizeof($match_mean))/2;
                        for($i=0;$i<$size;$i++)
                        {
                          $val = $i+1;
                          echo $val.". ";
                          echo "<b>Meaning of the Word: </b> ".$match_mean[1][$i]."<br>";
                          echo "<b>Example : </b> ".$match_ex[1][$i]."<br>";
                          echo "<br>";
                        }


                        }
                        ?>
                    </div>
                  </div>
                </div>
                
              </div>
          
              
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <div class="uou-block-4e has-bg-image" data-bg-color="ffffff">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#" class="logo"><img src="img/logo.png" alt=""></a>

          <ul style="background-image: url(&quot;img/footer-map-bg.png&quot;);" class="contact-info has-bg-image contain" data-bg-image="img/footer-map-bg.png">
            <li>
              <i class="fa fa-map-marker"></i>
              <address>795 Folsom Ave, Suite 600, San Francisco, CA 94107</address>
            </li>

            <li>
              <i class="fa fa-phone"></i>
              <a href="tel:#">(123) 456-7890</a>
            </li>

            <li>
              <i class="fa fa-envelope"></i>
              <a href="mailto:#">first.last@example.com</a>
            </li>
          </ul>
        </div>

        <div class="col-md-3 col-sm-6">
          <h5>Twitter Feed</h5>

          <ul class="twitter-feed">
            <li>
              RT <a href="#">@no1son</a>: Now this <a href="#">http://t.co/TSfMW1qMAW</a> is one hell of a stunning site!!! Awesome work guys <a href="#">@AIRNAUTS</a>
              <a href="#" class="time">May 25</a>
            </li>

            <li>
              Check out the wordpress version of Tucson - <a href="#">http://t.co/sBlU3GbapT</a>
              <a href="#" class="time">May 22</a>
            </li>
          </ul>
        </div>

        <div class="col-md-3 col-sm-6">
          <h5>Photostream</h5>

          <ul class="photos-list">
            <li><img src="img/photostream4.jpg" alt=""></li>
            <li><img src="img/photostream6.jpg" alt=""></li>
            <li><img src="img/photostream3.jpg" alt=""></li>
            <li><img src="img/photostream2.jpg" alt=""></li>
            <li><img src="img/photostream1.jpg" alt=""></li>
            <li><img src="img/photostream.jpg" alt=""></li>
          </ul>
        </div>

        <div class="col-md-3 col-sm-6">
          <h5>Newsletter</h5>

          <p>Subscribe to our newsletter to receive our latest news and updates. We do not spam.</p>

          <form class="newsletter-form" action="#">
            <input placeholder="Enter your email address" type="email">
            <input class="btn btn-primary" value="Subscribe" type="submit">
          </form>
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

      <p>Copyright © 2015 Quick Finder. All Rights reserved.</p>
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
          <li class="pl10 active"><a href="index_business4.html">Business Index(4)</a></li>
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
