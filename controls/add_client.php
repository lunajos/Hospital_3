<?php

#include("views/header.php");

if(isset($_POST['add'])) {

	echo "clicked add";
	
	# Set ENV Vars
	$servername	= "localhost";
	$username 	= "2019hospital3";
	$password	= "2019hospital3";
	$dbname 	= "2019hospital3";
	

//	$patient_id		= $_POST['patient_id'];
//	$firstName		= $_POST['firstName'];
//	$middleName		= $_POST['middleName'];
//	$lastName       	= $_POST['lastName'];
//	$DOB            	= $_POST['DOB'];
//	$bornGender		= $_POST['bornGender'];
//	$genderIdentified       = $_POST['genderIdentified'];
//	$workPhoneNumber        = $_POST['workPhoneNumber'];
//	$homePhoneNumber   	= $_POST['homePhoneNumber'];
//	$mobilePhoneNumber      = $_POST['mobilePhoneNumber'];
//	$addressLine1    	= $_POST['addressLine1'];
//	$addressLine2       	= $_POST['addressLine2'];
//	$city           	= $_POST['city'];
//	$state   		= $_POST['state'];
//	$zip            	= $_POST['zip'];
//	$emergencyContactNumber = $_POST['emergencyContactNumber'];
//	$emergencyContactRelation=$_POST['emergencyContactRelation'];
//	$emergencyContactName    = $_POST['emergencyContactName'];
//	$primaryLanguage   	= $_POST['primaryLanguage'];
	
	#connect to mysql
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if(! $conn ) {
	    die('Could not connect: ' . mysqli_error());
	}
		
	$result = mysqli_query($conn, $sql);
	
	#patient_id = $patient_id 
	$sql = "INSERT INTO hos3_patients SET ";
	$query = '';
	
	if(!empty($_POST['patient_id'])) {
		$patient_id = $_POST['patient_id'];  	
	}
	if(!empty($_POST['firstName'])) {
		$firstName = $_POST['firstName'];
	}
	if(!empty($_POST['lastName'])) {
		$lastName = $_POST['lastName'];
	}
	if(!empty($_POST['middleName'])) {
		$middleName = $_POST['middleName'];  
	}
	if(!empty($_POST['DOB'])) {
		$DOB = $_POST['DOB'];  
	}
	if(!empty($_POST['bornGender'])) {
		$bornGender = $_POST['bornGender'];   
	}
	if(!empty($_POST['genderIdentified'])) {
		$genderIdentified = $_POST['genderIdentified'];   
	}
	if(!empty($_POST['workPhoneNumber'])) {
		$workPhoneNumber = $_POST['workPhoneNumber'];
	}
	if(!empty($_POST['homePhoneNumber'])) {
		$homePhoneNumber = $_POST['homePhoneNumber'];   
	}
	if(!empty($_POST['mobilePhoneNumber'])) {
		$mobilePhoneNumber = $_POST['mobilePhoneNumber'];
	}
	if(!empty($_POST['addressLine1'])) {
		$addressLine1 = $_POST['addressLine1'];  
	}
	if(!empty($_POST['addressLine2'])) {
		$addressLine2 = $_POST['addressLine2'];  
	}
	if(!empty($_POST['city'])) {
		$city = $_POST['city'];  
	}
	if(!empty($_POST['state'])) {
		$zip = $_POST['zip'];   
	}
	if(!empty($_POST['zip'])) {
		$emergencyContactNumber = $_POST['emergencyContactNumber'];   
	}
	if(!empty($_POST['emergencyContactNumber'])) {
		$emergencyContactNumber = $_POST['emergencyContactNumber'];
	}
	if(!empty($_POST['emergencyContactRelation'])) {
		$emergencyContactRelation = $_POST['emergencyContactRelation'];
	}
	if(!empty($_POST['emergencyContactName'])) {
		$emergencyContactName = $_POST['emergencyContactName'];
	}
	if(!empty($_POST['primaryLanguage'])) {
		$primaryLanguage = $_POST['primaryLanguage'];   
	}
	

	$sql = "insert into hos3_patients values ('$patient_id', '$firstName', '$middleName', '$lastName', '$DOB', '$bornGender', '$genderIdentidied', '$workPhoneNumber', '$homePhoneNumber', '$mobilePhoneNumber', '$addressLine1', '$addressLine2', '$city', '$state', '$zip', '$emergencyContactNumber', '$emergencyContactRelation', '$emergencyContactName', '$primaryLanguage' )";

	echo $sql;    

	#$result = mysqli_query($sql, $conn) or die(mysqli_error());
	
	if ($conn->query($sql) === TRUE) {
	    echo "Record Updating successfully";
	} else {
	    echo "Error Updating record: " . $conn->error;
	}


	include("../views/header.php");
	
	print("
		
		<center>
		<table >
		  <tr align='center'>
		    <td>
		      The patient "); print($firstName + $lastName); print(" was added to the database
		    </td>
		  </tr>
		</table>
		</center>");
	
	}	
?>
</body>

</html>