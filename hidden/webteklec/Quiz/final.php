<?php session_start(); ?>
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
				<h2>You're Done!</h2>
					<p>You have completed the test</p>
					<p>Final Score: <?php echo $_SESSION['score']; ?></p>
					<a href="question.php?n=1" class="start">Retake Quiz</a>
			</div>
		</main>
		<footer>
			<div class="container">
				Copyright &copy; 2018, CD.
			</div>
		</footer>
</body>
</html>