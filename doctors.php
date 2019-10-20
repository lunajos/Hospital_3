<?php include("views/header.php");?>
	<div id="banner">&nbsp;</div>
	<div id="featured">
		<div class="container">
			<div class="title">
				<h2>This is Riverside Hospital doctors page.</h2>
			
			
		
	</div>
	
<div class="table">
	<?php
	
		$servername = "localhost";
		$username = "2019hospital3";
		$password = "2019hospital3";
		$dbname = "2019hospital3";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		
		
		$sql = "SELECT * FROM hos3_physicians";
		$result = mysqli_query($conn, $sql) or die(mysqli_error());
		
		print ("
		
		<div align='center'>
		<center>
		
		<table >
			<tr align='center'>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th>Specialization</th>
				<th>Office Phone Number</th>
				<th>Mobile Phone Number</th>
				<th>Primary Language</th>
		</tr>");
                WHILE ($row=mysqli_fetch_array($result))
                {
                  print ("<tr align='center'><td>");
                  print($row["physicians_id"]);
                  print ("</td><td>");
                  print ($row["firstName"]);
                  print ("</td><td>");
                  print ($row["lastName"]);
                  print ("</td><td>");
                  print ($row["gender"]);
                  print ("</td><td>");
                  print ($row["specialization"]);
                  print ("</td><td>");
                  print ($row["officePhoneNumber"]);
                  print ("</td><td>");
                  print ($row["cellPhoneNumber"]);
                  print ("</td><td>");
                  print ($row["primaryLanguage"]);
                  print ("</td></tr>");
                }
		
		print ("</table> ");
		
		?>
	</div>
	

<?php include './views/footer.php';?>