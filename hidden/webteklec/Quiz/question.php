<?php include 'db.php'; ?>
<?php session_start(); ?>
<?php
	$number = (int) $_GET['n'];
	//Questions
	$query = "SELECT * FROM questions WHERE  question_number = $number";
	$result = $mysqli->query($query) or die($mysqli->error.___Line___);
	$question = $result->fetch_assoc();
	$query = "SELECT * FROM choices WHERE  question_number = $number";
	$choices = $mysqli->query($query) or die($mysqli->error.___Line___);
	//number of questions
	$query = "SELECT * FROM `choices` WHERE question_number = '1'";
	$results = $mysqli->query($query) or die($mysqli->error.___Line___);
	$total = $results->num_rows;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Quiz</title>
</head>
<body>
		<header>
			<div class="container">
				<h1>PHP Quiz</h1>
			</div>
		</header>
		<main>
		SCORE: <?php echo $_SESSION['score'] ?>pts
			<div class="container">
				<div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $_SESSION['total'] ?></div>
				<p class="question">
					<?php echo $question['text']; ?>
				</p>
				<form method="post" action="process.php">
					<ul class="choices">
						<?php while($row = $choices->fetch_assoc()): ?>
							<li><input name="choice" type="radio" value="<?php echo $row['id'] ?>" /><?php echo $row['text']; ?></li>
						<?php endwhile; ?>
					</ul>
					<input type="submit" value="Submit" />
					<input type="hidden" name="number" value="<?php echo $number; ?>" />
			</div>
		</main>
		<footer>
			<div class="container">
				Copyright &copy; 2018, CD.
			</div>
		</footer>
</body>
</html>