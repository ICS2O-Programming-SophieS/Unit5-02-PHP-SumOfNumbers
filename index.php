<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
    <link rel="manifest" href="./fav/site.webmanifest">
    <link rel="stylesheet" href="./css/style.css">
    <title>Sum of Numbers in PHP</title>
  </head>
  <body>

	  
    <h1>Sum of Numbers in PHP</h1>
		<h3>This program will calculate and display the sum of numbers from 0 up to your number:</h3>
		<table>
			<tr align = "center">
				<td valign="top" align="right">					
					<form action="./display.php" method="post" target="result">		
						<label for="userNum">Enter a Number:</label>
						<input type="number" step="1" min="0" name="userNum" id="userNum"><br><br>		
						
						<input type="submit" value="Display Numbers">
					</form>
				</td>
				<td valign="top" align="left">
					<img src="./images/Numbers.png" alt="Numbers" width="40%">
				</td>
			</tr>
		</table>	
		
		<!-- Iframe for results -->
    	<iframe id="result" name="result">
    	</iframe>
	
  </body>
</html>
