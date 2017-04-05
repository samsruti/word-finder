<?php 

    // First we execute our common code to connection to the database and start the session 
    require("common.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    
     
    // Everything below this point in the file is secured by the login system 
     
    // We can display the user's username to them by reading it from the session array.  Remember that because 
    // a username is user submitted content we must use htmlentities on it before displaying it to the user. 
?> 

<?php
  $page = 'index';
  include_once('header.php');
?>

  <div class="homepage-banner has-bg-image" data-bg-image="img/homepage-banner.jpg">
    <div class="advanced-search">
      <div class="close">
        <i class="fa fa-close"></i>
      </div>
      <div class="container">
      
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h3>Looking for words' meaning?<br> let us help you.</h3>
          <p>If you get a good English dictionary, you will be better than 90% of English learners. It’s unbelievable, but most people (even people who want to learn English very much) simply go to a bookstore and buy the first dictionary they see.<br>
          <b>So why to waste money when <i>WordFinder</i> is here!</p></b>
        </div>
        <form action="searchResults.php" method="post">
          <div class="col-md-12">
            <div class="map-search">
              
                <div class="map-search-fields">
                <div class="field">
                  <input id="wordToBeSearched" name="wordToBeSearched" type="text" placeholder="Filter by keyword">
                </div>
              
              </div>
              <div class="search-button">
                <button class="btn btn-medium btn-primary">Search Meaning</button>
              </div>    
              
              

            </div>
          </div>
        </form>
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
</div>

<!-- Scripts -->
<script>
  function searchWord(word) {
    var input = document.getElementById("wordToBeSearched").value;
    alert(input);

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
