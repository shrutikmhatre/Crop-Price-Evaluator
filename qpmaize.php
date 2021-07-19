<!DOCTYPE html>
<html>
<head>
	<style>
		table,tr,td {
					
					
					padding:20px;
					background-color:#4aab94; 
		}

.submitbutton 
{
  align-self: center;
   background-color: #555555; 
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
	<title>Quality Parameter</title>
</head>
<body style="background-color:black;color:white">
	<div align="center">

		<form id="f2" action="finalmaize.php" method="POST">
			<h1>Quality Parameter</h1>
		
			<table>
				<tr>
					<td>
				<?php


  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $num3 = $_POST['num3'];
  $num4 = $_POST['num4'];
  $num5 = $_POST['num5'];
  $calc = $_POST['calc'];

if (is_numeric( $num1 ) && is_numeric( $num2 ) && is_numeric( $num3 ) && is_numeric( $num4 ) && is_numeric( $num5 )) {
	

	
		

		$msp1 = $num1 + $num2 + $num3 + $num4 + $num5;

		
		
	

	
}


?>
</td>
</tr>
				
					
				<tr>
					<td style="color:black" >
						<td style="color:black;  font-family:  Arial Black, Gadget, sans-serif; font-size: 15px">Calculated Msp</td>
						<td>
						<?php echo '<b style="color:black; font-family:  Arial Black, Gadget, sans-serif; font-size: 15px">'.$msp1.'</b>'; ?>
					</td>
					</td>
				</tr>
				<tr>
					<td style="color:black" >
						<td style="color:black;  font-family:  Arial Black, Gadget, sans-serif; font-size: 15px"> Enter Calculated Msp</td>
						<td>
						<input type="number" name="msp">
					</td>
					</td>
				</tr>

				<tr>
					<td style="color:black" >
						<td style="color:black;  font-family:  Arial Black, Gadget, sans-serif; font-size: 15px" >MOISTURE COUNT</td>
						<td>
						<input type="number" name="moist" placeholder="18 - 25 Wb" min=18 max=25 required />
					</td>
					</td>
				</tr>
				<tr>
					<td style="color:black">
					 
					
					    
					<td style="color:black; font-family:  Arial Black, Gadget, sans-serif">Fertilizer</td>
  						 <td>
    					 <input type="radio" id="yes" name="rbtn1" value="yes" required="">
    					 <label for="yes" style="color:black ">YES</label>
						
												
    					 <input type="radio" id="No"  name="rbtn1" value="no" required="">
     						<label for="No" style="color: black">NO</label >
					</td>
					</td>
					</td>
				</tr>	
                               
				<tr>
					<td style="color:black" >
						<td style="color:black;  font-family:  Arial Black, Gadget, sans-serif; font-size: 15px" >ENTER PH VALUE:</td>
						<td>
						<input type="number" step="0.1" name="ph" placeholder=" 7.5 - 8.5" min=7.5 max=8.5 required />
					</td>
					</td>
				</tr>
				<tr>
					<td style="color:black" >
						<td style="color:black;  font-family:  Arial Black, Gadget, sans-serif; font-size: 15px" >ENTER CROP QUANTITY(Quintal):</td>
						<td>
						<input type="number" name="quan" placeholder=" Quintal"required >
					</td>
					</td>
				</tr>
			<tr>
				<td align="center" colspan="3" ><input type="submit" name="sub" value="submit" class="submitbutton"></td>
			
				</tr>	
					     
				
			</table>
		</form>
		
	</div>

</body>
</html>