<?php include 'database.php'; ?>
<?php include('head.php'); ?>
<?php include('nav.php'); ?>
<?php 
  /*
  * Get Total Questions
  */
  $query = "SELECT * FROM `js_questions`";

  //Get Results
  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

  $total = $result->num_rows;
?>

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
        <div class="container">
          <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-8 text-center">
  
              <div class="mb-5 element-animate">
                <h1>Quiz</h1>
                <p class="lead">Test your Knowledge</p>
                <p>This is a multiple choice quiz to test your knowledge of JavaScript</p>
                <p><strong>Number of questions: </strong> <?php echo $total; ?></p>
                <p><strong>Type: </strong>Multiple Choice</p>
                <p><strong>Estimated Time: </strong><?php echo round($total * 0.75);?> Minutes</p>
                <p><a href="questionJS.php?n=1" class="btn btn-primary">Start Quiz</a></p>

              </div>
              
            </div>
          </div>
        </div>
    </section>
    
<?php include('footer.php'); ?>
<?php include('footerScript.php'); ?>