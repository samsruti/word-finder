<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Computer science Project</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,600,700%7CDroid+Serif:300,400,700,400italic">
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/owl.carousel.css">


  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div id="main-wrapper" class="homepage">
  <div class="toolbar">
    <div class="uou-block-1a blog">
          <div class="container">
        <ul class="quick-nav">
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>

<?php 
if(empty($_SESSION['user'])) 
    {       
        echo "<ul class=\"authentication\">
        <li><a href=\"login.php\">Login</a></li>
        <li><a href=\"register.php\">Register</a></li>
        </ul>";
    }
else{
  echo "<ul class=\"authentication\">";
  echo "Welcome ".htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8')." :) ";
  echo "</ul>";

}
  ?>
      </div>
    </div> <!-- end .uou-block-1a -->
  </div> <!-- end toolbar -->

  <div class="header-nav">
      <div class="box-shadow-for-ui">

        <div class="uou-block-2b icons">
          <div class="container">
            <a href="#" class="logo">
            <!-- <img src="img/logo.png" alt=""> -->
            WORD FINDER
            </a>
            <a href="#" class="mobile-sidebar-button mobile-sidebar-toggle"><span></span></a>

            <nav class="nav">
              <ul class="sf-menu">
                <li <?php echo ($page == "index") ? "class='active'" : ""; ?> "><a href="index.php"></i> Home</a>
              
                </li>
                <li <?php echo ($page == "videos") ? "class='active'" : ""; ?> >
                  <a href="videos.php">Videos</a>
                  
                </li>
                <li <?php echo ($page == "qpapers") ? "class='active'" : ""; ?> >
                  <a href="qpapers.php">Question Papers</a>
                </li>
                <li <?php echo ($page == "games") ? "class='active'" : ""; ?> >
                  <a href="games.php">Games</a>
                </li>
              <?php 
              if(!empty($_SESSION['user'])) 
                  { 
                            echo "<li "; echo ($page == "stats") ? "class='active'" : "";
                            echo ">";
                                echo "<a href=\"stats.php\">Statistical Reports</a>
                              </li>";
                              
                              echo "<li "; echo ($page == "history") ? "class='active'" : "";
                            echo ">";
                                echo "<a href=\"history.php\">History</a>
                              </li>";
                              echo "<li><a href=\"logout.php\">Logout</a>
                              </li>
                              ";

                  } 
?>
  

              </ul>
            </nav>
          </div>
        </div> <!-- end .uou-block-2b -->

      </div>
  </div> <!-- edn header-navm -->
