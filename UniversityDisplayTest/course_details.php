<!DOCTYPE html>
<html>
<head>
	<title>Course Details</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class = "container_courseofstudy">

	<?php
		// Check if a course of study is selected
		if (isset($_GET['course_of_study'])) {

			$servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "UniversityDisplay";
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check the database connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}

			// Prepare and execute a SQL statement to retrieve the course details
			$stmt = $conn->prepare("SELECT course_name, room_number, start_time, end_time FROM course_schedule WHERE course_of_study = ?");
			$stmt->bind_param("s", $_GET['course_of_study']);
			$stmt->execute();
			$result = $stmt->get_result();

			// Display the course details in a table
			if ($result->num_rows > 0) {
				echo '<h2>' . $_GET['course_of_study'] . '</h2>';
				echo '<table>';
				echo '<tr><th>Course Name</th><th>Room</th><th>Start Time</th><th>End Time</th><th></th></tr>';
				while($row = $result->fetch_assoc()) {
					echo '<tr><td>' . $row["course_name"] . '</td><td>' . $row["room_number"] . '</td><td>' . $row["start_time"] . '</td><td>' . $row["end_time"] .'</td><td>'. '<a href = ""><button>Route</button></a>' .'</td></tr>';
				}
				echo '</table>';
			} else {
				echo "No courses found for " . $_GET['course_of_study'];
			}

			// Close the database connection
			$conn->close();

		} else {
			echo "No course of study selected.";
		}
	?>
	</div>
</body>
</html>
