<?php include 'db.php'; ?>
<?php session_start() ?>
<?php

		$query = "SELECT MAX(question_number) as 'total' FROM `questions` WHERE q_group =1";
		$results = $mysqli->query($query) or die($mysqli->error.___Line___);
		$row = $results->fetch_assoc();
		$total = $row['total'];		
		$_SESSION['total'] = $total;
		$_SESSION['score'] = 0;
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
			<div class="container">
				<h2>Test your Knowledge on PHP</h2>
				<ul>
					<li><strong>Number of Questions: </strong> <?php echo $total; ?></li>
					<li><strong>Type: </strong> Multiple Choices</li>
					<li><strong>Estimated Time: </strong><?php echo $total * .5; ?> Minutes</li>
				</ul>
				<a href="question.php?n=1" class="start">Start Quiz</a>
			</div>
		</main>
		<footer>
			<div class="container">
				Copyright &copy; 2018, CD.
			</div>
		</footer>
</body>
</html>