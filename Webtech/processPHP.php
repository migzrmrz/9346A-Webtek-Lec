<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
    //Check to see if score is set_error_handler
    if(!isset($_SESSION['score'])) {
        $_SESSION['score'] = 0;
    }

    if($_POST) {
        $number = $_POST['number'];
        $selected_choice = $_POST['choice'];

        $next = $number+1;

        /*
        *   Get total questions
        */
        $query = "SELECT * FROM `php_questions`";

        //Get results
        $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $total = $results->num_rows;

        /*
        *   Get correct choices
        */
        $query = "SELECT * FROM `php_choices`
                    WHERE php_question_number = $number AND is_correct = 1";

        //Get Result

        $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

        //Get Row
        $row = $result->fetch_assoc();

        //Set correct choice
        $correct_choice = $row['id'];

        //Compare
        if($correct_choice = $selected_choice) {
            $_SESSION['score']++;
        }

        //Check if last question
        if($number == $total) {
            header("Location: finalPHP.php");
            exit();
        } else {
            header("Location: questionPHP.php?n=".$next);
        }

    }

?>   