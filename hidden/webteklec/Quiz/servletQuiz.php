<?php include 'db.php'; ?>
<?php session_start() ?>
<?php

    $query = "SELECT COUNT(question_number) as 'total' FROM `questions` WHERE q_group =2";
    $results = $mysqli->query($query) or die($mysqli->error.___Line___);
    $row = $results->fetch_assoc();
    $total = $row['total'];   
    $_SESSION['total'] = $total;
    $_SESSION['score'] = 0;
    $_SESSION['quiz'] = 2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/animate.min.css" rel="stylesheet"> 
  <link href="../css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/lightbox.css" rel="stylesheet">
  <link href="../css/main.css" rel="stylesheet">
  <link id="css-preset" href="../css/presets/preset1.css" rel="stylesheet">
  <link href="../css/responsive.css" rel="stylesheet">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="../images/user.png">
</head><!--/head-->

<body>

  <header id="home">
    <div class="main-nav">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.html">
              <h1><img class="img-responsive" src="../images/logo.png" alt="logo"></h1>
            </a>                    
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">                 
              <li class="scroll"><a href="../index.html">Home</a></li>
              <li class="dropdown menu__item">
          <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Topics<b class="caret"></b></a>
          <ul class="dropdown-menu agile_short_dropdown">
             <li><a href="../php.html">PHP</a></li>
             <li><a href="../servlets.html">Servlet</a></li>
             <li><a href="../nodejs.html">Node.js</a></li>
             <li><a href="../jsp.html">JSP</a></li>
             <li><a href="../owasp.html">OWASP</a></li>
          </ul>
        </li>
              <li class="scroll"><a href="../quiz.html">Take our Quiz</a></li>                     
              <li class="scroll"><a href="../index.html">Our Team</a></li>    
            </ul>
          </div>
        </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->


    
    <div id="intro">
      <div class="container">
        <h2>Test your Knowledge on Servlet</h2>
        <ul class="list-quiz">
          <li class="odd wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms"><strong>Number of Questions: </strong> <?php echo $total; ?></li>
          <li class="even wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="450ms"><strong>Type: </strong> Multiple Choices</li>
          <li class="odd wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="550ms"><strong>Estimated Time: </strong><?php echo $total * .5; ?> Minutes</li>
        </ul>
        <a href="qServlet.php?n=6" class="start">Start Quiz</a>
      </div>

    <section class="learning-button">
      <div class="caption">
        <a class="btn toggle-btn" href="../servlets.html">Go Back to Lessons</a>
      </div>
    </section>
  </div>

    <footer id="footer">
    <!-- <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="../images/logo.png" alt=""></a>
        </div>
      </div>
    </div> -->
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2018 Saint Louis University | School of Computing and Information Sciences</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="../js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="../js/wow.min.js"></script>
  <script type="text/javascript" src="../../js/mousescroll.js"></script>
  <script type="text/javascript" src="../js/smoothscroll.js"></script>
  <script type="text/javascript" src="../js/jquery.countTo.js"></script>
  <script type="text/javascript" src="../js/lightbox.min.js"></script>
  <script type="text/javascript" src="../js/main.js"></script>

</body>
</html>