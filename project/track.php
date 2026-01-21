<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="Author" content ="Akowuah Samuel">
		<meta  name ="description" content = "this is a website to showcase my expense tracking project">
		<link rel = "icon" href ="20250730_2201_image.png" type="image/x-icon">
		<title>start tracking</title>
		<link rel="Stylesheet" type="text/css" href="tracksty.css">






	</head>

	<body>
	
	<div class = "maininfo">
	<div class="info">
	<table>
	<th>Expenses</th>
	<tr>
	<td> </td>
	</tr>
	</table>
	<img src="images-removebg-preview.png" ></img>
	</div>
	<div class="info">
	<table>
	<th>Sales</th>
	<img src="YdRQgN6J6iTc-removebg-preview.png" ></img>
	</table>
	</div>
	<div class="info"><table>
	<th>Net. Profit</th>
	</table>
	<img src="pngtree-market-forecast-icon-in-black-growth-symbol-profit-logo-financial-vector-png-image_47800354-removebg-preview.png" ></img>
	</div>
	</div>
	
	
	<form action = "formdets.php" method="POST">
	
	<div class="details">
	<fieldset>
	<legend>Start tracking</legend>
	<div class="in">
	<label for ="transaction" >Type of transaction</label><br>
	
	<select required id="transaction" name ="type_transaction"  >
	<option value="none">none</option>
	<option value="Expenses">Expenses</option>
	<option value="Sales">Sales</option>
	
	
	</select>
	</div><br>
	<div class="in"><label for = "discribe">Description</label><br>
	<input type= "text" name="discribe" id="discribe"></input></div><br>
	<div class="in"><label>Amount ($)</label><br>
	<input required type= "number" name="money" id="money"></input></div><br>
	<label>Date</label><br>
	<input required type="date" name= "time" id= "time"></input><br>
	<input type="submit" value="save"></input></div>
	</fieldset>

	</form>
	</div>
	<div class= "frame">
	<iframe src="formdets.php" style=""></iframe>
	</div>



	</body>
</html>