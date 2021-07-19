


<!DOCTYPE html>
<html>
<head>
	<style>
		table,tr,td {
					
					
					padding:100px;
					background-color:#4aab94; 
	}	
         .dropbtn {
  background-color: black;
  color: white;
  padding: 10px 30px;
  font-size: 10px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;







		}






	</style>
	<title>Based on crop</title>
</head>
<body style="background-color:black;color:white">
	<div align="center">
	<form action="msprice.php" method="POST">	
	<table>
		<h1> Crop Information </h1>
		<table>

<tr>
				
			<td>
				<label style="color:black;  font-family:  Arial Black, Gadget, sans-serif; font-size: 15px">Select Crop:</label>

			<div class="dropdown">
  			<button class="dropbtn">SELECT CROP</button>
  				<div class="dropdown-content">
  					<a href="msprice.php">Rice</a>
  					<a href="mspwheat.php">Wheat</a>
  					<a href="mspjowar.php">Jowar</a>
  					<a href="mspmaize.php">Maize</a>
  				</div>
			</div>
			</td>
			</tr>
		</table>








