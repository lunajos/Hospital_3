<?php include("views/header.php");?>	
<div id="banner">&nbsp;</div>
	<div id="featured">
		<div class="container">
			<div class="title">
				<h2>This is Riverside Hospitals clients page.</h2>
			
				<ul>
					<li><a href="add_clients.php" accesskey="1" title="">Add Client</a></li>
					<li><a href="update_clients.php" accesskey="3" title="">Update Client</a></li>					
				</ul>
			
		
	</div>
	<div id="extra" class="container">
		<div class="title">

			
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
		
		
		$sql = "SELECT * FROM hos3_patients";
		$result = mysqli_query($conn, $sql) or die(mysqli_error());
		
		print ("
		
		<div align='center'>
		<center>
		
		<table>
			<tr align='center'>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Middle Name</th>
				<th>DOB</th>
				<th>Born Gender</th>
				<th>Gender Identified</th>
				<th>Work Phone Number</th>
				<th>Home Phone Number</th>
				<th>Mobile Phone Number</th>
				<th>Address 1</th>
				<th>Address 2</th>
				<th>City</th>
				<th>State</th>
				<th>Zip</th>
				<th>Emergency Contact Num</th>
				<th>Emergency Contact Relation</th>
				<th>Emergency Contact Name</th>
				<th>Primary Language</th>
		</tr>");
                WHILE ($row=mysqli_fetch_array($result))
                {
                  print ("<tr align='center'><td>");
                  print($row["patient_id"]);
                  print ("</td><td>");
                  print ($row["firstName"]);
                  print ("</td><td>");
                  print ($row["lastName"]);
                  print ("</td><td>");
                  print ($row["middleName"]);
                  print ("</td><td>");
                  print ($row["DOB"]);
                  print ("</td><td>");
                  print ($row["bornGender"]);
                  print ("</td><td>");
                  print ($row["genderIdentified"]);
                  print ("</td><td>");
                  print ($row["workPhoneNumber"]);
                  print ("</td><td>");
                  print ($row["homePhoneNumber"]);
                  print ("</td><td>");
                  print ($row["mobilePhoneNumber"]);
                  print ("</td><td>");
                  print ($row["addressLine1"]);
                  print ("</td><td>");
                  print ($row["addressLine2"]);
                  print ("</td><td>");
                  print ($row["city"]);
                  print ("</td><td>");
                  print ($row["state"]);
                  print ("</td><td>");
                  print ($row["zip"]);
                  print ("</td><td>");
                  print ($row["emergencyContactNumber"]);
                  print ("</td><td>");
                  print ($row["emergencyContactRelation"]);
                  print ("</td><td>");
                  print ($row["emergencyContactName"]);
                  print ("</td><td>");
                  print ($row["primaryLanguage"]);
                  print ("</td></tr>");
                }
		
		print ("</table> ");
		
		?>
	</div>
			
	</div>
<?php include './views/footer.php';?>