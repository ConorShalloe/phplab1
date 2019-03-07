<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
/* 
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;

/**
* Allocate the mobile number session variable to the text box
*/

?>

<!DOCTYPE html>
<html>
    <head>
	      <title>eBusiness 2</title>
	</head>
    <body style="background-image:url('blue1.jpg'); background-size:cover;">
	    <div class="form">
		     <form name="Details" method="post" action="eBus3.php">
			      <center>
				       <table cellspacing="10">
					        <tr>
							     <td><b></b></td>
								 <td><b style="font-size:30px"> Enter in your details below</b></td>
							</tr>
                            <tr>
							     <td style="font-size:20px">Name</td>
								 <td><input type="text" id="txtName" name="txtName" value="" /></td>
							</tr>							
							<tr>
							     <td style="font-size:20px">Email</td>
								 <td><input type="text" id="txtNum" name="txtNum" value="" /></td>
							</tr>	
							<tr>
							     <td style="font-size:20px">Password</td>
                                                             <td><input type="password" maxlength="4" id="txtPassword" name="txtPassword" value="" /></td>
							</tr>	
							<tr>
							     
								 <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /></td>
							</tr>	
						</table>
					</center>
					
				<center>
				        
						
						<input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue" style="background-color: black; font-size: 20px; color: white">
			    </center>
				</div>
				</form>
			</body>
		</html>