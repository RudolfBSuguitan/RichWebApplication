<!DOCTYPE html>
<html>
	<head>
		<meta name="description" content="First lab, Rich Web">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>JS Bin</title>
	
		
	
		<link href="style/webStyle.css" rel="stylesheet">
	
	</head>
	<body>
		<div id="topCont">
		    <article>
		      <h2>Rudolf Suguitan</h2>
		      <h3>Calculators</h3>
		      <section>
		        <h4>Handheld Calculator</h4>
		        <p>Most basic type of calculator on the market.</p>
		      </section>
		      <section>
		        <h4>Printing Calculator</h4>
		        <p>Calculators that were often used before computers</p>
		      </section>
		      <section>
		        <h4>Scientific Calculator</h4>
		        <p>Calculators that provide a wide-range of sophisticated conversions, statistics, etc.</p>
		      </section>
		    </article> 
		  </div>

		<div id="container">
			<div id="screen">
				<p2><?php echo $num;?></p2>
			</div>
			<div id="button_cont">
				<table>
					<tr>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='noOne'> 
								<input class="button" type="submit" value='('>
							</form>
						</td>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='noOne'> 
								<input class="button" type="submit" value=')'>
							</form>
						</td>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='noOne'> 
								<input class="button" type="submit" value='+_'>
							</form>
						</td>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='noOne'> 
								<input class="button" type="submit" value='/'>
							</form>
						</td>
					</tr>
					
					<tr>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='noSeven'> 
								<input class="button" type="submit" value='7'>
							</form>
						</td>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='noEight'> 
								<input class="button" type="submit" value='8'>
							</form>
						</td>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='noNine'> 
								<input class="button" type="submit" value='9'>
							</form>
						</td>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='noOne'> 
								<input class="button" type="submit" value='x'>
							</form>
						</td>
					</tr>
					
					<tr>
						<tr>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='noFour'> 
								<input class="button" type="submit" value='4'>
							</form>
						</td>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='noFive'> 
								<input class="button" type="submit" value='5'>
							</form>
						</td>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='noSix'> 
								<input class="button" type="submit" value='6'>
							</form>
						</td>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='noOne'> 
								<input class="button" type="submit" value='-'>
							</form>
						</td>
					</tr>
					</tr>
					
					<tr>
						<tr>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='noOne'> 
								<input class="button" type="submit" value='1'>
							</form>
						</td>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='noTwo'> 
								<input class="button" type="submit" value='2'>
							</form>
						</td>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='noThree'> 
								<input class="button" type="submit" value='3'>
							</form>
						</td>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='addNum'> 
								<input class="button" type="submit" value='+'>
							</form>
						</td>
					</tr>
					</tr>
					
					<tr>
						<tr>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='noZero'> 
								<input class="button" type="submit" value='0'>
							</form>
						</td>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='noOne'> 
								<input class="button" type="submit" value='.'>
							</form>
						</td>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='clearScreen'> 
								<input class="button" type="submit" value='C'>
							</form>
						</td>
						<td> <form action="index.php" method="post">
								<input type='hidden' name='action' value='equalNum'> 
								<input class="button" type="submit" value='='>
							</form>
						</td>
					</tr>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>