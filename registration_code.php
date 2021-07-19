<?php
$name = $_POST['name'];
$fname = $_POST['fname'];
$gender = $_POST['gender'];
$bdate = $_POST['bdate'];
$card = $_POST['card'];
$mnumber = $_POST['mnumber'];
$farmer = $_POST['farmer'];
$address = $_POST['addr'];
$state = $_POST['state'];
$district = $_POST['district'];
$pin = $_POST['pin'];
$password = $_POST['password'];
	$dbhost="localhost";
		$dbuser="root";
		$dbpass="";
		$db="register";

		$connection = mysql_connect($dbhost,$dbuser,$dbpass);
		$db= mysql_select_db("register", $connection);

	if(!(empty($name)) || !(empty($fname)) || !(empty($gender)) || !(empty($bdate)) || !(empty($card)) || !(empty($mnumber)) || !(empty($farmer)) || !(empty($address)) || !(empty($state)) || !(empty($district)) || !(empty($pin)) || !(empty($password)))
	{
		if(mysqli_connect_error())
		{
			die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
		}
		else
		{
			$query = mysql_query("INSERT INTO users (Name,Father Name,Gender,Birth Dates,Aadhar Card no.,Mobile No.,Farmer type,Address,State,District,Pin Code,Password) VALUES ('$name', '$fname', '$gender', $bdate, $card, $mnumber, '$farmer', '$address', '$state', '$district', '$pin', '$password')");		
			echo "inserted";			
		}			
		echo "inserted";
	}	
	else
		{
			echo "feilds not filled";
			die();
		}
		mysql_close($connection);
?>