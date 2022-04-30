<html>
  <head>
    <!-- 	Meta Data	 -->
		<meta charset="UTF-8">
		<meta name="author" content="Van N">
		<meta name="keywords" content="immaculata, ics2o">
		<meta name="DESCRIPTION" content="Hot or Cold Website in PHP">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <title>Hot or Cold Website in PHP</title>
    <!-- Links to style.css file -->
		<link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
		<!-- Heading and paragraph -->
    <?php
			echo '<center><h1>Hot or Cold Website in PHP</h1></center><br>';
			echo "<p>Enter the temperature below!</p>";
		?>
		<!-- Text field and button (Takes Input) -->
		<form method = "post">
      Temperature (Celsius): <input type="number" step="any" name="celsius"> <br>
			<br><br>
			<input type ="submit" name ="submit"  value="Submit">
		<!-- Creates random number and outputs back if guessed correctly -->
		<?php
      // If Button clicked
			if(isset($_POST['submit'])) {
        // Ensures guess field is not empty
        if($_POST['celsius'] != "") {
          // Constants
          define("TEMP_BOUNDARY", 15);
          define("SUPERNOVA", 1000000000000);

          // Variables
          $celsius = $_POST['celsius']; 
          
          // If user entered a temperature above the temperature boundary but below that of a supernova
          if ($celsius >= TEMP_BOUNDARY && $celsius < SUPERNOVA) {
            echo "<br><h4>It sure is hot out! Especially with a temperature of " . $celsius . "°C</h4>";
            // If user entered a temperature below the temperature boundary
          } else if ($celsius < TEMP_BOUNDARY) {
            echo "<br><h4>It sure is cold out! Especially with a temperature of " . $celsius . "°C</h4>";
            // The user must have entered a temperature higher than a supernova...
          } else {
            echo "<br><h4>Something is not quite right...Either the Earth is on fire or you're a liar! Especially with a temperature of " . $celsius . "°C</h4>";
          }
          // If user did enter anything, yet pressed button
        } else {
          echo "<h4>Please fill the input field.</h4>";
        }
			}
		?>
  </body>
</html>