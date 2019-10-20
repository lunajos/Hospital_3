<?php include("views/header.php"); ?>

<form class="update_clients" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            
            <label for="patient_id"> ID </label>
            <input type="text" name="patient_id"><br>

            <label for="DOB"> DOB </label>   
            <input type="text" name="DOB"><br>
 
            <label for="firstName"> First Name </label>
            <input type="text" name="firstName"><br>
   
            <label for="lastName"> Last Name </label>
            <input type="text" name="lastName"><br>
            
            <label for="bornGender"> Born Gender </label>
            <input type="text" name="bornGender"><br>

            <input class="edit" type="reset" value="Clear">
                      
            <input class="edit" type="submit" name="show" value="Find Patient"><br>                    
</form>

<?php

    # Set ENV Variables
    $servername = "localhost";
    $username = "2019hospital3";
    $password = "2019hospital3";
    $dbname = "2019hospital3";
    

    # import show function
    include('controls/show_clients.php');
    
    # import delete function
    include('controls/delete_clients.php');
    
    # import update function
    include('controls/update_clients.php');
    

?>



<?php include 'views/footer.php'; ?>