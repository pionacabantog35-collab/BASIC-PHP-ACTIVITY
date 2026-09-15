<html>
<title>Lecture 3: Variable Declarations</title>
<body style = "background-color: yellow;">
	<h1>
		<font color = "red"><?php echo "<center>Program 3</center><br>"; ?></font>
	</h1>
	<h3>
		<?php echo "<center><font color = 'blue' >Description: This program shows on how to use operators in PHP</font></center>"; ?>
		<?php
		$num1 = 10;
		$num2 = 5;
		$sum = $num1 + $num2;
		$difference = $num1 - $num2;
		$product = $num1 * $num2;
		$qoutient = $num1/ $num2;

		echo "First number: " . $num1;
		echo "<br>Second number: " . $num2;
		echo "<br>Sum: " . $sum;
		echo "<br>Difference:" . $difference;
		echo "<br>Product:" . $product;
		echo "<br>Qoutient:" .$qoutient;
		?>

	</h3>
</body>
</html>
