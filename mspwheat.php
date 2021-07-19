<!DOCTYPE html>
<html>
<head>
	<style>
		table,tr,td {
					
					
					padding:20px;
					background-color:#4aab94; 
		}





		.submitbutton {
			align-self: center;
   background-color: #555555; /* Green */
  border: none;
  color: white;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 20px;
  cursor: pointer;
  border-radius: 12px;
}

	</style>
	<title>Based on crop</title>
</head>
<body style="background-color:black;color:white">
	<div align="center">
	<form action="qpwheat.php" method="POST">	

	<table>

		<h1> M.S.P Information </h1>
		
			<tr>
				<td style="color:black">Crop Quantity : </td>
				<td>
				<input type="number" name="num1"required> (Quintal)
			    </td> 
			</tr>
			
			<tr>    
			    <td style="color:black">Labour Cost : </td>
			    <td>
			    <input type="number" name="num2"required> (Rs.)	
			    </td>
			</tr>
			<tr>    
			    <td style="color:black">Land under cultivation : </td>
			    <td>
			    <input type="number" name="num3"required> (Acres)	
			    </td>
			</tr>
			
			<tr>    
			    <td style="color:black">Seed & Fertilizer : </td>
			    <td>
			    <input type="number" name="num4"required> (Rs.)	
			    </td>
			</tr>
			<tr>    
			    <td style="color:black">Machinary & equipment cost : </td>
			    <td>
			    <input type="number" name="num5"required> (Rs.)	
			    </td>
			</tr>
			<tr>
				<td><button name="calc" class="submitbutton">Submit</button></td>
			</tr>
			

			
		
	</table>
</form>
    </div>
</body>
</html>
