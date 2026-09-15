<html>
<title>Lecture 7: HTML FORM VALIDATION</title>
<body style="background-color: hotpink;">
    <h1>
        <font color="black"><?php echo "<center>Program 7</center><br>"; ?></font>
    </h1>
    <h3>
        <?php echo "<center><font color='black'>Description: This program shows on how to validate forms in HTML using PHP</font></center>"; ?>
    </h3>
    <form action="" method="GET">
        Input number: <input type="text" name="txtinput1"><br>
        Input number: <input type="text" name="txtinput2"><br>
        <input type="submit" name="btnadd" value="Add">
        <input type="submit" name="btnsubtract" value="Subtract">
        <input type="submit" name="btnmultiply" value="Multiply">
        <input type="submit" name="btndivide" value="Divide">
    </form>
    <?php
    function validateInput1() {
        $errorInput1 = 0;
        if (empty($_GET['txtinput1'])) {
            echo "<font color='red'>First number is empty.</font><br>";
            $errorInput1++;
        } else if (!is_numeric($_GET['txtinput1'])) {
            echo "<font color='red'>First number is not numeric.</font><br>";
            $errorInput1++;
        } else {
            $errorInput1 = 0;
        }
        return $errorInput1;
    }

    function validateInput2() {
        $errorInput2 = 0;
        if (empty($_GET['txtinput2'])) {
            echo "<font color='red'>Second number is empty.</font><br>";
            $errorInput2++;
        } else if (!is_numeric($_GET['txtinput2'])) {
            echo "<font color='red'>Second number is not numeric.</font><br>";
            $errorInput2++;
         } else {
            $errorInput2 = 0;
        }
        return $errorInput2;
    }

    if (isset($_GET['btnadd'])) {
        $errors = 0;
        $errors += validateInput1();
        $errors += validateInput2();

        if ($errors == 0) {
            $input1 = $_GET['txtinput1'];
            $input2 = $_GET['txtinput2'];

            $result = $input1 + $input2;

            echo "First number: " . $input1 . "<br>Second number " . $input2 . "<br>Sum: " . $result;
        }
    }

    if (isset($_GET['btnsubtract'])) {
        $errors = 0;
        $errors += validateInput1();
        $errors += validateInput2();

        if ($errors == 0) {
            $input1 = $_GET['txtinput1'];
            $input2 = $_GET['txtinput2'];

            $result = $input1 - $input2;

            echo "First number: " . $input1 . "<br>Second number " . $input2 . "<br>Difference: " . $result;
        }
    }

    if (isset($_GET['btnmultiply'])) {
        $errors = 0;
        $errors += validateInput1();
        $errors += validateInput2();

        if ($errors == 0) {
            $input1 = $_GET['txtinput1'];
            $input2 = $_GET['txtinput2'];

            $result = $input1 * $input2;

            echo "First number: " . $input1 . "<br>Second number " . $input2 . "<br>Product: " . $result;
        }
    }

    if (isset($_GET['btndivide'])) {
        $errors = 0;
        $errors += validateInput1();
        $errors += validateInput2();

        if ($errors == 0) {
            $input1 = $_GET['txtinput1'];
            $input2 = $_GET['txtinput2'];

            $result = $input1 / $input2;

            echo "First number: " . $input1 . "<br>Second number " . $input2 . "<br>Quotient: " . $result;
        }
    }
    ?>
    </body>
</html>