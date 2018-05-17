<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php include('head.php'); ?>
<?php
	/*
	 * Get Total Number of Questions
	 */
	$query = "SELECT * FROM `php_questions`";
	//Get Results
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $results->num_rows; 
?>
    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
        <div class="container">
          <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-8 text-center">
  
              <div class="mb-5 element-animate">
                    <h1>You're Done!</h1>
                    <p>Congratulations! You have completed the quiz</p>
                    <p>Final Score: <?php echo $_SESSION['score']; ?> / <?php echo $total; ?></p>
                    <a href="questionPHP.php?n=1" class=" btn btn-primary">Retake Quiz</a>
                    <a href="index.php" class=" btn btn-primary">Home</a>
                    <a href="quiz.php" class=" btn btn-primary">Other Quizzes</a>
              </div>
            </div>
          </div>
        </div>
    </section>

<?php session_destroy(); ?>    
<?php include('footerScript.php'); ?>