<?php include("views/header.php");?>
<div id="banner">&nbsp;</div>
<div id="featured">
    <div class="container">
        <div class="title">
            <h2>This is Riverside Hospitals clients add page.</h2>
            
            <ul>
			<li><a href="add_clients.php" accesskey="1" title="">Add Client</a></li>
			<li><a href="delete_clients.php" accesskey="2" title="">Delete Clients</a></li>
			<li><a href="update_clients.php" accesskey="3" title="">Update Client</a></li>					
		</ul>
        </div>
        <div id="extra" class="container">
            <div class="title">
                <div class="table">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <center>
                            <table>
                                <tr>
                                    <td colspan="2">
                                        <b> Add Patient </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Patient ID: </b>
                                    </td>
                                    <td>
                                        <input name="patient_id" size="5">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Patient First Name: </b>
                                    </td>
                                    <td>
                                        <input name="firstName" size="20" maxlength="20">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Patient middle Name: </b>
                                    </td>
                                    <td>
                                        <input name="middleName" size="15" maxlength="15">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Patient Last Name: </b>
                                    </td>
                                    <td>
                                        <input name="lastName" size="15" maxlength="15">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Patient DOB: </b>
                                    </td>
                                    <td>
                                        <input name="DOB" size="15" maxlength="15">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Patient born gender: </b>
                                    </td>
                                    <td>
                                        <input name="bornGender" size="15" maxlength="15">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Patient gender identity: </b>
                                    </td>
                                    <td>
                                        <input name="genderIdentified" size="15" maxlength="15">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Patient work Num: </b>
                                    </td>
                                    <td>
                                        <input name="workPhoneNumber" size="15" maxlength="15">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Patient home Num: </b>
                                    </td>
                                    <td>
                                        <input name="homePhoneNumber" size="15" maxlength="15">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Patient mobile Num: </b>
                                    </td>
                                    <td>
                                        <input name="mobilePhoneNumber" size="15" maxlength="15">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Patient address 1: </b>
                                    </td>
                                    <td>
                                        <input name="addressLine1" size="40" maxlength="40">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Patient address 2: </b>
                                    </td>
                                    <td>
                                        <input name="addressLine2" size="15" maxlength="15">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Patient city: </b>
                                    </td>
                                    <td>
                                        <input name="city" size="15" maxlength="15">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Patient state: </b>
                                    </td>
                                    <td>
                                        <input name="state" size="15" maxlength="15">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Patient zip: </b>
                                    </td>
                                    <td>
                                        <input name="zip" size="6" maxlength="6">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Patient emergency contact Num: </b>
                                    </td>
                                    <td>
                                        <input name="emergencyContactNumber" size="15" maxlength="15">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Patient emergency contact relation: </b>
                                    </td>
                                    <td>
                                        <input name="emergencyContactRelation" size="15" maxlength="15">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Patient emergency contact name: </b>
                                    </td>
                                    <td>
                                        <input name="emergencyContactName" size="15" maxlength="15">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Patient primary language: </b>
                                    </td>
                                    <td>
                                        <input name="primaryLanguage" size="15" maxlength="15">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <input type="reset" value="Clear">
                                    </td>
                                    <td align="right">
                                        <input type="submit" name="add" value="Add Patient">
                                    </td>
                                </tr>
                            </table>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php     

    # import Add function
    include('controls/add_client.php');
    
 ?>
<?php include './views/footer.php';?>