<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assigment</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<?php include 'navbar.php' ?>
	<h1>Skip Multiples of 5</h1>
	<?php 
	for ($i = 1; $i <= 50; $i++) {
		if ($i % 5 == 0) {
		    continue; // Skip multiples of 5
		}
		echo $i . ", ";
	 }
	 
	?>
	<br>
	<a class="btn btn-primary" href="index.php">Go To Home</a>


	</div>
	



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>