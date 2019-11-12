<!DOCTYPE html>
<html>
	<body style="font-family: ubuntu; background-color: grey;"><center>
		<div style="background-color: white; width: 750px;">
			<h2>Calculator</h2>
			<form action="pgm8.php" method="POST">
				<input id="input1" name="val1" value=0 type="number"><br>
				<input id="input2" name="val2" value=0 type="number"><br>
				<select name="operation" value="+">
				    	<option value="+">Add</option>
				    	<option value="-">Subtract</option>
				    	<option value="*">Multiply</option>
					<option value="/">Divide</option>
				</select><br>
				<input type="submit">
			</form>
			<?php
				if($_POST["operation"] == "+")
					echo($_POST["val1"] + $_POST["val2"]);
				if($_POST["operation"] == "-")
					echo($_POST["val1"] - $_POST["val2"]);
				if($_POST["operation"] == "*")
					echo($_POST["val1"] * $_POST["val2"]);
				if($_POST["operation"] == "/")
					echo($_POST["val1"] / $_POST["val2"]);
			?>
			<br>
		</div>
		<div  style="background-color: white; width: 750px;">
			<h2>Transpose</h2>
			<p>[[2 4][6 1][11 4]] ==> </p>
			<?php
				$val = [[2, 4], [6, 1], [11, 4]];
				$tran = [];
				echo("[");
				for($i=0;$i<2;$i++)	{
					echo("[");
					for($j=0;$j<3;$j++)	{
						$tran[$i][$j] = $val[$j][$i];
						echo($tran[$i][$j]." ");
					}
					echo("]");
				}
				echo("]");
			?>
			<br>
		</div>
		<div style="background-color: white; width: 750px;">
			<h2>Multiplication</h2>
			<p>[[2, 4][6, 1]] * [[1, 0][0, 1]] = </p>
			<?php
				$val1 = [[2, 4], [6, 1]];
				$val2 = [[1, 0], [0, 1]];
				$mul = [];
				echo("[");
				for($i=0;$i<2;$i++)	{
					echo("[");
					for($j=0;$j<2;$j++)	{
						for($k=0;$k<2;$k++)	{
							$mul[$i][$j] += $val1[$i][$k] * $val2[$k][$j]; 
						}
						echo($mul[$i][$j]." ");
					}
					echo("]");
				}
				echo("]");
			?>
			<br>
		</div>
		<div style="background-color: white; width: 750px;">
			<h2>Addition</h2>
			<p>[[2, 4][6, 1]] + [[1, 0][0, 1]] = </p>
			<?php
				$val1 = [[2, 4], [6, 1]];
				$val2 = [[1, 0], [0, 1]];
				$add = [];
				echo("[");
				for($i=0;$i<2;$i++)	{
					echo("[");
					for($j=0;$j<2;$j++)	{
						$add[$i][$j] = $val1[$i][$j] + $val2[$i][$j]; 
						echo($add[$i][$j]." ");
					}
					echo("]");
				}
				echo("]");
			?>
			<br>
		</div>
	</center></body>
</html>
