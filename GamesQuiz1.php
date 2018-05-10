<html>
<title> Games - Quiz 1  </title>
<body>
<form action="grade.php" method="post" id="quiz">
<li>

<h3>CSS Stands for...</h3>

<div>
    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
    <label for="question-1-answers-A">A) Computer Styled Sections </label>
</div>

<div>
    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
    <label for="question-1-answers-B">B) Cascading Style Sheets</label>
</div>

<div>
    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
    <label for="question-1-answers-C">C) Crazy Solid Shapes</label>
</div>

<div>
    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
    <label for="question-1-answers-D">D) None of the above</label>
</div>

</li>
</form>
<input type="submit" value="Submit Quiz" />

<?php 

$Questions = array(
    1 => array(
        'Question' => 'CSS stands for',
        'Answers' => array(
            'A' => 'Computer Styled Sections',
            'B' => 'Cascading Style Sheets',
            'C' => 'Crazy Solid Shapes'
        ),
        'CorrectAnswer' => 'A'
    ),
    2 => array(
        'Question' => 'Second question',
        'Answers' => array(
            'A' => 'First answer of Second question',
            'B' => 'Second answer Second question',
            'C' => 'Third answer Second question'
        ),
        'CorrectAnswer' => 'C'
    )
);

if (isset($_POST['answers'])){
    $Answers = $_POST['answers']; // Get submitted answers.

    // Now this is fun, automated question checking! ;)

    foreach ($Questions as $QuestionNo => $Value){
        // Echo the question
        echo $Value['Question'].'<br />';

        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']){
            echo '<span style="color: red;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; // Replace style with a class
        } else {
            echo '<span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; // Replace style with a class
        }
        echo '<br /><hr>';
    }
} else {
?>
    <form action="grade.php" method="post" id="quiz">
    <?php foreach ($Questions as $QuestionNo => $Value){ ?>
    <li>
        <h3><?php echo $Value['Question']; ?></h3>
        <?php 
            foreach ($Value['Answers'] as $Letter => $Answer){ 
            $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
        ?>
        <div>
            <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
            <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
        </div>
        <?php } ?>
    </li>
    <?php } ?>
    <input type="submit" value="Submit Quiz" />
    </form>
<?php 
}
?>
</body>
</html>