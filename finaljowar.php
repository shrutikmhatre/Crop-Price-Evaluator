<?php

	
  $msp = $_POST['msp'];
  $moist = $_POST['moist'];
  $rbtn1 = $_POST['rbtn1'];
  $ph = $_POST['ph'];
  $sub = $_POST['sub'];
  $quan = $_POST['quan'];
  $rice= 2550;
  $Price=0;
if($moist <= 21)
{
  $Price=$rice*$quan*1.0417;
  		if ($rbtn1 == 'yes' and $ph<=8) 
  			{
  				
  				$Price=$Price+$Price*0.05;

  			}
  			elseif ($rbtn1 == 'yes' and $ph<=8.5)
  			{
  				$Price=$Price+$Price*0.025;
  			}
  		elseif ($rbtn1 == 'no' and $ph<=8)

  		 {
  			$Price=$Price+$Price*0.10;
  			$Price=$Price+$Price*0.05;
  		}
  		elseif ($rbtn1 == 'no' and $ph<=8.5) {
  			$Price=$Price+$Price*0.10;
  			$Price=$Price+$Price*0.05;
  		}
  }

	else
	{

			$Price=$rice*$quan*0.96;

				if ($rbtn1 == 'yes' and $ph<=8) 
  			{
  				
  				$Price=$Price+$Price*0.05;

  			}
  			elseif ($rbtn1 == 'yes' and $ph<=8.5)
  			{
  				$Price=$Price+$Price*0.025;
  			}
  		elseif ($rbtn1 == 'no' and $ph<=8)

  		 {
  			$Price=$Price+$Price*0.10;
  			$Price=$Price+$Price*0.05;
  		}
  		elseif ($rbtn1 == 'no' and $ph<=8.5) {
  			$Price=$Price+$Price*0.10;
  			$Price=$Price+$Price*0.05;
  		}




	}


$Price=round($Price);


	/*	
}

elseif($moist<=25) {

	$Price=$rice*$quan*0.96;
}

/*
elseif($rbtn1 == 'yes' and $moist<=21)
{
	$Price=$Price;
}

elseif($rbtn1 == 'yes' and $moist<=25)
{
	$Price=$Price;
}
elseif($rbtn1 == 'no' and $moist<=21)
{
	$Price=$Price+$Price*0.20;
}
elseif($rbtn1 == 'no' and $moist<=25)
{
	$Price=$Price+$Price*0.15;
}


elseif ($rbtn1 == 'yes' and $moist<=21 and ph<=8) {
	$Price=$Price*0.02;

}
elseif ($rbtn1 == 'yes' and $moist<=25 and ph<=8.5) {
	$Price=$Price*0.02;
}


elseif ($rbtn1 == 'no' and $moist<=21 and ph<=8) {
	$Price=$Price*0.05;

}
elseif ($rbtn1 == 'no' and $moist<=25 and ph<=8.5) {
	$Price=$Price*0.025;
}
*/
?>



<!DOCTYPE html>
<html>
<head>
	<style>
		table,tr,td {
					
					
					padding:40px ;
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
.output{

font-family: "Times New Roman", Times, serif;

font-size: 25px;

text-align:center;


}





	</style>
	<title>Final Price</title>
</head>
<body style="background-color:black;color:white">
	<div align="center">

		<form id="f3" action="qprice.php" method="POST">
			<h1>Quality Parameter</h1>

			
				
		
		
			<table>
				<tr>
					<td>








<p class="output" >Your Estimated Price is in the Range of:<br><br> <?php echo '<b style="color:black; font-family: "Times New Roman", Times, serif; font-size: 15px">'.$Price. '</b>' ; ?> <b>Rs</b><b style="color:#4aab94 ">......</b><b>To</b><b style="color: #4aab94">....</b>
	<?php echo '<b style="color:black; font-family: "Times New Roman", Times, serif; font-size: 30px">'.$rice.'</b>'; ?>  Rs</p>
	
		


	

</table>
		</form>
		
	</div>

</body>
</html>