<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
    //Set question number
    $number = (int)$_GET['n'];

    /*
    *   Get Question 
    */
    $query = "SELECT * FROM `node_questions`
                WHERE node_question_number = $number";

    // Get result

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

    $question = $result->fetch_assoc();

    /*
    *   Get Question 
    */
    $query = "SELECT * FROM `node_choices`
                WHERE node_question_number = $number";

    // Get result

    $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

    /*
    *   Get total questions
    */
    $query = "SELECT * FROM `node_questions`";

    //Get results
    $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $total = $results->num_rows;
         
?>
<?php include('head.php'); ?>

    <section class="site-section">
        <div class="container">
            <div class="media d-block feature">
                <h1>Node JS Quiz</h1>
                <div class="current"><p>Question <?php echo $question['node_question_number']?> of <?php echo $total; ?></p></div>
                <p>
                    <?php echo $question['text']; ?>
                </p>
                <form method="post" action="processNodeJS.php">
                    <ul class="" style="list-style: none">
                        <?php while($row = $choices->fetch_assoc()): ?>
                            <li><input name ="choice" type="radio" value="<?php echo $row['id']; ?>" /><?php echo $row['choice_text']; ?></li>
                        <?php endwhile; ?>
                    </ul>
                    <input type="submit" value="Submit" class="btn-primary btn-sm" />
                    <input type="hidden" name="number" value="<?php echo $number; ?>"/>
                </form>
            </div>
        </div>
    </section>
