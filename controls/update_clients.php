<?php 

if(isset($_POST['update'])){
    
    $patient = $_POST['patient'];
	
    $patient_id = $_POST['patient_id'];
    $firstName 	= $_POST['firstName'];
    $lastName 	= $_POST['lastName'];
    $middleName = $_POST['bornGender'];
    $DOB = $_POST['DOB'];
    $bornGender	= $_POST['bornGender	'];
    $gernderIdentified	= $_POST['gernderIdentified	'];
    $workPhoneNumber	= $_POST['workPhoneNumber	'];
    $homePhoneNumber	= $_POST['homePhoneNumber	'];
    $mobilePhoneNumber	= $_POST['mobilePhoneNumber	'];
    $addressLine1	= $_POST['addressLine1'];
    $addressLine2	= $_POST['addressLine2'];
    $city	= $_POST['city'];
    $state	= $_POST['state'];
    $zip	= $_POST['zip'];
    $emergencyContactNumber	= $_POST['emergencyContactNumber'];
    $emergencyContactRelation	= $_POST['emergencyContactRelation'];
    $emergencyContactName	= $_POST['emergencyContactName'];
    $primaryLanguage	= $_POST['primaryLanguage	'];
    
    # Counter for index
    $x = 0;    
    foreach ($patient as $id){
        
        
    	$x = 0;
    	
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
        } 

	#patient_id = $patient_id 
	$sql = "UPDATE hos3_patients SET ";
	$query = '';
	
	if(!empty($_POST['patient_id'])) {
		$query = $query . "patient_id = '$patient_id[$x] '" ;   	
	}
	if(!empty($_POST['firstName'])) {
		$query = $query . ", firstName = '$firstName[$x]'";
	}
	if(!empty($_POST['lastName'])) {
		$query = $query . ", lastName = '$lastName[$x]'";   
	}
	if(!empty($_POST['middleName'])) {
		$query = $query . ", middleName = '$middleName[$x]'";   
	}
	if(!empty($_POST['DOB'])) {
		$query = $query . ", DOB = '$DOB[$x]'";   
	}
	if(!empty($_POST['bornGender'])) {
		$query = $query . ", bornGender = '$bornGender[$x]'";   
	}
	if(!empty($_POST['genderIdentified'])) {
		$query = $query . ", genderIdentified = '$genderIdentified[$x]'";   
	}
	if(!empty($_POST['workPhoneNumber'])) {
		$query = $query . ", workPhoneNumber = '$workPhoneNumber[$x]'";   
	}
	if(!empty($_POST['homePhoneNumber'])) {
		$query = $query . ", homePhoneNumber = '$homePhoneNumber[$x]'";   
	}
	if(!empty($_POST['mobilePhoneNumber'])) {
		$query = $query . ", mobilePhoneNumber = '$mobilePhoneNumber[$x]'";   
	}
	if(!empty($_POST['addressLine1'])) {
		$query = $query . ", addressLine1 = '$addressLine1[$x]'";   
	}
	if(!empty($_POST['addressLine2'])) {
		$query = $query . ", addressLine2 = '$addressLine2[$x]'";   
	}
	if(!empty($_POST['city'])) {
		$query = $query . ", city = '$city[$x]'";   
	}
	if(!empty($_POST['state'])) {
		$query = $query . ", state = '$state[$x]'";   
	}
	if(!empty($_POST['zip'])) {
		$query = $query . ", zip = '$zip[$x]'";   
	}
	if(!empty($_POST['emergencyContactNumber'])) {
		$query = $query . ", emergencyContactNumber = '$emergencyContactNumber[$x]'";   
	}
	if(!empty($_POST['emergencyContactRelation'])) {
		$query = $query . ", emergencyContactRelation = '$emergencyContactRelation[$x]'";   
	}
	if(!empty($_POST['emergencyContactName'])) {
		$query = $query . ", emergencyContactName = '$emergencyContactName[$x]'";   
	}
	if(!empty($_POST['primaryLanguage'])) {
		$query = $query . ", primaryLanguage = '$primaryLanguage[$x]'";   
	}
	

	$sql = $sql . $query ." WHERE patient_id=$id;";
	#echo $id . " is a TEST:    " ;
	echo $sql;    

	#$result = mysqli_query($sql, $conn) or die(mysqli_error());
	
	if ($conn->query($sql) === TRUE) {
	    echo "Record Updating successfully";
	} else {
	    echo "Error Updating record: " . $conn->error;
	}
        
        // sql to delete a record
				
	
	#mysqli_fetch_array($result);
    } # End FOREACH

    
    
} # End if update button is pressed

?>
