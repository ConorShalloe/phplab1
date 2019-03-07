<!DOCTYPE html>
<html>
<body style="background-image:url('blue1.jpg'); background-size:cover;">
    <h1>Order Summary</h1>
    <hr/>
<!--  //Starting the session to get the session variable from last page-->
<?php

session_start();

$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];

echo "The name is : ".$fullNameValue.".";
echo "<br></br>";
echo "The total value is : &euro;".$totalValue2.".";
?>

</body>
</html>



