<?php
if(isset($_POST['delete'])) {
	    $patient = $_POST['patient'];
	
	    
	    foreach ($patient as $id){
	        
	    
	        // Create connection
	        $conn = new mysqli($servername, $username, $password, $dbname);
	    
	        // Check connection
	        if ($conn->connect_error) {
	           die("Connection failed: " . $conn->connect_error);
	        } 
     
	        echo "Deleting: " . $id ."<br />" . mysqli_fetch_array($result);
	        
	        // sql to delete a record
		$sql = "DELETE FROM hos3_patients WHERE patient_id=$id";
		
		if ($conn->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . $conn->error;
		}
	        #mysqli_fetch_array($result);
	    }
    } // end brace for if(isset

?>