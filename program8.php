<html>
	<title>Lecture 6: HTML FORM VALIDATION</title>
	<body style="background-color: lightpink;">
	<h1>
		<font color="black"><?php echo "<center>Program 8</center><br>"; ?></font>
	</h1>
	<h3>
		<?php
			echo "<center><font color='purple'>Description: This program s will accept inputs for the rate per hour of an employee and the number of hours he worked for a week and compute for his gross pay which is the product of rate and the hours worked, tax which is 12% of the gross pay, and net pay which is the difference of the gross pay and tax.  The rate should be a number input from 500 to 2000 and hours worked should be numeric input from 20 to 60.</font></center>" ?>
	</h3>
		<form action="" method="GET">
		Input rate per hour: <input type="text" name="txtRate"><br>
		Input number of hours worked: <input type="text" name="txtHours"><br>
		<input type="submit" name="btncompute" value="Compute">
		</form>
	</body>
</html>
		<?php
			function validateRate() {
			$Rate = 0;
			$errorRate = 0;

		if (empty($_GET['txtRate'])) {
			echo "<font color='black'>Rate is empty.</font><br>";
			$errorRate ++;
			}
		else if (!is_numeric($_GET['txtRate'])) {
			echo "<font color='black'>Rate is not numeric.</font><br>";

			$errorRate ++;
			}
		else if (($_GET['txtRate']) < 500 || ($_GET['txtRate']) > 2000) {
			echo "<font color='black'>Rate is lower than 500/greater than 2000.</font><br>";
			$errorRate ++;
		}
			else {
		$errorRate = 0;
	}
	return $errorRate;
		}
		function validateHours() {
		$Hours = 0;
		$errorHours = 0;
		
		if (empty($_GET['txtHours'])) {
			echo "<font color='black'>Hours is empty.</font><br>";
			$errorHours ++;
	}
		else if (!is_numeric($_GET['txtHours'])) {
			echo "<font color='black'>Hours is not numeric.</font><br>";
			$errorHours ++;
		}
		else if (($_GET['txtHours']) < 20 || ($_GET['txtHours']) > 60) {
			echo "<font color='black'>Hours is lower than 20/greater than 60.</font><br>";
			$errorHours ++;
		}
		else {
			$errorHours = 0;
		}
		return $errorHours;
			}
		if (isset($_GET['btncompute'])) {
			$errors = 0;

			$errors += validateRate();
			$errors += validateHours();
		
		if ($errors == 0) {

		$Rate = $_GET['txtRate'];
		$Hours = $_GET['txtHours'];

		$grossPay = $Rate * $Hours;
		$tax = 0.12 * $grossPay;
		$netPay = $grossPay - $tax;

		echo "Rate per Hour: " . $Rate. "<br>Hours Worked: " . $Hours . "<br>Gross Pay: " . $grossPay . "<br>Tax: " . $tax . "<br>Net Pay: " . $netPay;
	}
}
?>