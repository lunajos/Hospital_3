<?php 

if(isset($_POST['show'])){
  

    $patient_id = $_POST['patient_id'];
    $DOB 	= $_POST['DOB'];
    $firstName 	= $_POST['firstName'];
    $lastName 	= $_POST['lastName'];
    $bornGender	= $_POST['bornGender'];
    
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    #patient_id = $patient_id 
    $sql = "SELECT * FROM hos3_patients WHERE ";
    $query = '';
    
    if(!empty($_POST['patient_id'])) {
    	$query = $query . "patient_id = $patient_id AND ";    	
    }
    if(!empty($_POST['DOB'])) {
    	$query = $query . "DOB = '$DOB' AND ";
    }
    if(!empty($_POST['firstName'])) {
	$query = $query . "firstName = '$firstName' AND ";
    }
    if(!empty($_POST['lastName'])) {
	$query = $query . "lastName = '$lastName' AND ";   
    }
    if(!empty($_POST['bornGender'])) {
	$query = $query . "bornGender = '$bornGender' AND ";   
    }

    $sql = $sql . $query ."TRUE ;";
    #echo $sql;    

    $result = mysqli_query($conn, $sql) or die(mysqli_error());
    print ('<form method="post" action="' . $_SERVER['PHP_SELF'] . '">');
    print ("<input class='edit , update' type='submit' name='update' value='Update Patient'>");
    print ("<input class='edit , delete' type='submit' name='delete' value='Remove Patient'>");
    print ("
    
    <div class='table' align='center'>
    <center>


    <table class=''>
      <tr align='center'>
        <th>Select</th>
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
            print ("<tr align='center' id='");
            print($row["patient_id"]);
            print ("'>");
            
            print ("<td><input type='checkbox' name='patient[]' value='");
          
            print($row["patient_id"]);
            print ("'></input></td><td><input name='patient_id[]' value='");
            print($row["patient_id"]);
            print ("'></input></td><td> <input name='firstName[]' value='");
            print ($row["firstName"]);
            print ("'></input</td><td> <input name='lastName[]' value='");
            print ($row["lastName"]);
            print ("'></input</td><td><input name='middleName[]' value='");
            print ($row["middleName"]);
            print ("'></input</td><td><input name='DOB[]' value='");
            print ($row["DOB"]);
            print ("'></input</td><td><input name='bornGender[]' value='");
            print ($row["bornGender"]);
            print ("'></input</td><td><input name='genderIdentified[]' value='");
            print ($row["genderIdentified"]);
            print ("'></input</td><td><input name='workPhoneNumber[]' value='");
            print ($row["workPhoneNumber"]);
            print ("'></input</td><td><input name='homePhoneNumber[]' value='");
            print ($row["homePhoneNumber"]);
            print ("'></input</td><td><input name='mobilePhoneNumber[]' value='");
            print ($row["mobilePhoneNumber"]);
            print ("'></input</td><td><input name='addressLine1[]' value='");
            print ($row["addressLine1"]);
            print ("'></input</td><td><input name='addressLine2[]' value='");
            print ($row["addressLine2"]);
            print ("'></input</td><td><input name='city[]' value='");
            print ($row["city"]);
            print ("'></input</td><td><input name='state[]' value='");
            print ($row["state"]);
            print ("'></input</td><td><input name='zip[]' value='");
            print ($row["zip"]);
            print ("'></input</td><td><input name='emergencyContactNumber[]' value='");
            print ($row["emergencyContactNumber"]);
            print ("'></input</td><td><input name='emergencyContactRelation[]' value='");
            print ($row["emergencyContactRelation"]);
            print ("'></input</td><td><input name='emergencyContactName[]' value='");
            print ($row["emergencyContactName"]);
            print ("'></input</td><td><input name='primaryLanguage[]' value='");
            print ($row["primaryLanguage"]);
            print ("'></input</td></tr>");
          }
    
    print ("</table> ");
    print ("</div> ");
    
    print ("</form>");
    
    }

?>