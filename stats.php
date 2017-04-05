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
    $query = "select word, count(*) as frequency
				from word_frequencies
				group by word
				order by count(*) desc
				limit 6	"; 
     
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
$page = 'stats';
  include_once('header.php');
?>
      


 <div class="main-content content-business has-bg-image" data-bg-color="f5f5f5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          
          <div class="listing listing-1">
            <div class="listing-ver-1">
              <div class="listing-heading">
                <h5><a href="single_business.html"><center>Statistics of Words Searched </center></a></h5>
              </div>
                  <div id="top_x_div" style="width: 100%; height: 500px;"></div>
          
              
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


</div>

<!-- Scripts -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/plugins/superfish.min.js"></script>
<script src="js/jquery.ui.min.js"></script>
<script src="js/plugins/rangeslider.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Words', 'Frequecies'],
            <?php foreach($rows as $row): ?> 
            ["<?php echo htmlentities($row['word'], ENT_QUOTES, 'UTF-8'); ?>",<?php echo htmlentities($row['frequency'], ENT_QUOTES, 'UTF-8'); ?>],
            
          <?php endforeach; ?> 
   
        ]);

        var options = {
          title: 'Words Frequecies',
          width: 1000,
          legend: { position: 'none' },
          chart: { title: 'Word Frequecies',
                   subtitle: 'Most Words Used' },
          bars: 'vertical', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'bottom', label: 'Words Used'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>

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







  </body>
</html>