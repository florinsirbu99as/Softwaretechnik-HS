<!DOCTYPE html>
<html>
<head>
	<title>Course Schedule</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class = "header">
		<p id="date"></p>
		<button id="myButton">English</button>
	</div>

	<?php
		// Connect to the database
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "UniversityDisplay";

		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		// Retrieve the list of courses of study from the database
		$sql = "SELECT DISTINCT course_of_study FROM course_schedule";
		$result = mysqli_query($conn, $sql);

		// If there are no courses of study in the database, display an error message
		if (mysqli_num_rows($result) == 0) {
			echo "No courses of study found in the database.";
		} else {
			// Display the list of courses of study as buttons
			echo '<h2 class = "title">Select a Course of Study</h2>';
			echo '<div class = "button_container">';
			while ($row = mysqli_fetch_assoc($result)) {
				$course_of_study = $row['course_of_study'];
				echo '<a class = "button" href="course_details.php?course_of_study=' . urlencode($course_of_study) . '"><button>' . $course_of_study . '</button></a>';
			}
			echo '<div>';
		}

		// Close the database connection
		mysqli_close($conn);
	?>

	<script>
	// Get the current date and time
	var currentDate = new Date();

	// Format the date as a string
	var dateString = currentDate.toDateString();

	// Set the text of the date element
	document.getElementById("date").innerHTML = dateString;

	</script>
</body>
</html>
