<?php 

    // First we execute our common code to connection to the database and start the session 
    require("common.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    $name = "";
    if(empty($_SESSION['user'])) 
    { 
        // If they are not, we redirect them to the login page. 
        header("Location: login.php"); 
         
        // Remember that this die statement is absolutely critical.  Without it, 
        // people can view your members-only content without logging in. 
        die("Redirecting to login.php"); 
    } 
    if(!empty($_SESSION['user'])) 
    { 
        $name = htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8');
    } 
     
    // Everything below this point in the file is secured by the login system 
     
    // We can retrieve a list of members from the database using a SELECT query. 
    // In this case we do not have a WHERE clause because we want to select all 
    // of the rows from the database table. 
    $query = "SELECT id,
            username, 
            word
        FROM word_frequencies
        WHERE username =\"".$name."\"
        order by id desc;"; 
     
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
         
    // Finally, we can retrieve all of the found rows into an array using fetchAll 
    $rows = $stmt->fetchAll(); 
?> 
<?php
  $page = 'history';
  include_once('header.php');
?>

  <div class="main-content content-business has-bg-image" data-bg-color="f5f5f5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          
          <div class="listing listing-1">
            <div class="listing-ver-1">
              <div class="listing-heading">
                <h5><a href="single_business.html"><center>History of Words Searched </center></a></h5>
              </div>
              <div class="tab-content">

<table> 
    <tr> 
    
        <th>Words</th> 
        
    </tr> 
    <?php foreach($rows as $row): ?> 
        <tr> 
            <!-- htmlentities is not needed here because $row['id'] is always an integer --> 
            <td><?php echo htmlentities($row['word'], ENT_QUOTES, 'UTF-8'); ?></td> 
            
        </tr> 
    <?php endforeach; ?> 
</table> 
              </div>
          
              
            </div>
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

