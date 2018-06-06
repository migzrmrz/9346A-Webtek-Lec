<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Quiz</title>
</head>
<body>
		<main>
			<div class="container">
				<h2>You're Done!</h2>
					<p>You have completed the test</p>
					<p>Final Score: <?php echo $_SESSION['score']; ?></p>
					<a href="../index.html" class="start">Back to Main Page</a>
			</div>
		</main>
		<footer>
			<div class="container">
				Copyright &copy; 2018, CD.
			</div>
		</footer>
</body>
</html>