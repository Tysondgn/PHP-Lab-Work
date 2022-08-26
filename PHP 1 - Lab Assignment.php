<!--Problem 1. Take two values from two text boxes and display their sum if values are numeric otherwise
concatenate them. Output in a paragraph on the same page.-->
<html>
	<head>
		<title>Problem 1. Take two values from two text boxes and display their sum if values are numeric otherwise
concatenate them. Output in a paragraph on the same page.</title>
	</head>
	<body>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
			<input type="text" name="firstValue" placeholder="Enter First Value"  required/>
			<input type="text" name="secondValue" placeholder="Enter Second Value" required/>
			<input type="submit" value="add" />
		</form>
		
		<?php
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$v1 = $_REQUEST["firstValue"];
				$v2 = $_REQUEST["secondValue"];
				if(is_numeric($v1) && is_numeric($v2))
				{
					echo  "Summation is ".($v1 + $v2);
				}
				else
				{
					echo "Concatenation is ".$v1.$v2;
				}
			}
		?>
	</body>
</html>